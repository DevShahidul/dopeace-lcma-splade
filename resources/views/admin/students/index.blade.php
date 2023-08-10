<x-admin-layout>
    <div class="flex justify-between">
        <h1 class="text-2xl font-semibold pl-0 p-4">Students List</h1>
        <div class="p-4 pr-0">
            <Link slideover href="{{ route('admin.students.create') }}"
                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded text-white">New Student</Link>
        </div>
    </div>
    <x-splade-table :for="$students">
        @cell('action', $student)
            <div class="space-x-2">
                <Link slideover href="{{ route('admin.students.edit', $student) }}" class="text-green-400 hover:text-green-700 font-semibold">Edit</Link>
                <Link href="{{ route('admin.students.destroy', $student) }}" method="DELETE" confirm="Delete the student" confirm-text="Are you sure?" confirm-button="Yes" cancel-button="No" class="text-red-400 hover:text-red-700 font-semibold">Delete</Link>
            </div>
        @endcell
    </x-splade-table>
</x-admin-layout>
