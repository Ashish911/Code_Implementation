@extends('layouts.adminsidebar')

@section('content')

    <h2 class="text-center py-2">Users</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Tattoo Name</th>
                        <th>Tattoo Description</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Created By</th>

                    </tr>
                    </thead>
                    <tbody>
                    @if(count($Tattoo)>0)
                        @foreach($Tattoo as $Tattoos)
                                <tr>
                                    <td>{{$Tattoos->Tattoo_Name}}</td>
                                    <td>{{$Tattoos->Tattoo_Detail}}</td>
                                    <td>{{$Tattoos->Price}}</td>
                                    <td>
                                        <img src="{{asset($Tattoos->Tattoo_Image)}}" alt="{{$Tattoos->Tattoo_Name}}" height="100">
                                    </td>
                                    <?php $user = App\User::findorfail($Tattoos->User_Id) ?>
                                    <td>{{$user->FullName}}</td>
                                </tr>
                        @endforeach
                    @else
                        <p>There are No Tattoos to show</p>
    @endif
                    </tbody>
                    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
                    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
                    <script>
                        $(".table").DataTable();
                    </script>
                </table>
            </div>
        </div>
    </div>
@endsection