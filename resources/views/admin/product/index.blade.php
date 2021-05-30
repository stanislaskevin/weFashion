@extends('layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center m-4">
        <a class="btn btn-primary" href="{{ route('admin_products_create') }}">NOUVEAU PRODUIT</a>
    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Catégorie</th>
            <th scope="col">Prix</th>
            <th scope="col">Etat</th>
            <th scope="col">Edit</th>
            <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->title }}</td>
                <td>{{$product->categories}}</td>
                <td>{{ $product->price }}€</td>
                <td>{{ $product->public }}</td>
                <td><a class="btn btn-primary mx-2" href="{{ url('admin/products/edit/'.$product->id) }}">Edit</a></td>
                <td><form method="POST" action="{{ url('admin/products/delete/'.$product->id) }}">
                        @csrf
                        @method('DELETE') 
                        <button type="submit" class="btn btn-danger mx-2">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->appends(request()->input())->links()}}
</div>
@endsection
