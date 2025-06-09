 
 <ul class="aa-product-catg ">
 @foreach ($products as $product)
                              <li>
                          <figure>
                            <a class="aa-product-img " href="#"><img class="img-fluid" style="100px" width="200px" src="{{ url('uploads/product/'.$product->image) }}" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                              <figcaption>
                              <h4 class="aa-product-title"><a href="#">{{ $product->name }}</a></h4>
                              <span class="aa-product-price">${{ $product->product_attr->first()->price }}</span><span class="aa-product-price"><del>${{ $product->product_attr->first()->mrp }}</del></span>
                            </figcaption>
                          </figure>                        
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                      
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                        </li>
                     @endforeach

                                        
                      </ul>


 