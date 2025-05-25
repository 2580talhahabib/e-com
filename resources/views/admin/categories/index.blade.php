@extends('admin.layouts.app')
@section('page-title')
    Category
@endsection
@section('admin-content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                @include('admin.layouts.message')

               <div class="row">
                <div class="col-md-6">
                    <h1>Category</h1>
                </div>
                <div class="col-md-6 text-right mt-2">
                    <a class="btn btn-success" href="{{ route('category.create') }}" >Add New Category</a>
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
                                        <th>Slug</th>
                                        <th class="text-center">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($categories->isNotEmpty())
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td>{{ $category->id }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->slug }}</td>
                                                <td class="text-center ">
                                                    <a href="{{ route('category.edit', $category->id) }}"
                                                        class="btn btn-sm btn-primary me-2">Update</a>

                                                    <form action="{{ route('category.destroy', $category->id) }}"
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
