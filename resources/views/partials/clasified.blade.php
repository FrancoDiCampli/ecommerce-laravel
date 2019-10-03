

    <div class="site-section" id="blog-section">
        <div class="container">
            <div class="row mb-5">
            <div class="col-12 text-center">
                <h3 class="section-sub-title">Clasified</h3>
            <h2 class="section-title mb-3">Clasified Products: {{$productos[0]->categoria}}</h2>
            </div>
            </div>

            <div class="row">
                @foreach ($productos as $producto)

                     @foreach ($producto->productos as $item)
                     <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                            <div class="h-entry">
                            <img src="{{$item->foto}}" alt="Image" class="img-fluid">
                            <p>
                            <a href="{{route('productos.show',$item->slug)}}" class="btn btn-black btn-outline-black rounded-0 d-block mb-2 mb-lg-0 d-lg-inline-block">View Details</a>
                                    <a href="#" class="btn btn-black rounded-0 d-block d-lg-inline-block">Add To Cart</a>
                                </p>
                            <h2 class="font-size-regular"><a href="#" class="text-black">{{$item->producto}}</a></h2>

                            <p>{{$item->detalle}}</p>

                            </div>
                        </div>
                     @endforeach

                @endforeach


                    {{-- @foreach ($productos as $producto)

                    @foreach ($producto as $item)


                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                            <div class="h-entry">
                            <img src="{{$item->foto}}" alt="Image" class="img-fluid">
                            <p>
                            <a href="{{route('productos.show',$item->slug)}}" class="btn btn-black btn-outline-black rounded-0 d-block mb-2 mb-lg-0 d-lg-inline-block">View Details</a>
                                    <a href="#" class="btn btn-black rounded-0 d-block d-lg-inline-block">Add To Cart</a>
                                </p>
                            <h2 class="font-size-regular"><a href="#" class="text-black">{{$item->producto}}</a></h2>

                            <p>{{$item->detalle}}</p>

                            </div>
                        </div>

                    @endforeach
                    @endforeach --}}


            </div>
        </div>
    </div>

