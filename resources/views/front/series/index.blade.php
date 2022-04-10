@extends('layouts.app')

@section('content')
      
        <section class="mb-5">
          <div>
            <b-row>
              @foreach($series as $s)
                <b-col cols="4">
                  <b-card
                      title="{{$s->title}}"
                      class="text-center"
                      img-src="/images/fullstackimg">
                      <b-card-text>
                        @php $excerpt = \Str::words($s->description, 200) @endphp
                        {!! $excerpt !!}
                      </b-card-text>    
                      <template v-slot:footer>
                        <b-button href="{{route('series.show',$s->id)}}" varient="primary">Play</b-button>
                      </template>                
                    </b-card>
                </b-col>
                @endforeach
            </b-row>
          </div>
        </section>
      
        <section>
          <h3 class="mb-3 text-center">Choose Plan thats fits your need.</h3>
          <pricing></pricing>
        </section>
        <div id="page-content">
          <div class="container text-center">
            <div class="row justify-content-center">
              <div class="col-md-7">
                <h1 class="font-weight-light mt-4 text-white">Aticky Footer Using FlexBox</h1>
                <p class="lead text-white-50">USe just two Bootstrap and utility classes and three custom CSS rule.</p>
              </div>

            </div>

          </div>

        </div>
        </b-container>

@endsection