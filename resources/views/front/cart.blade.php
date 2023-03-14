<?php
/**
 * created by: tushar Khan
 * email : tushar.khan0122@gmail.com
 * date : 3/15/2023
 */
?>

@extends('front.layout.app')

@section('frontContent')

    @include('front.layout.banner', ['text' => 'Cart', 'pageName' => 'Cart', 'image' => 'frontAsset/images/backgrounds/bg-banner.jpg'])

    <!-- Section Shopping Cart Starts -->
    <section class="shop-cart">
        <!--Start section-->
        <div class="container">
            <div class="row">
                <!-- Purchased Products Starts -->
                <div class="col-xs-12 table-responsive">
                    <table class="table order text-center">
                        <colgroup>
                            <col class="col-xs-1">
                            <col class="col-xs-2 col-sm-5">
                            <col class="col-xs-2">
                            <col class="col-xs-1 col-sm-2">
                            <col class="col-xs-2 col-sm-2">
                        </colgroup>
                        <thead>
                        <tr>
                            <th></th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center"><a href="#" class="fa fa-trash icon-delete-product"></a></td>
                            <td class="text-left"><h6 class="product">0.179 BTC</h6></td>
                            <td class="text-left"><span class="price">$589.31</span></td>
                            <td class="text-left">
                                <div class="quantity">
                                    <input type="button" value="&#8249;" class="qtyminus" data-field="quantity"/>
                                    <input type="text" name="quantity" value="1" class="qty"/>
                                    <input type="button" value="&#8250;" class="qtyplus" data-field="quantity"/>
                                </div>
                            </td>
                            <td class="text-left"><span class="price">$589.31</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Purchased Products Ends -->
                <!-- Coupon Input Starts -->
                <div class="col-xs-12 col-sm-7 text-center">
                    <form>
                        <div>
                            <input type="text" placeholder="COUPON CODE" class="form-control">
                            <button type="submit" class="btn btn-primary btn-coupon">Apply Coupon</button>
                        </div>
                    </form>
                </div>
                <!-- Coupon Input Ends -->
                <!-- Update Cart Starts -->
                <div class="col-xs-12 col-sm-5 text-center"><a href="#"
                                                               class="btn btn-primary pull-right btn-update-cart">Update
                        cart</a></div>
                <!-- Update Cart Ends -->
                <!-- Cart Totals Starts -->
                <div class="col-xs-12 offset-5">
                    <h4 class="title-totals">Cart Totals</h4>
                    <table class="table cart-total">
                        <colgroup>
                            <col class="col-xs-6">
                            <col class="col-xs-6">
                        </colgroup>
                        <thead>
                        <tr class="section-border">
                            <th>price without tax</th>
                            <th class="text-right"><span class="price">$589,31</span></th>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <th class="total text-right"><span class="price">$607,31</span></th>
                        </tr>
                        </thead>
                    </table>
                    <div><a href="shopping-checkout.html" class="btn btn-primary pull-right btn-proceed">Proceed to
                            checkout</a></div>
                </div>
                <!-- Cart Totals Ends -->
            </div>
        </div>
    </section>
    <!-- Section Shopping Cart Ends -->

@endsection
