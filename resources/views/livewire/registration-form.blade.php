@isset($roles)
    <form action="{{route('register')}}" method="POST" enctype="multipart/form-data" class="w-full">
        <div class="card-body" >
            {{-- <x-select id="role" name="role" label="Register as" class="capitalize">
                    @foreach ($roles as $item)
                        <option value="{{$item['id']}}">{{$item['name']}}</option>
                    @endforeach
            </x-select>
            <x-select id="school" name="school" label="School" class="text-capitalize">
                    @foreach ($schools as $item)
                        <option value="{{$item['id']}}" >{{$item['name']}} - {{$item['address']}}</option>
                    @endforeach
            </x-select> --}}
            {{-- <livewire:create-user-fields/> --}}
            <livewire:create-user-fields role="Admin" />
            <h4 class="text-bold text-xl md:text-3xl col-span-12 text-center font-bold">School information</h4>
            <div class="md:grid grid-cols-12 gap-3 w-full">
                <x-input name="name" id="name" type="text" placeholder="Enter name of school" label="School Name *" group-class="col-span-6"/>
                <x-textarea id="address" name="address" placeholder="Enter school branch address" label="School Address *" group-class="col-span-6"/>
                <x-input name="initials" id="initials" type="text" placeholder="Enter school initials" label="School initials" group-class="col-span-6"/>
                <x-input name="phone" id="phone" placeholder="Enter school phone number" label="School Phone Number" type="tel" group-class="col-span-6"/>
                <x-input name="email" id="email" placeholder="Enter school Email" label="School Email address" type="email" group-class="col-span-6"/>
                <x-input name="logo" id="logo" label="Upload file" type="file" group-class="col-span-6"/>
            </div>
            @csrf
            <x-button label="Register" icon="fas fa-key" type="submit" class="w-full md:w-12/12"/>
        </div>
        <hr>
    </form>
@else
   <p>Couldn't create user, Roles not found.</p>
@endisset
