@extends('template.main')
@section('body')
@foreach ( $products as $product)
  <section class="page-section">
  <div class="container">
    <div class="product-item">
      <div class="product-item-title d-flex">
        <div class="bg-faded p-5 d-flex {{$loop->iteration==2?"mr-auto":"ml-auto"}} rounded">
          <h2 class="section-heading mb-0">
            <span class="section-heading-upper">{{$product->SpanOne}}</span>
            <span class="section-heading-lower">{!!$product->SpanTwo!!}</span>
          </h2>
        </div>
      </div>
      <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{asset($product->img)}}" alt="">
      <div class="product-item-description d-flex {{$loop->iteration==2?"ml-auto":"mr-auto"}}">
        <div class="bg-faded p-5 rounded">
          <p class="mb-0">{{$product->ParaOne}}</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach
@endsection