@extends('admin.layouts.app')
@section('admin-content')
      <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                       
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Update Brand</div>
                                    <div class="card-body card-block">
                                        <form action="{{ route('brand.update',$edit->id) }}" method="post" class="" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Name</div>
                                                    <input type="text" id="username3" value="{{ $edit->name }}" name="name" class="form-control">
                                                
                                                </div>
                                                  
                                                     @error('name')
                                                        <div class="text text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                            </div>
                                             <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Image</div>
                                                    <input type="file" id="username3" name="image" class="form-control">
                                                </div>
                                               @error('image')
                                                   {{ $message }}
                                               @enderror
                                            </div>
                                            <img src="{{ url('uploads/Brands/'.$edit->image) }}" 
                                             alt="{{ $edit->name }}" 
                                             style="max-width: 200px; height: auto;"
                                             class="img-thumbnail">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Status</div>
                                                   <select name="status" id="" class="form-control">
                                                <option value="1"{{ $edit->status == 1 ? 'selected' : '' }} >Active</option>
                                                <option value="0" {{ $edit->status == 0 ? 'selected' : '' }} >InActive</option>
                                                </select> 
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