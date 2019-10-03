<div class="site-section" id="products-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
        <div class="col-md-6 text-center">
            <h3 class="section-sub-title">On Slaes</h3>
            <h2 class="section-title mb-3">Sales</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.</p>
        </div>
        </div>
        <div class="row">
            @foreach ($promo as $item)
              <div class="col-lg-4 col-md-6 mb-5">
                <div class="product-item">
                <figure>
                    <img src="{{$item->foto}}" alt="Image" class="img-fluid">
                </figure>
                <div class="px-4">
                    <h3><a href="#">{{$item->producto}}</a></h3>
                    <p>{{$item->codproducto}}</p>
                    <div class="mb-3">
                    <span class="meta-icons mr-3"><a href="#" class="mr-2"><span class="icon-star text-warning"></span></a> 5.0</span>
                    <span class="meta-icons wishlist"><a href="#" class="mr-2"><span class="icon-heart"></span></a> 29</span>
                    </div>
                    <p class="mb-4">{{$item->detalle}}</p>
                    <div>
                    <a href="#" class="btn btn-black mr-1 rounded-0">Cart</a>
                    <a href="{{route('productos.show',$item->slug)}}" class="btn btn-black btn-outline-black ml-1 rounded-0">View</a>
                    </div>
                </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
    </div>
