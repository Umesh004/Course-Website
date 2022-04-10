@extends('layouts.app')

@section('content')
        <div class="container">
                <section>
                       <div>
                           <b-jumbotron header="Online Learning Website" lead="Learn Computer Science Courses for free!!">
                                   <p>For more info Browse through courses</p>
                                   <b-button variant="primary" href="{{route('series.index')}}">Browse Course</b-button>
                           </b-jumbotron>
                       </div> 
                </section>

        </div>
        <section>
        <div>
  <b-card-group>
    @foreach($featuredSeries as $series)
    <b-card title="{{$series->title}}" img-src="fullstackimg.png" width="200" height="200" img-alt="Image" img-top>
      <b-card-text>
        {{$series->description}}
      </b-card-text>
      <template #footer>
        <small class="text-muted">Last updated 3 mins ago</small>
      </template>
    </b-card>
    @endforeach
  </b-card-group>
</div>
        </section>

        <pricing></pricing>

@endsection