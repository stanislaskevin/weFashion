@extends('layouts.appShop')

@section('content')
<div class="container">
<div class="row justify-content-between p-4">
    <h2></h2>
    <p> </p>
</div>
<div class="row mb-2">
@foreach ($products as $product)
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success"></strong>
          <h3 class="mb-0">{{ $product->title }}</h3>
          <div class="mb-1 text-muted"></div>
          <div class="mb-1 text-muted">{{$product->price}} €</div>
          <p class="card-text mb-auto"></p>
          <a href="{{ route('weFashion.show', $product->reference)}}" class="stretched-link btn btn-success">Voir l'article</a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <img src="{{ $product->image }}" alt=""  style="object-fit:contain; width:100%; height:100%;" />
        </div>
      </div>
    </div>
@endforeach
</div>
{{ $products->appends(request()->input())->links()}}
</div>
@endsection
