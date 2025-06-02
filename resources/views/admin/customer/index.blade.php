@extends('admin.layouts.app')
@section('page-title')
   customer
@endsection
@section('admin-content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                @include('admin.layouts.message')

               <div class="row">
                <div class="col-md-6">
                    <h1>Customers</h1>
                </div>
                <div class="col-md-6 text-right mt-2">
                    <a class="btn btn-success" href="{{ route('customer.create')}}" >Add New Customers</a>
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
                                        <th>Email</th>
                                        <th>City</th>
                                        <th class="text-left">Action</th>
                                      

                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($customers->isNotEmpty())
                                        @foreach ($customers as $customer)
                                            <tr>
                                                <td>{{ $customer->id }}</td>
                                                <td>{{ $customer->name }}</td>
                                                <td>{{ $customer->email }}</td>
                                                <td>{{ $customer->city }}</td>
                                             <td >
                                                
                                                    <a href="{{ route('customer.show', $customer->id) }}"
                                                        class="btn btn-sm btn-primary me-2">View</a>
                                                    <a data-id="{{ $customer->id }}"
                                                        class="btn btn-sm status me-2 {{ $customer->status ? 'btn-success' : 'btn-danger' }}">{{ $customer->status ? 'Active' : 'Inactive' }}</a>
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
@section('admin-script')
  <script>
    $(document).ready(function(){
    $('.status').click(function(e){
        e.preventDefault();
        let button = $(this); // Store the button reference
        let stat_id = button.data('id');
        
        let url = "{{ route('customer.statuschange', ':id') }}".replace(':id', stat_id);
        
        $.ajax({
            url: url,
            type: 'GET', 
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    // Update button text and class
                    button.text(response.status_text);
                    if (response.status) {
                        button.removeClass('btn-danger').addClass('btn-success text-white');
                    } else {
                        button.removeClass('btn-success').addClass('btn-danger text-white');
                    }
                }
            },
            error: function(xhr) {
                console.error(xhr.responseText);
                toastr.error('Failed to update status');
            }
        });
    });
});
  </script>
@endsection
