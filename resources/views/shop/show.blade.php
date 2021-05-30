@extends('layouts.appShop')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-sm-4 col-lg-6 mb-4">
          <div class="card">
              <img src="{{ $products->image }}" />
          </div>
          <div class="py-4 px-2">
            <p>{{ $products->description }}</p>
          </div>
      </div>
      <div class="col-sm-4 col-lg-4 mb-4">
        <div class="column px-2">
            <h1>{{ $products->title }}</h1>
            <span><i>ref :{{ $products->reference }}</i></span>
            <div>
              <span>{{$products->categories->find($products)->title}}</span>
            </div>
            <h2 style="font-weight:600; padding:0.3em 0;">{{ $products->price }}€</h2>
            <p style="color:green; text-transform:uppercase;">{{$products->solde}}</p>
        </div>
        <div class="py-2 px-2">
            <select>
              <option>{{ $products->size }}€</option>
            </select>
        </div>
        <div class=" px-2">
            <button class="btn btn-success">Acheter</button>
        </div>
      </div>
  </div>
</div>
@endsection
