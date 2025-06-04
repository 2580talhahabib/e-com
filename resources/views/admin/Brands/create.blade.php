@extends('admin.layouts.app')
@section('admin-content')
      <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                       
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Create Brand</div>
                                    <div class="card-body card-block">
                                        <form action="{{ route('brand.store') }}" method="post" class="" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                    <lable class="form-label">Name</lable>
                                                    <input type="text" id="username3" name="name" class="form-control">
                                                </div>
                                                     @error('name')
                                                        <div class="text text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                      <div class="form-group">
                                                    <lable class="form-label">Image</lable>
                                                    <input type="file" id="username3" name="image" class="form-control">
                                                </div>
                                                    <div class="form-group">
                                                    <lable class="form-label">Status</lable>
                                                 <select name="status" id="" class="form-control">
                                                    <option value="1">Active</option>
                                                    <option value="0">InActive</option>
                                                 </select>
                                                </div>
                                                <div class="form-group">
                                                    <lable class="form-label">Show on Home</lable>
                                                <input type="hidden" name="show_on_home" id="" value="0">
                                                <input type="checkbox" name="show_on_home" id="" value="1">
                                                </div>
                                            </div>
                                            
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                      
                    </div>
                </div>
            </div>
@endsection