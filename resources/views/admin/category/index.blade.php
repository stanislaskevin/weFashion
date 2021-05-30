@extends('layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center m-4">
        <a class="btn btn-primary" href="{{ route('categories_create') }}">NOUVELLE CATEGORIE</a>
    </div>
    <div class=" mx-auto justify-content-center">
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Slug</th>
            <th scope="col">Edit</th>
            <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->title }}</td>
                <td>{{ $category->slug }}</td>
                <td><a class="btn btn-primary mx-2" href="{{ url('admin/categories/edit/'.$category->id) }}">Edit</a></td>
                <td><form method="POST" action="{{ url('admin/categorys/delete/'.$category->id) }}">
                        @csrf
                        @method('DELETE') 
                        <button type="submit" class="btn btn-danger mx-2">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection
