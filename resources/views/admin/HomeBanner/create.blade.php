@extends('admin.layouts.app')
@section('admin-content')
      <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                       
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Create HomeBanner</div>
                                    <div class="card-body card-block">
                                        <form action="{{ route('homebanner.store') }}" method="post" class="" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                    <lable class="form-label">Btn Text</lable>
                                                    <input type="text" value="{{ old('btn-text') }}" id="username3" name="btn_txt" class="form-control">
                                                </div>
                                                     
                                                    <div class="form-group">
                                                    <lable class="form-label">Btn Link</lable>
                                                    <input type="url" value="{{ old('btn_link') }}" id="username3" name="btn_link" class="form-control">
                                                </div>
                                                    
                                                      <div class="form-group">
                                                    <lable class="form-label">Image</lable>
                                                    <input type="file" id="username3" value="{{ old('image') }}" name="image" class="form-control">
                                                </div>
                                                  @error('image')
                                                        <div class="text text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                    <div class="form-group">
                                                    <lable class="form-label">Status</lable>
                                                 <select name="status" id="" class="form-control">
                                                    <option value="1">Active</option>
                                                    <option value="0">InActive</option>
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