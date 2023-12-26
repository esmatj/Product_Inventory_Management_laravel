@extends('backend.layout.app')

@section('title')
    Dashboard
@endsection

@section('body')
<div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">All Product</h4>
                        <p class="text-center text-success">{{Session::get('message')}}</p>

                        <table id="datatable-buttons" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->price}}</td>
                                    <td><img src="{{asset('/storage/Product-image/'.$item->image)}}" alt="{{$item->image}}" height="70" width="90"/></td>
                                   
                                    <td class="d-flex justify-content-center">
                                        <a class="btn btn-outline-success" href="{{ route('product.edit', $item) }}" >
                                            Edit 
                                        </a>
                                        <form id="delete-form" action="{{ route('product.destroy', $item) }}" method="POST" >
                                            @csrf
                                            @method('DELETE')
                                               <button  class="btn btn-outline-danger mx-2" type="submit">Delete</button>
                                        </form> 
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
@endsection