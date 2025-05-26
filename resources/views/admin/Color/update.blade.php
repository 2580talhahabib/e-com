@extends('admin.layouts.app')
@section('admin-content')
      <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                       
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Update Color</div>
                                    <div class="card-body card-block">
                                        <form action="{{ route('color.update',$edit->id) }}" method="post" class="">
                                            @csrf
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Color</div>
                                                    <input type="text" id="username3" value="{{ $edit->color }}" name="color" class="form-control">
                                                
                                                </div>
                                                  
                                                     @error('color')
                                                        <div class="text text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Status</div>
                                                   <select name="status" id="" class="form-control">
                                                <option value="1"  {{ $edit->status == 1 ? 'selected' : '' }} >Active</option>
                                                <option value="0"  {{ $edit->status == 0 ? 'selected' : '' }} >InActive</option>
                                                </select> 
                                                </div>
                                            </div>
                                    
                                    
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-primary btn-sm">Update</button>
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