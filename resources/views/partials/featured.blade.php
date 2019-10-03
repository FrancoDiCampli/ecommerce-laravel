
            <div class="site-section bg-light">
                <div class="container">
                    <div class="row mb-5 justify-content-center">
                    <div class="col-md-6 text-center">
                        <h3 class="section-sub-title">Details Products</h3>
                        <h2 class="section-title mb-3">Featured Product</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.</p>
                    </div>
                    </div>
                    <div class="bg-white py-4 mb-4">
                    <div class="row mx-4 my-4 product-item-2 align-items-start">
                        <div class="col-md-3 mb-5 mb-md-0">
                            <h5>Categorias</h5>
                            <ul class="list-group">
                                @foreach ($categorias as $categoria)
                                      <li class="list-group-item d-flex justify-content-between align-items-center">
                                      <a href="{{route('producto.categoria',$categoria->categoria)}}">  {{$categoria->categoria}}</a>
                                      <span class="badge badge-primary badge-pill"> {{$categoria->productos->count()}}</span>
                                    </li>
                                @endforeach

                                  </ul>
                        </div>

                        <div class="col-md-4 mb-5 mb-md-0">
                        <img src="{{$producto->foto}}" alt="Image" class="img-fluid">
                        </div>

                        <div class="col-md-4 ml-auto product-title-wrap">
                            <span class="number">01.</span>
                            <h3 class="text-black mb-4 font-weight-bold">{{$producto->producto}}</h3>
                            <p class="mb-4">{{$producto->detalle}}</p>
                            <p class="mb-4">{{$producto->descripcion}}</p>

                            <div class="mb-4">
                                <h3 class="text-black font-weight-bold h5">Price:</h3>
                                <div class="price"><del class="mr-2">{{$producto->precio}}</del> {{$producto->descontado()}}</div>
                            </div>
                            <p>
                                <a href="#" class="btn btn-black rounded-0 d-block d-lg-inline-block">Add To Cart</a>
                            </p>
                        </div>
                    </div>
                    </div>



                </div>
                </div>
