<!-- resources/views/admin/show/show.blade.php -->
@extends('admin.layouts.app')
@section('page-title', 'show Details')
@section('admin-content')

    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                show Details
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tbody>
                                       
                                            <tr>
                                                <th>ID</th>
                                                <td>{{ $show->id }}</td>
                                            </tr>
                                            <tr>
                                                <th>Name</th>
                                                <td>{{ $show->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>{{ $show->email }}</td>
                                            </tr>
                                            <tr>
                                                <th>City</th>
                                                <td>{{ $show->city }}</td>
                                            </tr>
                                              <tr>
                                                <th>State</th>
                                                <td>{{ $show->state }}</td>
                                            </tr>
                                              <tr>
                                                <th>Zip</th>
                                                <td>{{ $show->zip }}</td>
                                            </tr>
                                              <tr>
                                                <th>Company</th>
                                                <td>{{ $show->company }}</td>
                                            </tr>
                                              <tr>
                                                <th>GstIn</th>
                                                <td>{{ $show->gstin }}</td>
                                            </tr>
                                              <tr>
                                                <th>Address</th>
                                                <td>{{ $show->address }}</td>
                                            </tr>
                                    
                                        <!-- Add other fields as needed -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
