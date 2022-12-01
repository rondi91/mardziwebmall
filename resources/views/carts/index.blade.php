@extends('layouts.main')

@section('content')
<div class="cart-main-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            @if ($message = Session::get('success'))
            <div class="p-4 mb-3 bg-green-400 rounded">
                <p class="text-green-800">{{ $message }}</p>
            </div>
        @endif
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="cart-heading">Cart</h1>
                <form action="#">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>remove</th>
                                    <th>images</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            @foreach ($cartItems as $item)
                            <tbody>
                                <tr>
                                    <td class="product-remove">
                                        <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                            <input type="hidden" value="{{ $item->id }}" name="id">
                                            <button><i class="pe-7s-close"></i></button>
                                        </form>
                                    </td>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#">{{  $item->name  }} </a></td>
                                    <td class="product-price-cart"><span class="amount">{{  $item->price  }}</span></td>
                                    <td class="product-quantity">
                                        <form action="{{ route('cart.update',$item->id) }}">
                                            <input value="{{ $item->quantity }}" type="number" name="quantity" id="quantity">
                                            <input type="submit" value="save" >
                                        </form>
                                    </td>
                                    <td class="product-subtotal">{{ Cart::session(auth()->id())->get($item->id)->getPricesum()
                                    }}</td>
                                </tr>
                                
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="coupon-all">
                                <div class="coupon">
                                    <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                    <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                </div>
                                <div class="coupon2">
                                    <input class="button" name="update_cart" value="Update cart" type="submit">
                                    <div>
                                        <form action="{{ route('cart.clear') }}" method="POST">
                                          @csrf
                                          <button class="px-6 py-2 text-sm  rounded shadow text-red-100 bg-red-500">Clear Carts</button>
                                        </form>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <ul>
                                    <li>Subtotal<span>Rp. {{ Cart::getTotal() }}</span></li>
                                    <li>Total<span>100.00</span></li>
                                    
                                </ul>
                                <a href="{{ route('cart.checkout') }}">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





@endsection