@extends('admin.layouts.app')
@section('admin-content')
  <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Category Form</div>
                                    <div class="card-body">
                                 
                                        <form action="{{ route('category.store') }}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Name</label>
                                                <input type="text" class="form-control" name="name">
                                                @error('name')
                                                    <div class="text text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                             <div class="form-group">
                                                @if ($categories->isNotEmpty())
                                                <label for="cc-number" class="control-label mb-1">Parent Category</label>
                                                <select name="parent_category" class="form-control">
                                                    <option value="">Add Parent Category</option>
                                                    @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option> 
                                                    @endforeach
                                                </select>
                                               
                                                @endif
                                            </div>
                                             <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Image</label>
                                                <input type="file" class="form-control" name="category_image">
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-primary w-100">Sumit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                        
                    </div>
                </div>
            </div>


      <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                       
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Category Form</div>
                                    <div class="card-body card-block">
                                        <form action="{{ route('category.store') }}" method="post" class="">
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
                                                    <div class="input-group-addon">Parent Category</div>
                                                    @if ($categories->isNotEmpty())
                                                          <select name="parent_category" class="form-control">
                                                        <option value="">Add Parent Category</option>
                                                        @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                            
                                                        @endforeach
                                                        
                                                    </select>
                                                    @endif
                                                </div>
                                            </div>
                                              <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Image</div>
                                                    <input type="file" id="username3" name="category_image" class="form-control">
                                                
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