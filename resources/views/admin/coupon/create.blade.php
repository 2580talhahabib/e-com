@extends('admin.layouts.app')
@section('admin-content')
      <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                       
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Coupon Create</div>
                                    <div class="card-body card-block">
                                        <form action="{{ route('Coupon.store') }}" method="post" >
                                            @csrf
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Title</div>
                                                    <input type="text" id="username3" name="title" class="form-control">
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
                                                    <input type="text" id="username3" name="code" class="form-control">
                                                
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
                                                    <input type="text" id="username3" name="value" class="form-control">
                                                
                                                </div>
                                                  
                                                     @error('value')
                                                        <div class="text text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                            </div>
                                    <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Type</div>
                                                      <select name="type" id="type" class="form-control">
                                                    <option value="1">Value</option>
                                                    <option value="0">Percentage</option>
                                                   </select>
                                                </div>
                                            </div>
                                               <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Min Order Amt</div>
                                                    <input type="text" id="username3" name="min_order_amt" class="form-control">
                                                </div>
                                            </div>
                                               <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Is One Time</div>
                                                   <select name="is_onetime" id="is_onetime" class="form-control">
                                                    <option value="1">yes</option>
                                                    <option value="0">No</option>
                                                   </select>
                                                </div>
                                            </div>
                                      <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">status</div>
                                                   <select name="status" id="status" class="form-control">
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