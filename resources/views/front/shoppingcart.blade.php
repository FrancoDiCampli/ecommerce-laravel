@extends('layouts.front')

@section('content')


<div class="container">

        <div class="card">
      <div class="card-header">
      Invoice
      <strong>01/01/01/2018</strong>
        <span class="float-right"> <strong>Status:</strong> Pending</span>

      </div>
      <div class="card-body">
      <div class="row mb-4">
      <div class="col-sm-6">
      <h6 class="mb-3">From:</h6>
      <div>
      <strong>Webz Poland</strong>
      </div>
      <div>Madalinskiego 8</div>
      <div>71-101 Szczecin, Poland</div>
      <div>Email: info@webz.com.pl</div>
      <div>Phone: +48 444 666 3333</div>
      </div>

      <div class="col-sm-6">
      <h6 class="mb-3">To:</h6>
      <div>
      <strong>Bob Mart</strong>
      </div>
      <div>Attn: Daniel Marek</div>
      <div>43-190 Mikolow, Poland</div>
      <div>Email: marek@daniel.com</div>
      <div>Phone: +48 123 456 789</div>
      </div>



      </div>
      <div>

      </div>

      <div class="table-responsive-sm">
      <table class="table table-striped">
      <thead>
      <tr>
      <th class="center">#</th>
      <th>Image</th>
      <th>Item</th>
      <th>Description</th>

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
                <td class="left">{{$producto['item']['detalle']}}</td>

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
      {{-- <form action="{{route('shop.store')}}" method="post">
                @csrf

                <button class="btn btn-success btn-lg">Checkout</button>
                <button class="btn btn-success btn-lg">Checkout</button>
            </form> --}}

        <a href="{{route('shop.pagar')}}" class="btn btn-danger">Pagar</a>
        <a href="{{route('productos.index')}}" class="btn btn-success">Seguir Comprando</a>

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
      </div>
      </div>

      @endsection
