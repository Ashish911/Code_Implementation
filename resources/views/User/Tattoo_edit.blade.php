@extends('layouts.usersidebar')

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
                    <strong>Edit Tattoo: <i>{{$Tattoo->Tattoo_Name}}</i></strong>
                </h5>

                <div class="card-body px-lg-5 pt-0">
                    <form class="text-center " method="post" name="edit" action="{{route('AddTattoos.update',['id'=>$Tattoo->id])}}" enctype="multipart/form-data">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="row">
                            <div class="col">
                                <div class="md-form mt-3">
                                    <input type="text" name="Tattoo_Name" class="form-control" placeholder="Tattoo Name" value="{{$Tattoo->Tattoo_Name}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="md-form mt-3">
                                    <input type="text" name="Tattoo_Price" class="form-control" placeholder="Tattoo Price" value="{{$Tattoo->Price}}" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form mt-3">
                                    <input type="text" name="Tattoo_Quantity" class="form-control" placeholder="Quantity" value="{{$Tattoo->Quantity}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="md-form mt-3">
                            <textarea id="materialContactFormMessage" class="form-control md-textarea" name="Tattoo_Detail" placeholder="Tattoo Description" rows="3">{{$Tattoo->Tattoo_Detail}}</textarea>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6 form-group">
                                <label for="image" class="text-left">Tattoo Image</label>
                                <input type="file" name="image" accept="image/*">
                            </div>
                        <div class="col-md-6">
                            <img src="{{asset($Tattoo->Tattoo_Image)}}" alt="{{$Tattoo->Tattoo_Name}}" width="50%">
                        </div>
                        </div>
                        <!-- Send button -->
                        <input class="btn btn-submit btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" value="Edit Profile">

                    </form>
                    <!-- Form -->

                </div>

            </div>
        </div>
    </div>
@endsection