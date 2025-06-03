@extends('admin.layouts.app')
@section('page-title')
   Brands Management
@endsection
@section('admin-content')
                @include('admin.layouts.message')

    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-6">
                        <h2>Brands List</h2>
                    </div>
                    <div class="col-md-6 text-right mt-2">
                        <a class="btn btn-success" href="{{ route('brand.create') }}">
                            <i class="fas fa-plus"></i> Add New Brand
                        </a>
                    </div>
                </div>

                <div class="row m-t-30">
                    <div class="col-md-12">
                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th class="text-left">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($brands as $brand)
                                        <tr>
                                            <td>{{ $brand->id }}</td>
                                            <td>{{ $brand->name }}</td>
                                            <td>
                                                @if ($brand->image)
                                                    <img src="{{ url('uploads/Brands/' . $brand->image) }}"
                                                         alt="{{ $brand->image }}" 
                                                         style="width: 80px; height: 50px; object-fit: contain;">
                                                @else
                                                    <span class="text-muted">No Image</span>
                                                @endif
                                            </td>
                                            <td>
                                                <span class="badge badge-{{ $brand->status ? 'success' : 'danger' }}">
                                                    {{ $brand->status ? 'Active' : 'Inactive' }}
                                                </span>
                                            </td class="ml-5">
                                            <td>
                                                <div class="d-flex justify-content-start">
                                                    <a href="{{ route('brand.edit', $brand->id) }}" 
                                                       class="btn btn-sm btn-primary mr-2">
                                                       <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <form action="{{ route('brand.destroy', $brand->id) }}" 
                                                          method="POST" >
                                                         
                                                        @csrf
                                                        
                                                        <button type="submit" class="btn btn-sm btn-danger">
                                                            <i class="fas fa-trash"></i> Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center text-muted">No brands found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE-->

                        <!-- Pagination -->
                        {{-- @if($brands->hasPages())
                            <div class="d-flex justify-content-center">
                                {{ $brands->links() }}
                            </div>
                        @endif --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

