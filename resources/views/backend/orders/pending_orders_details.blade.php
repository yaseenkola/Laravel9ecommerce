@extends('admin.admin_master')
@section('admin')
    <!-- Content Wrapper. Contains page content -->

    <div class="container-full">
        <!-- Content Header (Page header) -->


        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Order Details</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Order Details</li>

                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>



        <!-- Main content -->
        <section class="content">
            <div class="row">


                <div class="col-md-6 col-12">
                    <div class="box box-bordered border-primary">
                        <div class="box-header with-border">
                            <h4 class="box-title"><strong>Shipping Details</strong> </h4>
                        </div>


                        <table class="table">
                            <tr>
                                <th> Shipping Name : </th>
                                <th> {{ $order->name }} </th>
                            </tr>

                            <tr>
                                <th> Shipping Phone : </th>
                                <th> {{ $order->phone }} </th>
                            </tr>

                            <tr>
                                <th> Shipping Email : </th>
                                <th> {{ $order->email }} </th>
                            </tr>

                            <tr>
                                <th> State : </th>
                                <th>{{ $order->city }} </th>
                            </tr>

                            <tr>
                                <th> Address : </th>
                                <th> {{ $order->address }} </th>
                            </tr>

                            <tr>
                                <th> Order Date : </th>
                                <th> {{ $order->order_date }} </th>
                            </tr>

                        </table>



                    </div>
                </div> <!--  // cod md -6 -->


                <div class="col-md-6 col-12">
                    <div class="box box-bordered border-primary">
                        <div class="box-header with-border">
                            <h4 class="box-title"><strong>Order Details</strong></h4>
                        </div>


                        <table class="table">
                            <tr>
                                <th> Name : </th>
                                <th> {{ $order->name }} </th>
                            </tr>

                            <tr>
                                <th> Phone : </th>
                                <th> {{ $order->phone }} </th>
                            </tr>

                            <tr>
                                <th> Payment Type : </th>
                                <th> {{ $order->payment_method }} </th>
                            </tr>

                            <tr>
                                <th> Order Total : </th>
                                <th>₹{{ $order->amount }} </th>
                            </tr>

                            <tr>
                                <th> Order : </th>
                                <th>
                                    <span class="badge badge-pill badge-warning"
                                        style="background: #418DB9;">{{ $order->status }} </span>
                                </th>
                            </tr>

                            <tr>
                                <th> </th>
                                <th>
                                    @if ($order->status == 'Pending')
                                        <a href="{{ route('pending-accepted', $order->id) }}"
                                            class="btn btn-block btn-success" id="accepted">Accept Order</a>
                                    @elseif($order->status == 'Accepted')
                                        <a href="{{ route('accepted-outfordelivery', $order->id) }}"
                                            class="btn btn-block btn-success" id="outfordelivery">Out For Delivery Order</a>
                                    @elseif($order->status == 'OutForDelivery')
                                        <a href="{{ route('outfordelivery-delivered', $order->id) }}"
                                            class="btn btn-block btn-success" id="delivered">Deliver Order</a>
                                    @endif

                                </th>
                            </tr>



                        </table>



                    </div>
                </div> <!--  // cod md -6 -->


                <div class="col-md-12 col-12">
                    <div class="box box-bordered border-primary">
                        <div class="box-header with-border">

                        </div>


                        <table class="table">
                            <tbody>

                                <tr>
                                    <td width="10%">
                                        <label for=""> Image</label>
                                    </td>

                                    <td width="10%">
                                        <label for=""> Product Name </label>
                                    </td>

                                    <td width="10%">
                                        <label for=""> Quantity </label>
                                    </td>

                                    <td width="10%">
                                        <label for=""> Price </label>
                                    </td>
                                </tr>


                                @foreach ($orderItem as $item)
                                    <tr>
                                        <td width="10%">
                                            <label for=""><img src="{{ asset($item->product_image) }}" height="50px;"
                                                    width="50px;"> </label>
                                        </td>

                                        <td width="10%">
                                            <label for=""> {{ $item->product_name }}</label>
                                        </td>

                                        <td width="10%">
                                            <label for=""> {{ $item->product_quantity }}</label>
                                        </td>

                                        <td width="10%">
                                            <label for=""> ₹{{ $item->product_price }} ( ₹
                                                {{ $item->product_price * $item->product_quantity }} )
                                            </label>
                                        </td>

                                    </tr>
                                @endforeach


                            </tbody>

                        </table>


                    </div>
                </div> <!--  // cod md -12 -->



            </div>
            <!-- /. end row -->
        </section>
        <!-- /.content -->

    </div>
@endsection
