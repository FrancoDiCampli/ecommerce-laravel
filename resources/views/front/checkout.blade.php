@extends('layouts.checkout')

@section('content')

    <div class="row">
        <div class="col-md-5">
                <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="fname">Nombre</label>
                        <input type="text" id="fname" class="form-control rounded-0">
                        </div>
                        <div class="col-md-6">
                        <label class="text-black" for="lname">Apellido</label>
                        <input type="text" id="lname" class="form-control rounded-0">
                        </div>
                </div>
                <div class="row form-group">

                        <div class="col-md-12">
                        <label class="text-black" for="email">Email</label>
                        <input type="email" id="email" class="form-control rounded-0">
                        </div>
                    </div>
                    <div class="row form-group">
                            <div class="col-md-4 mb-3 mb-md-0">
                            <label class="text-black" for="fname">Ciudad</label>
                            <input type="text" id="fname" class="form-control rounded-0">
                            </div>
                            <div class="col-md-4">
                            <label class="text-black" for="lname">Provincia</label>
                            <input type="text" id="lname" class="form-control rounded-0">
                            </div>
                            <div class="col-md-4">
                                    <label class="text-black" for="lname">CP</label>
                                    <input type="text" id="lname" class="form-control rounded-0">
                                    </div>
                    </div>
                    <div class="row form-group">

                            <div class="col-md-12">
                            <label class="text-black" for="email">Direccion</label>
                            <input type="email" id="email" class="form-control rounded-0">
                            </div>
                        </div>
                <hr>
                <h3>Datos de la Tarjeta</h3>
                <div class="row form-group">
                        <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="fname">Tarjeta</label>
                        <input type="text" id="fname" class="form-control rounded-0">
                        </div>
                        <div class="col-md-6">
                        <label class="text-black" for="lname">Numero Tarjeta</label>
                        <input type="text" id="lname" class="form-control rounded-0">
                        </div>

                </div>

                    <div class="row form-group">
                            <div class="col-md-12">
                            <input type="submit" value="Pagar" class="btn btn-black rounded-0 py-3 px-4">
                            </div>
                        </div>

        </div>
        <div class="col-md-7 mt-20">
            <div class="table-responsive-sm">
                        <table class="table table-striped">
                        <thead>
                        <tr>
                        <th class="center">#</th>
                        <th>Image</th>
                        <th>Item</th>


                        <th class="right">Unit Cost</th>
                          <th class="center">Qty</th>
                        <th class="right">Total</th>
                        </tr>
                        </thead>
                        <tbody>

                              @foreach ($productos as $producto)
                                  <tr>
                                  <td class="center"> {{$producto['item']['id']}}</td>
                                  <td class="center"> <img src="{{$producto['item']['foto']}}" alt="" style="width:120px"> </td>
                                  <td class="left strong">{{$producto['item']['producto']}}</td>


                                  <td class="right">{{$producto['item']['precio']}}</td>
                                  <td class="center">{{$producto['qty']}}</td>
                                  <td class="right">{{$producto['price']}}</td>
                                  </tr>
                              @endforeach





                        </tbody>
                        </table>
                        </div>
                        <div class="row">
                        <div class="col-lg-4 col-sm-5 mt-5 ml-auto">

                          {{-- <a href="{{route('shop.pagar')}}" class="btn btn-danger">Pagar</a>
                          <a href="{{route('productos.index')}}" class="btn btn-success">Seguir Comprando</a> --}}

                        </div>

                        <div class="col-lg-4 col-sm-5 ml-auto">
                          <table class="table table-clear">
                              <tbody>

                                  <tr>
                                      <td class="left">
                                      <strong>Subtotal</strong>
                                      </td>
                                      <td class="right">{{$importes['total']}}</td>
                                  </tr>
                                  <tr>
                                      <td class="left">
                                      <strong>Discount {{$importes['descuentos']}}</strong>
                                      </td>
                                      <td class="right">$1,699,40</td>
                                  </tr>
                                  <tr>
                                      <td class="left">
                                      <strong>VAT (10%)</strong>
                                      </td>
                                      <td class="right">$679,76</td>
                                  </tr>
                                  <tr>
                                      <td class="left">
                                      <strong>Total</strong>
                                      </td>
                                      <td class="right">
                                      <strong>$7.477,36</strong>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>

            </div>
        </div>

    </div>

@endsection
