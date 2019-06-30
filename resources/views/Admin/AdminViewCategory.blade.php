@extends('layouts.adminsidebar')

@section('content')

    <h2 class="text-center py-2">Artists</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12 table-responsive">
                <div>
                    <a class="btn btn-success mb-2" href="{{route('Category.create')}}" >Add Category</a>
                </div>
                <table class="table table-bordered table-striped table-hover" >
                    <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Category Name</th>
                        <th>Delete</th>

                    </tr>
                    </thead>
                    <tbody>
                    @if(count($Category)>0)
                        <?php $i=1; ?>
                        @foreach($Category as $Categories)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$Categories->category_name}}</td>
                                <td>
                                    <form action="{{ route('Category.destroy',['id'=>$Categories->id]) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        @endforeach
                    @else
                        <p>There are no Categories to show</p>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection