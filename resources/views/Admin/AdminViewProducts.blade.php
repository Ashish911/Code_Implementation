@extends('layouts.adminsidebar')

@section('content')

    <h2 class="text-center py-2">Artists</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12 table-responsive">
                <div>
                    <a class="btn btn-success mb-2" href="{{route('Product.create')}}" >Add Products</a>
                </div>
                <table class="table table-bordered table-striped table-hover" >
                    <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Product Detail</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Product Image</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                    </thead>
                    <tbody>
                    @if(count($Product)>0)
                        @foreach($Product as $Products)
                            <tr>
                                <td>{{$Products->Product_Name}}</td>
                                <td>{{$Products->Product_Detail}}</td>
                                <td>{{$Products->Price}}</td>
                                <td>{{$Products->Quantity}}</td>
                                <?php $category = App\Category::findorfail($Products->Category_id) ?>
                                <td>{{$category->category_name}}</td>
                                <td><img src="{{asset($Products->Product_Image)}}" alt="{{$Products->Product_Name}}" height="100"></td>
                                <td>
                                    <a href="{{ route('Product.edit',['id'=>$Products->id])}}" class="btn btn-outline-info">Edit</a></td>
                                <td>
                                    <form action="{{ route('Product.destroy',['id'=>$Products->id]) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <p>There are no Products to show</p>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection