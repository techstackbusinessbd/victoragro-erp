@extends('victoragro.layouts.master')

@section('title', 'Product List')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Product List</h5>
        <a href="#" class="btn btn-primary btn-sm">Create</a>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Sl#</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Pack Size</th>
                    <th>Pack Type</th>
                    <th>Unit</th>
                    <th>Price</th>
                    <th>Commission</th>
                    <th>Photo</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->name_en }}</td>
                    <td>{{ $product->category->name ?? 'N/A' }}</td>
                    <td>{{ $product->size . ' ' . ($product->unit->name ?? '') }}</td>
                    <td>{{ $product->pack_size }}</td>
                    <td>{{ $product->packType->name ?? 'N/A' }}</td>
                    <td>{{ number_format($product->price, 2) }} Tk</td>
                    <td>{{ $product->commission }}%</td>
                    <td>
                        @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" width="40" height="40"
                            class="rounded-circle" alt="Product">
                        @else
                        N/A
                        @endif
                    </td>
                    <td>
                        <span class="badge {{ $product->status ? 'bg-label-success' : 'bg-label-danger' }}">
                            {{ $product->status ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                    <td>
                        <!-- Actions like View, Edit, Delete -->
                        <div class="dropdown">
                            <button class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="ti ti-dots-vertical"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item text-primary" href="#"><i class="ti ti-eye me-1"></i> View</a>
                                <a class="dropdown-item text-warning" href="#"><i class="ti ti-pencil me-1"></i>
                                    Edit</a>
                                <a class="dropdown-item text-danger" href="#"><i class="ti ti-trash me-1"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-2">
            {{ $products->links() }}
        </div>
    </div>
</div>

@endsection