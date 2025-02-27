@extends('layouts_user')

@section('content')
    <style>
        .red-text {
            color: red;
            font-size: 5em;
        }
    </style>

    <div class="container col-md-8 mt-3 mb-3">
        <div class="row">
            <div class="col">
                <img src="{{ asset($product->image) }}"  width="350">
             </div>
            <div class="col">
                <table class="table table-bordered">
                    <tr>
                        <th class="text-center red-text" colspan="2">{{ $product->name }}</th>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>${{ $product->price }}</td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td>{{ $product->category->name }}</td>
                    </tr>
                    <tr>
                        <th>Tag</th>
                        <td>
                            @foreach ($product->tags as $tag)
                                <span class="badge bg-primary">{{ $tag->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>Describe</th>
                        <td>{{ $product->description }}</td>
                    </tr>
                    <tr class="text-center">
                        <th colspan="2">
                            <form action="/order" method="post">
                                <input type="hidden" name="title" value="{{ $product->name }}">
                                <input type="hidden" name="price" value="{{ $product->price }}">
                                <input type="number" name="description" min="1" max="{{ $product->description }}">
                                <input type="submit" class="btn btn-primary" value="ORDER"></input>
                            </form>
                        </th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection