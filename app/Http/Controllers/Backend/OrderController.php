<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;

class OrderController extends Controller
{
    // Pending Orders
    public function PendingOrders()
    {
        $orders = Order::where('status', 'Pending')->orderBy('id', 'DESC')->get();
        return view('backend.orders.pending_orders', compact('orders'));

    } // end mehtod

    // Pending Order Details
    public function PendingOrdersDetails($order_id)
    {

        $order = Order::where('id', $order_id)->first();
        $orderItem = OrderItem::with('product')->where('order_id', $order_id)->orderBy('id', 'DESC')->get();
        return view('backend.orders.pending_orders_details', compact('order', 'orderItem'));

    } // end method

    public function PendingToAccepted($order_id)
    {

        Order::findOrFail($order_id)->update(['status' => 'Accepted']);

        $notification = array(
            'message' => 'Order Accepted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('accepted-orders')->with($notification);

    } // end method

    // Accepted Orders
    public function AcceptedOrders()
    {
        $orders = Order::where('status', 'Accepted')->orderBy('id', 'DESC')->get();
        return view('backend.orders.accepted_orders', compact('orders'));

    } // end mehtod

    public function AcceptedToOutForDelivery($order_id)
    {

        Order::findOrFail($order_id)->update(['status' => 'OutForDelivery']);

        $notification = array(
            'message' => 'Order OutForDelivery Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('outfordelivery-orders')->with($notification);

    } // end method

    // OutForDelivery Orders
    public function OutForDeliveryOrders()
    {
        $orders = Order::where('status', 'OutForDelivery')->orderBy('id', 'DESC')->get();
        return view('backend.orders.outfordelivery_orders', compact('orders'));

    } // end mehtod

    public function OutForDeliveryToDelivered($order_id)
    {

        Order::findOrFail($order_id)->update(['status' => 'Delivered']);

        $notification = array(
            'message' => 'Order Delivered Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('delivered-orders')->with($notification);

    } // end method

    // Delivered Orders
    public function DeliveredOrders()
    {
        $orders = Order::where('status', 'Delivered')->orderBy('id', 'DESC')->get();
        return view('backend.orders.delivered_orders', compact('orders'));

    } // end mehtod

}
