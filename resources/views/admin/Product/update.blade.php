@extends('admin.layouts.app') @section('admin-content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Update Product</div>
                        <div class="card-body card-block">
                            <form action="{{ route('product.update',$edit->id) }}" method="post" class="" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Name</div>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    @error('name')
                                    <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Category</div>
                                        <select name="category_id" class="form-control">
                                            <option value="">Select a Category</option>
                                            @if ($categories->isNotEmpty()) @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Image</div>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Brand</div>
                                        <input type="text" name="brand" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Model</div>
                                        <input type="text" name="model" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Short Description</div>
                                        <textarea name="short_desc" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Description</div>
                                        <textarea name="desc" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Keywords</div>
                                        <textarea name="keywords" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Technical Specification</div>
                                        <textarea name="technical_specification" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Uses</div>
                                        <textarea name="uses" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Warranty</div>
                                        <textarea name="warranty" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Status</div>
                                        <select name="status" class="form-control">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Inventory Section -->
                                <div class="row addbutton">
                                    <div class="col-lg-12 inventory-item">
                                        <div class="card">
                                            <div class="card-body card-block">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">SKU</div>
                                                                <input type="text" name="inventries[0][sku]" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">MRP</div>
                                                                <input type="text" name="inventries[0][mrp]" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">Price</div>
                                                                <input type="text" name="inventries[0][price]" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">Size</div>
                                                                <select name="inventries[0][size_id]" class="form-control">
                                                                    @if ($sizes->isNotEmpty()) @foreach ($sizes as $size)
                                                                    <option value="{{ $size->id }}">{{ $size->size }}</option>
                                                                    @endforeach @endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">Color</div>
                                                                <select name="inventries[0][color_id]" class="form-control">
                                                                    @if ($colors->isNotEmpty()) @foreach ($colors as $color)
                                                                    <option value="{{ $color->id }}">{{ $color->color }}</option>
                                                                    @endforeach @endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <label for="attr_image_0">Image</label>
                                                            <input type="file" class="form-control" id="attr_image_0" name="inventries[0][attr_image]">
                                                        </div>
                                                    </div>
                                                    <div class="form-actions form-group col-4 mt-5">
                                                        <button class="btn btn-primary btn-sm addingbutton">Add</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
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
@endsection @section('admin-script')
<script>
    let addIndex = 1;

    // Add new inventory item
    $(".addingbutton").click(function(e) {
        e.preventDefault();

        let html = `
            <div class="col-lg-12 inventory-item">
                <div class="card">
                    <div class="card-body card-block">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">SKU</div>
                                        <input type="text" name="inventries[${addIndex}][sku]"

                                        class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">MRP</div>
                                        <input type="text" name="inventries[${addIndex}][mrp]" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Price</div>
                                        <input type="text" name="inventries[${addIndex}][price]" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Size</div>
                                        <select name="inventries[${addIndex}][size_id]" class="form-control">
                                            @if ($sizes->isNotEmpty())
                                                @foreach ($sizes as $size)
                                                    <option value="{{ $size->id }}">{{ $size->size }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Color</div>
                                        <select name="inventries[${addIndex}][color_id]" class="form-control">
                                            @if ($colors->isNotEmpty())
                                                @foreach ($colors as $color)
                                                    <option value="{{ $color->id }}">{{ $color->color }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                               <div class="form-group">
                                                            <label for="attr_image_${addIndex}}">Image</label>
                                                            <input type="file" class="form-control" id="attr_image_${addIndex}" name="inventries[${addIndex}][attr_image]">
                                                        </div>
                            </div>
                            <div class="form-actions form-group col-4 mt-5 text-right">
                                <button class="btn btn-danger btn-sm removebutton">Remove</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>`;

        $('.addbutton').append(html);
        addIndex++;
    });

    // Remove inventory item
    $(document).on('click', '.removebutton', function(e) {
        e.preventDefault();
        $(this).closest('.inventory-item').remove();
    });
</script>
@endsection