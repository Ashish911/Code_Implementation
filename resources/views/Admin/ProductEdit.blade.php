@extends ('layouts.adminsidebar')
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
                    <strong>Edit Product</strong>
                </h5>

                <div class="card-body px-lg-5 pt-0">
                    <form class="text-center " method="post" name="edit" action="{{route('Product.update',['id'=>$Product->id])}}" enctype="multipart/form-data">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="md-form mt-3">
                            <input type="text" name="Product_Name" class="form-control" placeholder="Product Name" required value="{{$Product->Product_Name}}">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="md-form mt-3">
                                    <input type="text" name="Price" class="form-control" placeholder="Price" required value="{{$Product->Price}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form mt-3">
                                    <input type="text" name="Quantity" class="form-control" placeholder="Quantity" required value="{{$Product->Quantity}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group mt-3">
                                <select class="form-control" required="required" name="category">
                                    @foreach ($Category as $Categories)
                                        <option value="{{$Categories->id}}">{{$Categories->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="md-form mt-3">
                            <textarea id="materialContactFormMessage" class="form-control md-textarea" name="Product_Detail" placeholder="Description About Product " rows="5" required>{{$Product->Product_Detail}}</textarea>
                        </div>

                        <div class="Image mt-3">
                            <label class="label">Profile Image</label>
                            <input type="file" name="image" accept="image/*" required>
                        </div>

                        <!-- Send button -->
                        <input class="btn btn-submit btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" value="Add Artist">

                    </form>
                    <!-- Form -->

                </div>

            </div>
        </div>
    </div>

@endsection