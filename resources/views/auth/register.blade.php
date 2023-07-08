@extends('layouts.guest')
@section('title', 'Register')

@section('body')
    <x-partials.authentication-card class="md:w-11/12 lg:w-10/12 xl:w-10/12">
        <x-display-validation-errors />
        <livewire:registration-form />
        <div class="py-6">
            <p>Have An account? <a href="{{route('login')}}" class="text-blue-800"> Login </a></p>
        </div>
    </x-partials.authentication-card>
@endsection
