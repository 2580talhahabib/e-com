@extends('admin.layouts.app')
@section('page-title')
   Tax Management
@endsection
@section('admin-content')
                @include('admin.layouts.message')

    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-6">
                        <h2>Taxes List</h2>
                    </div>
                    <div class="col-md-6 text-right mt-2">
                        <a class="btn btn-success" href="{{ route('tax.create') }}">
                            <i class="fas fa-plus"></i> Add New Taxes
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
                                        <th>Tax Descripation</th>
                                        <th>Tax Value</th>
                                        <th class="float-left">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($taxes as $tax)
                                        <tr>
                                            <td>{{ $tax->id }}</td>
                                            <td>{{ $tax->tax_desc }}</td>
                                            <td>{{ $tax->tax_value }}</td>
                                            <td>
                                                <div class="d-flex justify-content-start">
                                                    <a href="{{ route('tax.edit', $tax->id) }}" 
                                                       class="btn btn-sm btn-primary mr-2">
                                                       <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <form action="{{ route('tax.destroy', $tax->id) }}" 
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
                                            <td colspan="5" class="text-center text-muted">No taxs found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE-->

                        <!-- Pagination -->
                        {{-- @if($taxs->hasPages())
                            <div class="d-flex justify-content-center">
                                {{ $taxs->links() }}
                            </div>
                        @endif --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

