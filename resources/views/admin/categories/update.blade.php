@extends('admin.layouts.app')
@section('admin-content')
      <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                 
                <div class="col-md-12  m-3">
                    <a class="btn btn-success" href="{{ route('category.index') }}" >Back</a>
                </div>
               </div>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Update Category</div>
                                    <div class="card-body card-block">
                                        <form action="{{ route('category.update',$edit->id) }}" method="post">
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
                                                    <div class="input-group-addon">Slug</div>
                                                    <input type="text" id="username3" value="{{ $edit->slug }}" name="slug" class="form-control">
                                                
                                                </div>
                                                  
                                                     @error('slug')
                                                        <div class="text text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
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