<x-splade-modal>
    <h1 class="text-2xl font-semibold p-4">New Students</h1>
    <x-splade-form default="{ is_still_in_learning_center: true }" :action="route('admin.students.store')" class="p-4 bg-white rounded-md space-y-2">
        <x-splade-input name="first_name" label="First Name" />
        <x-splade-input name="last_name" label="Last Name" />
        <x-splade-input name="fathers_name" label="Fathers Name" />
        <x-splade-input name="mothers_name" label="Mothers Name" />
        <x-splade-input name="phone" label="Phone" />
        <x-splade-input name="email" label="Email" />
        <x-splade-input name="facebook_url" label="Facebook url" />
        <x-splade-input name="whatsapp_number" label="Whatsapp number" />
        <x-splade-select name="gender" label="{{__('Gender')}}">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </x-splade-select>
        <x-splade-input name="birth_date" label="Birth date" date />
        <x-splade-select name="country_id" label="{{__('Country')}}">
            @foreach($countries as $country)
                <option value="{{$country->id}}">{{$country->name}}</option>
            @endforeach
        </x-splade-select>
        <x-splade-select name="state_id" label="{{__('State')}}">
            @foreach($states as $state)
                <option value="{{$state->id}}">{{$state->name}}</option>
            @endforeach
        </x-splade-select>
        <x-splade-select name="city_id" label="{{__('City')}}">
            @foreach($cities as $city)
                <option value="{{$city->id}}">{{$city->name}}</option>
            @endforeach
        </x-splade-select>
        <x-splade-input name="zip_code" label="{{__('Zip Code')}}" />
        <x-splade-input name="address" label="{{__('Address')}}" />
        <x-splade-select name="learning_center_id" label="{{__('Learning Center')}}">
            @foreach($learningCenters as $learningCenter)
                <option value="{{$learningCenter->id}}">{{$learningCenter->name}}</option>
            @endforeach
        </x-splade-select>
        <x-splade-select name="learning_center_type" label="{{__('Learning Center Type')}}">
            <option value="coaching">Coaching</option>
            <option value="pre_school">Pre School</option>
        </x-splade-select>
        <x-splade-select name="class_id" label="{{__('Class')}}">
            @foreach($classes as $class)
                <option value="{{$class->id}}">{{$class->name}}</option>
            @endforeach
        </x-splade-select>
        <x-splade-input name="class_roll" label="{{__('Class Roll')}}" />
        <x-splade-select name="section_id" label="{{__('Section')}}">
            @foreach($sections as $section)
                <option value="{{$section->id}}">{{$section->name}}</option>
            @endforeach
        </x-splade-select>
        <x-splade-input name="enrollment_date" label="Date of Enrollment" date />
        
        <label class="flex items-center">
            <input class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 disabled:opacity-50" v-model="form.is_still_in_learning_center" type="checkbox" name="is_still_in_learning_center" />
            <span class="ml-2">Is still in learning center</span>
        </label>
        <div class="space-y-2" v-show="!form.is_still_in_learning_center">
            <x-splade-input name="institute_name" label="Institute name" />
            <x-splade-select name="grade_of_students" label="{{__('Grade of Students')}}">
                <option value="coaching">Coaching</option>
            </x-splade-select>
            <x-splade-input name="institute_class_roll" label="Class roll of current institute" />
            <x-splade-input name="address_of_institute" label="Address Of Institute" />
            <x-splade-input name="department" label="Department" />
            <x-splade-input name="graduated_date" label="Graduated date" date />
        </div>
        <x-splade-submit />
    </x-splade-form>
</x-splade-modal>
