@extends('front-end.master')
@section('body')


    <!--banner-->
    <div class="banner1">
        <div class="container">
            <h3><a href="index.html">Home</a> / <span>Checkout</span></h3>
        </div>
    </div>
    <!--banner-->
    <div class="content">
        <div class="single-wl3">
            <div class="container">
                <div class="row">
                    <div class="col-md-11 col-md-offset-1">
                        <h3 class="text-center text">My Shopping Cart</h3>
                        <hr>
                        <table class="table table-bordered">
                            <tr class="bg-primary">
                                <th>SL </th>
                                <th> name</th>
                                <th> image</th>
                                <th> price</th>
                                <th> qantity</th>
                                <th> Total Price</th>
                                <th> action</th>
                            </tr>

                                @php ( $i=1 )
                                @php ( $sum=0 )
                                @foreach($CartProducts as $CartProduct)
                                <tr>
                                <td>{{$i++}}</td>
                                <td>{{$CartProduct->name}}</td>
                                <td><img src="{{asset($CartProduct->attributes->image)}}" alt ="" height="50" width="50"/></td>>
                                <td>{{$CartProduct->price}}</td>
                                <td>

                                        {{Form ::open(['route' => 'update-cart','method'=>'post'])}}

                                        <input type="number" name="quantity" value="{{$CartProduct->quantity}} " min="1" />
                                        <input type="hidden" name="id" value="{{$CartProduct->id}} " min="1" />

                                        <input type="submit" name="btn" value="Update"/>

                                        {{Form :: close()}}
                                    </td>

                                <td>{{$total=$CartProduct->price*$CartProduct->quantity}}</td>
                                <td>
                                    <a href="{{route('delete-cart-item',['id'=>$CartProduct->id ])}}" class="btn btn-danger btn-xs" title="Delet">
                                       <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                                    <?php $sum = $sum +$total ;?>
                                    <hr/>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Total Price (TK.)</th>
                                            <td> {{ $sum }}</td>
                                        </tr>
                                        <tr>
                                            <th>Vat Total (TK.)</th>
                                            <td> {{ $vat=0 }}</td>
                                        </tr>
                                        <tr>
                                            <th>Grand Total (TK.)</th>
                                            <td> {{ $sum+$vat }}</td>
                                        </tr>
                                    </table>
                                @endforeach
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                     <div  class="col-md-11 col-md-offset-1">
                         <a href="{{('checkout')}}" class="btn btn-success pull-right">Checkout <a/>
                         <a href="" class="btn btn-success ">Continue Shopping <a/>
                     </div>
            </div>
        </div>
    </div>
    </div>
@endsection
