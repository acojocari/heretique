@extends('layouts.master')

@section('content')

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Confirmation</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Confirmation</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Order Details Area =================-->
    <section class="order_details section_gap">
        <div class="container">
            @if ($message=Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{$message}}
                </div>
            @endif
            <h3 class="title_confirmation">Thank you. Your order has been received.</h3>
            <div class="row order_d_inner">
                <div class="col-lg-4">
                    <div class="details_item">
                        <h4>Order Info</h4>
                        <ul class="list">
                            <li><a href="#"><span>Order number</span> : {{$order->id}}</a>
                            </li> {{-- TODO remplace it by a PO number --}}
                            <li><a href="#"><span>Date</span> : {{$order->created_at}}</a></li>
                            <li><a href="#"><span>Total</span> : {{round($order->paiement_total,2)}} EUR</a></li>
                            <li><a href="#"><span>Payment method</span> : Stripe</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="details_item">
                        <h4>Billing Address</h4>
                        <ul class="list">
                            <li><a href="#"><span>Address</span> : {{$order->paiement_address}}</a></li>
                            <li><a href="#"><span>City</span> : {{$order->paiement_city}}</a></li>
                            <li><a href="#"><span>Phone</span> : {{$order->paiement_number}}</a></li>
                            <li><a href="#"><span>Postcode </span> : {{$order->paiement_zip}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="details_item">
                        <h4>Shipping Address</h4>
                        <ul class="list">
                            <li><a href="#"><span>Address</span> : {{$order->paiement_address}}</a></li>
                            <li><a href="#"><span>City</span> : {{$order->paiement_city}}</a></li>
                            <li><a href="#"><span>Phone</span> : {{$order->paiement_number}}</a></li>
                            <li><a href="#"><span>Postcode </span> : {{$order->paiement_zip}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="order_details_table">
                <h2>Order Details</h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order->products as $product)
                            {{-- dd($product) --}}
                        <tr>
                            <td>
                                <p>{{$product->name}}</p>
                            </td>
                            <td>
                                <h5>x {{$product->pivot->quantity}}</h5>
                            </td>
                            <td>
                                <p>{{round($product->price * $product->pivot->quantity,2)}} €</p>
                            </td>
                        </tr>

                        @endforeach
                        <tr>
                            <td>
                                <h4>Total</h4>
                            </td>
                            <td>
                                <h5></h5>
                            </td>
                            <td>
                                <p>{{$order->paiement_total}} €</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Order Details Area =================-->

    @stop