@extends('admin.admin_master')
@section('admin')
    @php
    $pending = App\Models\Order::where('status', 'Pending')->get();
    $accepted = App\Models\Order::where('status', 'Accepted')->get();
    $outfordelivery = App\Models\Order::where('status', 'OutForDelivery')->get();
    $delivered = App\Models\Order::where('status', 'Delivered')->get();
    @endphp

    <div class="container-full">

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xl-3 col-6">
                    <div class="box overflow-hidden pull-up">
                        <div class="box-body">
                            <div class="icon bg-danger-light rounded w-60 h-60">
                                <i class="text-danger mr-0 font-size-24 mdi mdi-square"></i>
                            </div>
                            <div>
                                <p class="text-mute mt-20 mb-0 font-size-16">Pending Orders </p>
                                <h3 class="text-white mb-0 font-weight-500">{{ count($pending) }} <small
                                        class="text-danger"><i class="fa fa-caret-up"></i> Order </small></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-6">
                    <div class="box overflow-hidden pull-up">
                        <div class="box-body">
                            <div class="icon bg-primary-light rounded w-60 h-60">
                                <i class="text-primary mr-0 font-size-24 mdi mdi-arrow-down"></i>
                            </div>
                            <div>
                                <p class="text-mute mt-20 mb-0 font-size-16">Accepted Orders </p>
                                <h3 class="text-white mb-0 font-weight-500">{{ count($accepted) }} <small
                                        class="text-primary"><i class="fa fa-caret-up"></i> Order </small></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-6">
                    <div class="box overflow-hidden pull-up">
                        <div class="box-body">
                            <div class="icon bg-warning-light rounded w-60 h-60">
                                <i class="text-warning mr-0 font-size-24 mdi mdi-arrow-up"></i>
                            </div>
                            <div>
                                <p class="text-mute mt-20 mb-0 font-size-16">Out For Delivery Orders </p>
                                <h3 class="text-white mb-0 font-weight-500">{{ count($outfordelivery) }} <small
                                        class="text-warning"><i class="fa fa-caret-up"></i> Order </small></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-6">
                    <div class="box overflow-hidden pull-up">
                        <div class="box-body">
                            <div class="icon bg-success-light rounded w-60 h-60">
                                <i class="text-success mr-0 font-size-24 mdi mdi-checkbox-marked"></i>
                            </div>
                            <div>
                                <p class="text-mute mt-20 mb-0 font-size-16">Delivered Orders </p>
                                <h3 class="text-white mb-0 font-weight-500">{{ count($delivered) }} <small
                                        class="text-success"><i class="fa fa-caret-up"></i> Order </small></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
