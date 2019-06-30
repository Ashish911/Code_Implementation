@extends('layouts.adminsidebar')

@section('content')

    <style>
        .card{
            width: 500px;
        }

        .btn-submit{
            color: #DEC79B;;
            background-color: #18181E;
            transition: 0.5s color;
            transition: 0.5s background-color;
        }

        .btn-submit:hover{
            color: white;;
            background-color: lightskyblue;
        }
    </style>

    <div class="container-fluid">
        <div class="container">

            <div class="card offset-3 mt-5">

                <h5 class="card-header text-center py-4">
                    <strong>Add Product</strong>
                </h5>

                <div class="card-body px-lg-5 pt-0">
                    <form class="text-center " method="post" name="edit" action="{{route('Product.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="md-form mt-3">
                            <input type="text" name="Product_Name" class="form-control" placeholder="Product Name" required>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="md-form mt-3">
                                    <input type="text" name="Price" class="form-control" placeholder="Price" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form mt-3">
                                    <input type="text" name="Quantity" class="form-control" placeholder="Quantity" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group mt-3">
                                <select class="form-control" required="required" name="category">
                                    <option value=""> Select a Product Category</option>
                                    @foreach ($Category as $Categories)
                                        <option value="{{$Categories->id}}">{{$Categories->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="md-form mt-3">
                            <textarea id="materialContactFormMessage" class="form-control md-textarea" name="Product_Detail" placeholder="Description about the product" rows="7" required></textarea>
                        </div>

                        <div class="Image mt-3">
                            <label class="label">Product Image</label>
                            <input type="file" name="image" accept="image/*" required>
                        </div>

                        <!-- Send button -->
                        <input class="btn btn-submit btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" value="Add Product">

                    </form>
                    <!-- Form -->

                </div>

            </div>
        </div>
    </div>

@endsection