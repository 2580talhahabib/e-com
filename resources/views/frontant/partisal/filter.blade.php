                     {{-- frontant/partisal/products.blade.php --}}
<ul class="aa-product-catg aa-popular-slider ">
                     @if(isset($products) && $products->isNotEmpty())
    @foreach ($products as $producting)
        <li  >
            <figure>
                <a class="aa-product-img" href="#">
                    <img src="{{ url('uploads/product/'.$producting->image) }}" alt="product image"  style="height: 200px;width:200px;">
                </a>
                <a class="aa-add-card-btn" href="#">
                    <span class="fa fa-shopping-cart"></span>Add To Cart
                </a>
                <figcaption>
                    <h4 class="aa-product-title">
                        <a href="#">{{ $producting->name ?? 'Product Name' }}</a>
                    </h4>
                    @if($producting->product_attr && $producting->product_attr->first())
                        <span class="aa-product-price">${{ $producting->product_attr->first()->price }}</span>
                        <span class="aa-product-price">
                            <del>${{ $producting->product_attr->first()->mrp }}</del>
                        </span>
                    @endif
                </figcaption>
            </figure>                     
            <div class="aa-product-hvr-content">
                <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                    <span class="fa fa-heart-o"></span>
                </a>
                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                    <span class="fa fa-exchange"></span>
                </a>
            </div>
            <!-- product badge -->
            <span class="aa-badge aa-sale" href="#">SALE!</span>
        </li>
    @endforeach
@else
    <li>
        <p>No products found</p>
    </li>
@endif 
        </ul>