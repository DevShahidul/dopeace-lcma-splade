<x-splade-modal>
    <h1 class="text-2xl font-semibold p-4">New Learning Center</h1>
    <x-splade-form :action="route('admin.learning-centers.store')" class="p-4 bg-white rounded-md space-y-2">
        <x-splade-input name="name" label="Name" />
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
        <x-splade-select name="ngo_id" label="{{__('NGO')}}">
            @foreach($ngos as $ngo)
                <option value="{{$ngo->id}}">{{$ngo->name}}</option>
            @endforeach
        </x-splade-select>
        <x-splade-submit />
    </x-splade-form>
</x-splade-modal>
