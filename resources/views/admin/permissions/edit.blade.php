<x-admin-layout>
    <h1 class="text-2xl font-semibold p-4">Edit Permission</h1>
    <x-splade-form :default="$permission" :action="route('admin.permissions.update', $permission)" method="PUT" class="p-4 bg-white rounded-md space-y-2">
        <x-splade-input name="id" type="hidden" value="{{$permission->id}}" />
        <x-splade-input name="name" label="Name" />
        <x-splade-select name="group_name" label="Group Name">
            <option selected="" disabled="">Select Group</option>
            <option value="users_permissions" {{$permission->group_name == 'users_permissions' ? 'selected' : ''}}>Users permissions</option>
            <option value="staff_permissions" {{$permission->group_name == 'staff_permissions' ? 'selected' : ''}}>Staff permissions</option>
            <option value="ngos_permissions" {{$permission->group_name == 'ngos_permissions' ? 'selected' : ''}}>Ngos permissions</option>
            <option value="learning_centers_permissions" {{$permission->group_name == 'learning_centers_permissions' ? 'selected' : ''}}>Learning centers permissions</option>
            <option value="system_manage_permissions" {{$permission->group_name == 'system_manage_permissions' ? 'selected' : ''}}>System manage permissions</option>
            <option value="students_manage_permissions" {{$permission->group_name == 'students_manage_permissions' ? 'selected' : ''}}>Students permissions</option>
        </x-splade-select>
        <x-splade-select name="roles[]" :options="$roles" multiple relation choices label="Roles" />
        <x-splade-submit />
    </x-splade-form>
</x-admin-layout>
