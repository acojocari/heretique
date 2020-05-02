@extends('layouts.master')

@section('content')

    <!-- Start Banner Area -->
    {{ Breadcrumbs::render('cart.index') }}
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            @if ($message=Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{$message}}
                </div>
                @endif
            <div class="cart_inner">
                @if(count(Cart::content())>0)
                    <h2>{{count(Cart::content()).' item(s) in shopping cart'}}</h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(Cart::content() as $product)
                            {{--  dd(Cart::content())  --}}
                     <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="{{Voyager::image($product->buyable->image)}}" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>{{$product->buyable->name}}</h4>
                                        <p>{{$product->buyable->details}}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5>{{$product->price}} €</h5>
                            </td>
                            <td>
                                <div class="product_count">
                                    <input disabled type="text" name="qty" id="sst" maxlength="12" value="x {{$product->quantity}}" title="Quantity:"
                                           class="input-text qty">
                                </div>
                            </td>
                            <td>
                                <form action="{{route('cart.destroy',$product->id)}}" method="POST">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button type="submit" class ="btn btn-link">Remove</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                        <tr>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                                <h5>Subtotal</h5>
                                <p>Taxe</p>
                                <h4>Total</h4>
                            </td>
                            <td>
                                <h5>{{Cart::subtotal()}}</h5>
                                <p>{{Cart::tax()}}</p>
                                <h4>{{Cart::subtotal()+Cart::tax()}}</h4>
                            </td>
                        </tr>
                        <tr class="out_button_area">
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                                <div class="checkout_btn_inner d-flex align-items-center">
                                    <a class="gray_btn" href="{{route('shop.index')}}">Continue Shopping</a>
                                    <a class="primary-btn" href="{{route('checkout.index')}}">Proceed to checkout</a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                    @else
                    <h3 class="my-3 text-center">No item in shopping cart</h3>
                    <div class="d-flex justify-content-around">
                        <a class="gray_btn" href="{{route('shop.index')}}">Continue Shopping</a>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->

@stop