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
                    <strong>Edit Artist</strong>
                </h5>

                <div class="card-body px-lg-5 pt-0">
                    <form class="text-center " method="post" name="edit" action="{{route('Artist.update',['id'=>$artist->id])}}" enctype="multipart/form-data">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="md-form mt-3">
                            <input type="text" name="FullName" class="form-control" placeholder="FullName" required value="{{$artist->FullName}}">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="md-form mt-3">
                                    <input type="text" name="Address" class="form-control" placeholder="Address" required value="{{$artist->Address}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form mt-3">
                                    <input type="text" name="PhoneNo" class="form-control" placeholder="PhoneNo" required value="{{$artist->PhoneNo}}">
                                </div>
                            </div>
                        </div>
                        <div class="md-form mt-3">
                            <input type="email" class="form-control" name="email" placeholder="E-mail" required value="{{$artist->email}}">
                        </div>
                        <div class="md-form mt-3">
                            <textarea id="materialContactFormMessage" class="form-control md-textarea" name="Artist_Description" placeholder="Description about Yourself" rows="7" required>{{$artist->Artist_Description}}</textarea>
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