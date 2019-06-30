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
                    <strong>Add Category</strong>
                </h5>

                <div class="card-body px-lg-5 pt-0">
                    <form class="text-center " method="post" name="edit" action="{{route('Category.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="md-form mt-3">
                            <input type="text" name="Category" class="form-control" placeholder="Category" required>
                        </div>

                        <!-- Send button -->
                        <input class="btn btn-submit btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" value="Add Category">

                    </form>
                    <!-- Form -->

                </div>

            </div>
        </div>
    </div>

@endsection