@extends('template.main')
@section('body')
<section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">{{$data->SpanOne}}</span>
                <span class="section-heading-lower">{{$data->SpanTwo}}</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                @foreach ($horaires as  $horaire )
                <li class="list-unstyled-item list-hours-item d-flex">
                  {{$horaire->Jour}}
                  <span class="ml-auto">{{$horaire->heures}}</span>
                </li>
                @endforeach
              </ul>
              <p class="address mb-5">
                {!!$data->ParaOne!!}
              </p>
              <p class="mb-0">
                {!!$data->ParaTwo!!}
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    @include('partial.about')
@endsection