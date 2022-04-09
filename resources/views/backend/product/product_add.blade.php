@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <div class="container-full">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Add Product </h4>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">

                            <form method="post" action="{{ route('product-store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <!-- start 1st row  -->
                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Product Name <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_name" class="form-control"
                                                            required="">
                                                        @error('product_name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div> <!-- end col md 4 -->

                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Product Description <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_description" class="form-control"
                                                            required="">
                                                        @error('product_description')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div> <!-- end col md 4 -->

                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Product Quantity <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_quantity" class="form-control"
                                                            required="">
                                                        @error('product_quantity')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div> <!-- end col md 4 -->

                                        </div> <!-- end 1st row  -->

                                        <div class="row">
                                            <!-- start 2nd row  -->
                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Product Price <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_price" class="form-control"
                                                            required="">
                                                        @error('product_price')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div> <!-- end col md 4 -->

                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Product Sale Price <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_sale_price" class="form-control"
                                                            required="">
                                                        @error('product_sale_price')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div> <!-- end col md 4 -->

                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Product Category <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_category" class="form-control"
                                                            required="">
                                                        @error('product_category')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div> <!-- end col md 4 -->

                                        </div> <!-- end 2nd row  -->

                                        <div class="row">
                                            <!-- start 3rd row  -->
                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Product Type <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="product_type" class="form-control"
                                                            required="">
                                                        @error('product_type')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div> <!-- end col md 4 -->

                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Product Image <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="file" name="product_image" class="form-control"
                                                            required="">
                                                        @error('product_image')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <img src="" id="product_image">
                                                    </div>
                                                </div>


                                            </div> <!-- end col md 4 -->

                                        </div> <!-- end 3rd row  -->

                                        <div class="text-xs-right">
                                            <input type="submit" class="btn btn-rounded btn-primary mb-5"
                                                value="Add Product">
                                        </div>
                            </form>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
@endsection
