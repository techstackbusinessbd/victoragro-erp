@extends('victoragro.layouts.master')

@section('title', 'Users List')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">User List</h5>
        <a href="#" class="btn btn-primary btn-sm">Create</a>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Sl#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Photo</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name ?? 'N/A' }}</td>
                    <td>{{ $user->email ?? 'N/A' }}</td>

                    <!-- Photo -->
                    <td>
                        @if ($user->photo)
                        <img src="{{ asset('storage/' . $user->photo) }}" alt="User Photo" width="30" height="30"
                            class="rounded-circle">
                        @else
                        N/A
                        @endif
                    </td>

                    <!-- Role -->
                    <td>
                        {{ $user->roles->pluck('name')->join(', ') ?: 'N/A' }}
                    </td>

                    <!-- Status Toggle -->
                    <td>
                        <!-- Hidden Form -->
                        <form id="toggle-status-form-{{ $user->id }}"
                            action="{{ route('admin.users.toggleStatus', $user->id) }}" method="POST"
                            style="display: none;">
                            @csrf
                            @method('PATCH')
                        </form>

                        <!-- Button -->
                        <button type="button"
                            class="badge border-0 {{ $user->is_active ? 'bg-label-success' : 'bg-label-danger' }}"
                            onclick="confirmToggleStatus({{ $user->id }}, {{ $user->is_active ? 'true' : 'false' }})">
                            {{ $user->is_active ? 'Active' : 'Inactive' }}
                        </button>
                    </td>

                    <!-- Actions -->
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="icon-base ti tabler-dots-vertical"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item text-primary" href="">
                                    <i class="icon-base ti tabler-eye me-1"></i> View
                                </a>
                                <a class="dropdown-item text-warning" href="">
                                    <i class="icon-base ti tabler-pencil me-1"></i> Edit
                                </a>
                                <a class="dropdown-item text-danger" href="">
                                    <i class="icon-base ti tabler-trash me-1"></i> Delete
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links('vendor.pagination.bootstrap-5') }}
    </div>
</div>

@endsection