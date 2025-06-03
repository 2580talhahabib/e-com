@extends('admin.layouts.app')
@section('admin-content')
  <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Category Update</div>
                                    <div class="card-body">
                                 
                                        <form action="{{route('category.update',$edit->id) }}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Name</label>
                                                <input type="text" class="form-control" value="{{ $edit->name }}" name="name">
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
                                                    <option value="{{ $category->id }}" {{ $edit->parent_category ? 'selected' : '' }}>{{ $category->name }}</option> 
                                                    @endforeach
                                                </select>
                                               
                                                @endif
                                            </div>
                                             <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Image</label>
                                                <input type="file" class="form-control" name="category_image">
                                            </div>
                                        
                                            
                                                 <img src="{{ url('uploads/Category/'.$edit->category_image) }}" 
                                             alt="{{ $edit->category_image }}" 
                                             style="max-width: 200px; height: auto;margin:5px;"
                                             class="img-thumbnail">
                                        
                                      
                                            <div>
                                                 <div class="form-group">
    <label for="show_on_home" class="control-label mb-1">Show on Home</label>
    <input type="hidden" name="show_on_home" value="0">
    <input type="checkbox" 
           id="show_on_home" 
           name="show_on_home" 
           value="1" 
           class="ml-1" 
           {{ $edit->show_on_home ? 'checked' : '' }}>
</div>
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


@endsection