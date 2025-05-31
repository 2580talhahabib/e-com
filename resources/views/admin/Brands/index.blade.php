@extends('admin.layouts.app')
@section('page-title')
   brand
@endsection
@section('admin-content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                @include('admin.layouts.message')

               <div class="row">
                <div class="col-md-6">
                    <h1>brand</h1>
                </div>
                <div class="col-md-6 text-right mt-2">
                    <a class="btn btn-success" href="{{ route('brand.create') }}" >Add New Brands</a>
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
                                        <th class="text-center">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($brands->isNotEmpty())
                                 
                                        @foreach ($brands as $brand)
                                            <tr>
                                                <td>{{ $brand->id }}</td>
                                                <td>{{ $brand->name }}</td>
                                               <td>
                                                @if ($brand->image)
                                               <img src="{{ url('uploads/Brands/' . $brand->image) }}"
                                                            alt="{{ $brand->name }}" style="max-width: 100px; height: auto;">
                                                @else
                                                    <p>No Image Found</p>
                                                @endif
                                            </td>
                                                <td>{{( $brand->status  == 1) ? 'Active' : 'InActive'}}</td>
                                                <td class="text-center ">
                                                    <a href="{{ route('brand.edit', $brand->id) }}"
                                                        class="btn btn-sm btn-primary me-2">Update</a>

                                                    <form action="{{ route('brand.destroy', $brand->id) }}"
                                                        method="POST" style="display:inline-block;">
                                                        @csrf
                                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach
                                    @endif




                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE-->
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
