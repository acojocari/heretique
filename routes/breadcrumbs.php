<?php
// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// Home > Shop
Breadcrumbs::for('shop.index', function ($trail) {
    $trail->parent('home');
    $trail->push('Shop', route('shop.index'));
});

// Home > Contact
Breadcrumbs::for('contact', function ($trail) {
    $trail->parent('home');
    $trail->push('Contact', route('contact'));
});

// Home > Orders
Breadcrumbs::for('orders', function ($trail) {
    $trail->parent('home');
    $trail->push('Orders', route('orders'));
});

// Home > Cart
Breadcrumbs::for('cart.index', function ($trail) {
    $trail->parent('home');
    $trail->push('Cart', route('cart.index'));
});

// Home > Check-out
Breadcrumbs::for('checkout.index', function ($trail) {
    $trail->parent('home');
    $trail->push('Checkout', route('checkout.index'));
});

// Home > Confirmation
Breadcrumbs::for('checkout.success', function ($trail) {
    $trail->parent('home');
    $trail->push('Confirmation', route('checkout.success'));
});

// Shop > Product
Breadcrumbs::for('shop.show', function ($trail, $product) {
    $trail->parent('shop.index');
    $trail->push($product->name, route('shop.show', $product->slug));
});

// Home > forgotPassword
Breadcrumbs::for('forgotPassword', function ($trail) {
    $trail->parent('home');
    $trail->push('Forgot Password', route('password.email'));
});

// Home > resetPassword
/*Breadcrumbs::for('resetPassword', function ($trail) {
    $trail->parent('home');
    $trail->push('Reset Password', route('password.reset'));
});*/

// Home > Login
Breadcrumbs::for('login', function ($trail) {
    $trail->parent('home');
    $trail->push('Login', route('login'));
});

// Home > Register
Breadcrumbs::for('register', function ($trail) {
    $trail->parent('home');
    $trail->push('Register', route('register'));
});