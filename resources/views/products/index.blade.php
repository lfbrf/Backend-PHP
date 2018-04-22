@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="text-align: center;">Products</h2>
            </div>

        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    

             

    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Price</th>
            <th>Description</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->title }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->description }}</td>
            <td>

                       <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="/images/{{ $product->image }}">
                        <img class="img-responsive" alt="" src="/images/{{ $product->image }}" style="max-width: 250px;" />
                 
                    </a>
                
                </div> <!-- col-6 / end -->

            </td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

 
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>


                    @csrf
                    @method('DELETE')

   
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>


    {!! $products->links() !!}


@endsection