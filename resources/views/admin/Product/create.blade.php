@extends('admin.layouts.app')
@section('admin-content')
      <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                       
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Create Product</div>
                                    <div class="card-body card-block">
                                        <form action="{{ route('product.store') }}" method="post" class="" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Name</div>
                                                    <input type="text" id="username3" name="name" class="form-control">
                                                </div>
                                                     @error('name')
                                                        <div class="text text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                            </div>
                                               <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Category</div>
                                                   <select name="category_id" id="" class="form-control">
                                                    <option value="">Select a Category</option>
                                                    @if ($categories ->isNotEmpty())
                                                        @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                            
                                                        @endforeach
                                                    @endif
                                                   </select>
                                                </div>
                                                   
                                            </div>
                                                 <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Image</div>
                                                    <input type="file" id="username3" name="image" class="form-control">
                                                </div>
                                                   
                                            </div>
                                               <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Brand</div>
                                                    <input type="text" id="username3" name="brand" class="form-control">
                                                </div>
                                                   
                                            </div>
                                                <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Model</div>
                                                    <input type="text" id="username3" name="model" class="form-control">
                                                </div>
                                                    
                                            </div>
                                             <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Short Descripation</div>
                                                   <textarea name="short_desc" id="" class="form-control"></textarea>
                                                </div>
                                                  
                                            </div>
                                              <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Descripation</div>
                                                   <textarea name="desc" id="" class="form-control"></textarea>
                                                </div>
                                                  
                                            </div>
                                              <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">keyword</div>
                                                   <textarea name="keywords" id="" class="form-control"></textarea>
                                                </div>
                                                  
                                            </div>
                                              <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Technical Specification</div>
                                                   <textarea name="technical_specification" id="" class="form-control"></textarea>
                                                </div>
                                                  
                                            </div>
                                              <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">uses</div>
                                                   <textarea name="uses" id="" class="form-control"></textarea>
                                                </div>
                                                  
                                            </div>
                                               <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Warnty</div>
                                                   <textarea name="waranty" id="" class="form-control"></textarea>
                                                </div>
                                                  
                                            </div>
                                         
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Status</div>
                                                   <select name="status" id="" class="form-control">
                                                <option value="1" >Active</option>
                                                <option value="0" >InActive</option>
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