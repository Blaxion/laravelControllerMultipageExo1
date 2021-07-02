@extends ('template.main')
@section ('body')
<section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{asset($homeImage)}}" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">{{$homeSection1->SpanOne}}</span>
            <span class="section-heading-lower">{{$homeSection1->SpanTwo}}</span>
          </h2>
          <p class="mb-3">{{$homeSection1->ParaOne}}
          </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="#">{{$homeSection1->AnchorOne}}</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">{{$homeSection2->SpanOne}}</span>
              <span class="section-heading-lower">{{$homeSection2->SpanTwo}}</span>
            </h2>
            <p class="mb-0">{{$homeSection2->ParaOne}}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection