<x-admin-layout>
    <h1 class="text-2xl font-semibold p-4">New Permission</h1>
    <x-splade-form :action="route('admin.permissions.store')" class="p-4 bg-white rounded-md space-y-2">
        <x-splade-input name="name" label="Name" />
        <x-splade-select name="group_name" label="Group Name">
            <option selected="" disabled="">Select Group</option>
            <option value="users_permissions">Users permissions</option>
            <option value="staff_permissions">Staff permissions</option>
            <option value="ngos_permissions">Ngos permissions</option>
            <option value="learning_centers_permissions">Learning centers permissions</option>
            <option value="system_manage_permissions">System manage permissions</option>
            <option value="students_manage_permissions">Students permissions</option>
        </x-splade-select>
        <x-splade-select name="roles[]" :options="$roles" multiple relation choices label="Roles" />
        <x-splade-submit />
    </x-splade-form>
</x-admin-layout>
