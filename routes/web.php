<?php


Route::get('/', function () {
    $task = App\Task::all();
    $data  =array(
        "tasks"=>$task
    );
    return view('home',$data);
});


Route::post('add_new_item','Newitemcontroller@postnew');
Route::post('edit/update_item','Newitemcontroller@updatepost');
/*Route::post('edit/update_item', function () {
    echo "hit here";
});*/
Route::get('edit/{id}', function ($id) {
    $task = App\Task::find($id);
    $data = array(
        "task"=>$task
    );
    return view('newitem',$data);
});
Route::get('remove/{id}', function ($id) {
    $task = App\Task::find($id);
    $task->delete();
    return redirect('/');
});

Route::get('new', function () {
    return view('newitem');
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

