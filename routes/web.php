<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hello world';
});

Route::get('register', 'App\Http\Controllers\LoginController@register_form');
Route::post('register', 'App\Http\Controllers\LoginController@do_register');

Route::get('login', 'App\Http\Controllers\LoginController@login_form');
Route::post('login', 'App\Http\Controllers\LoginController@do_login');
Route::get('logout', 'App\Http\Controllers\LoginController@logout');
Route::get('isLogged', 'App\Http\Controllers\LoginController@isLogged');

Route::get('prodotti', 'App\Http\Controllers\ProductsController@prodotti');
Route::get('products', 'App\Http\Controllers\ProductsController@show_products');
Route::post('prodotti', 'App\Http\Controllers\ProductsController@add');
Route::post('delete', 'App\Http\Controllers\ProductsController@delete');
Route::post('prodotti/modifica', 'App\Http\Controllers\ProductsController@modify');
Route::get('prodotti/modifica/{productId}', 'App\Http\Controllers\ProductsController@modifyProduct');
Route::post('prodotti/modifica/{productId}', 'App\Http\Controllers\ProductsController@saveChange');


Route::get('menu', 'App\Http\Controllers\MenuController@menu');
Route::get('menu/getCart', 'App\Http\Controllers\MenuController@getCart');
Route::post('menu/updateCart', 'App\Http\Controllers\MenuController@updateCart');
Route::get('menu/show/pizze', 'App\Http\Controllers\MenuController@show_pizze');
Route::get('menu/show/antipasti', 'App\Http\Controllers\MenuController@show_antipasti');
Route::get('menu/show/dessert', 'App\Http\Controllers\MenuController@show_dessert');

Route::post('menu/carrello', 'App\Http\Controllers\MenuController@add');
Route::get('menu/carrello', 'App\Http\Controllers\CartController@show');
Route::get('menu/carrello/products', 'App\Http\Controllers\CartController@products');
Route::post('menu/carrello/save', 'App\Http\Controllers\CartController@save');

Route::get('ordini', 'App\Http\Controllers\OrderController@show');
Route::get('ordini/products', 'App\Http\Controllers\OrderController@products');
Route::post('ordini/deleteOrder', 'App\Http\Controllers\OrderController@deleteOrder');

Route::get('orders', 'App\Http\Controllers\OrderController@show_orders');
Route::get('orders/products', 'App\Http\Controllers\OrderController@allOrders');
Route::post('orders/changeState', 'App\Http\Controllers\OrderController@changeState');

Route::get('chat', 'App\Http\Controllers\ChatController@show');
Route::get('chat/getChat', 'App\Http\Controllers\ChatController@getChatsWithLastMessage');
Route::get('chat/{chatId}', 'App\Http\Controllers\ChatController@getMessages');
Route::post('chat/send', 'App\Http\Controllers\ChatController@sendAdminMessage');


Route::get('user_chat', 'App\Http\Controllers\ChatController@user_chat');
Route::post('user_chat/send', 'App\Http\Controllers\ChatController@send_message');
Route::get('user_chat/show', 'App\Http\Controllers\ChatController@getUserChatMessages');

Route::get('consegne', 'App\Http\Controllers\DeliveryController@show');

Route::get('consegne/ordini', 'App\Http\Controllers\DeliveryController@getDeliveryOrders');
Route::post('consegne/changeState', 'App\Http\Controllers\DeliveryController@changeState');
Route::get('consegne/openModal/{order_id}', 'App\Http\Controllers\DeliveryController@openModal');

Route::get('settings', 'App\Http\Controllers\SettingsController@show');
Route::post('settings/addSlide', 'App\Http\Controllers\SettingsController@addSlide');
Route::get('settings/getSlides', 'App\Http\Controllers\SettingsController@getSlides');
Route::post('settings/selectSlide', 'App\Http\Controllers\SettingsController@selectSlide');
Route::post('settings/unselectSlide', 'App\Http\Controllers\SettingsController@unselectSlide');
Route::get('getCategories', 'App\Http\Controllers\SettingsController@getCategories');
Route::get('settings/selectCategories', 'App\Http\Controllers\SettingsController@selectCategories');
Route::post('settings/deleteCategories', 'App\Http\Controllers\SettingsController@deleteCategories');
Route::post('settings/activateCategories', 'App\Http\Controllers\SettingsController@activateCategories');



