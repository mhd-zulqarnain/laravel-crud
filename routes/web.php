<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('customer', function () {
//    $customer   =App\Customer::find(1);
    $customer = App\Customer::where('name', '=', 'ali')->first();
    echo $customer->name;
});
Route::get('orders', function () {
    $orders = App\Order::all();
    foreach ($orders as $order) {
//        $customer= App\Customer::find($order->customer_id);
        echo "order of " . $order->customer->name . " " . $order->name . "<br>";

    }
});
Route::get('order_by_id/{id}', function ($id) {
    echo "the orders of " . $id . "<br>";
    //echo

});
Route::get('customer_order/{id}', 'CustomerController@customer');

Route::get('mypage', function () {

    $orders = App\Order::all();
    $data = array(
        "orders" => $orders
    );
    return view('myPage', $data);

});

