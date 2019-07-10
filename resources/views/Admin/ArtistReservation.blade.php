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
                    <strong>Add Reservation</strong>
                </h5>

                <div class="card-body px-lg-5 pt-0">
                    <form class="text-center " method="post" name="edit" action="{{route('ArtistReservation.store',['id'=>$artist->id])}}">
                        @csrf
                        <div class="md-form mt-3">
                            <input type="text" name="FullName" class="form-control" placeholder="FullName" required value="{{$artist->FullName}}" readonly>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="md-form mt-3">
                                    <input type="text" name="Address" class="form-control" placeholder="Address" required value="{{$artist->Address}}" readonly>
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form mt-3">
                                    <input type="text" name="PhoneNo" class="form-control" placeholder="PhoneNo" required value="{{$artist->PhoneNo}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="md-form mt-3">
                            <input type="email" class="form-control" name="email" placeholder="E-mail" required value="{{$artist->email}}" readonly>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label>Day</label>
                                <select name="Days" class="form-control" required>
                                    <option value="Sunday">Sunday</option>
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label>Max Bookings</label>
                                <input type="number" class="form-control" name="Max">
                            </div>
                        </div>

                        <!-- Send button -->
                        <input class="btn btn-submit btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" value="Add Reservation">

                    </form>
                    <!-- Form -->

                </div>

            </div>
        </div>
    </div>

@endsection