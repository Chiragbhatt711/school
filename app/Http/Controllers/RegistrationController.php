<?php

namespace App\Http\Controllers;

use App\Events\AccountStatusChanged;
use App\Http\Requests\RegistrationRequest;
use App\Services\AccountApplication\AccountApplicationService;
use App\Services\User\UserService;
use Auth;
use App\Models\School;
use App\Services\School\SchoolService;
use App\Http\Requests\SchoolStoreRequest;

class RegistrationController extends Controller
{
    /**
     * Account application service instance.
     */
    public AccountApplicationService $accountApplicationService;

    /**
     * User service instance.
     */
    public UserService $userService;
    /**
     * @var SchoolService
     */
    public $schoolService;

    public function __construct(AccountApplicationService $accountApplicationService, UserService $userService, SchoolService $schoolService)
    {
        $this->accountApplicationService = $accountApplicationService;
        $this->userService = $userService;

        $this->schoolService = $schoolService;
        $this->authorizeResource(School::class, 'school');
    }

    public function registerView()
    {
        return view('auth.register');
    }

    public function register(RegistrationRequest $request, SchoolStoreRequest $schoolRequest)
    {
        $school =  $this->schoolService->createSchool($schoolRequest->validated());
        $request['school_id'] = $school->id;

        $request['role'] = 2;

        $user = $this->userService->createUser($request);

        //assign applicant role
        // $user->assignRole('applicant');

        //assign admin role
        $user->assignRole('admin');

        $accountApplication = $this->accountApplicationService->createAccountApplication($user->id, $request->role);

        Auth::login($user);

        $status = 'Application Received';
        $reason = 'Application has been received, we would reach out to you for further information';
        $accountApplication->setStatus($status, $reason);

        //dispatch event
        AccountStatusChanged::dispatch($user, $status, $reason);

        return back()->with('success', 'Registration complete, you would receive an email to verify your account');
    }
}
