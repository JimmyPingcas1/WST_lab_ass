@extends('layouts.app') <!-- Breeze layout -->

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-semibold mb-4">Seeded Users List</h2>

    @if($users->isEmpty())
        <p class="text-gray-500">No users found.</p>
    @else
        <div class="overflow-x-auto bg-white shadow rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Username</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Active</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Last Login</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Created At</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($users as $user)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user?->id ?? '-' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user?->username ?? '-' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user?->name ?? '-' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user?->email ?? '-' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($user?->is_active)
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Yes</span>
                                @else
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">No</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user?->last_login?->format('Y-m-d H:i:s') ?? 'Never' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user?->created_at?->format('Y-m-d H:i:s') ?? '-' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
