@extends('admin.layouts.app')
@section('admin-content')
      <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                       
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Coupon Update</div>
                                    <div class="card-body card-block">
                                        <form action="{{ route('Coupon.store') }}" method="post" >
                                            @csrf
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Title</div>
                                                    <input type="text" id="username3" value="{{ $edit->title }}"  name="title" class="form-control">
                                                </div>
                                                     @error('title')
                                                        <div class="text text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Code</div>
                                                    <input type="text" id="username3" value="{{ $edit->code }}" name="code" class="form-control">
                                                
                                                </div>
                                                  
                                                     @error('code')
                                                        <div class="text text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Value</div>
                                                    <input type="text" id="username3" value="{{ $edit->value }}" name="value" class="form-control">
                                                
                                                </div>
                                                  
                                                     @error('value')
                                                        <div class="text text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
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