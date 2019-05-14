@extends('layout.pages')
@section('content')
    @if(count($reviews)>0)
    <section id="head" class="revtitlebg">
        <div class="container reviewtitle">
            <h2>REVIEW AND TESTIMONIAL</h2>
        </div>
    </section>
    <section id="review">
        <div class="container" id="headofcom">
            <h3>Review and testimonial from {{count($reviews)}} customers of Fusions Visual.</h3>
            <h1 class="say">What They Say?</h1>
        </div>
        @foreach($reviews as $review)
        <div class="container comsec">
            <div class="row who">
                <div class="col-md-12">
                    <p class="posted"><span>{{$review->user->name}}</span>&nbsp;commented on {{\Carbon\Carbon::parse($review->created_at)->format('d F Y')}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    @if($review->user->photo)
                    <img class="rounded-circle img-fluid" src="{{asset('images/'.$review->user->photo->path)}}" width="150">
                    @else
                    <img class="rounded-circle img-fluid" src="#" width="150">
                    @endif
                </div>
                <div class="col-md-8 contentcom">
                    <p>{{$review->comments}}</p>
                    <br>
                    <div class="row no-gutters">
                        <div class="col-md-4 pb-2">
                           <p style="margin: 0">Harga</p>
                            @for ($i = 0; $i < $review->price; $i++)
                                <i class="fas fa-star" style="color: purple;"></i>
                            @endfor
                        </div>
                        <div class="col-md-4 pb-2">
                            <p style="margin: 0">Support</p>
                            @for($i=0; $i<$review->support; $i++)
                                <i class="fas fa-star" style="color: purple;"></i>
                            @endfor
                        </div>
                        <div class="col-md-4 pb-2">
                            <p style="margin: 0">Features</p>
                            @for($i=0; $i<$review->fitur; $i++)
                                <i class="fas fa-star" style="color: purple;"></i>
                            @endfor
                        </div>
                    </div>
                    <p><strong>{{$review->user->name}}</strong>&nbsp;- {{$review->activity}}<br></p>
                    @if(\Illuminate\Support\Facades\Auth::id() == $review->user->id)
                    <div class="row no-gutters">
                        <div class="col-md-3">
                            <button type="button" class="btn btn-info" title="Edit" data-toggle="modal"
                                    data-target="#editreview-{{$review->id}}"><span>Edit Review</span>  <i class="fas fa-edit"></i></button>
                            @include('inc.modal_edit_review')
                        </div>
                        <div class="col-md-1">
                            {!! Form::open(['method'=>'DELETE', 'action'=> ['User\ReviewController@destroy', $review->id]]) !!}
                            {{ csrf_field() }}
                            {!! Form::button('<i class="fas fa-trash"></i>', ['type'=>'submit', 'class'=>'btn btn-danger btn-circle', 'title'=>'Delete Review']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
        <div class="container comsec2">
            <nav class="pagi">
                {{$reviews->links()}}
            </nav>
        </div>
    </section>
    @else
        <section id="head" class="revtitlebg">
            <div class="container reviewtitle">
                <h2>No Records</h2>
            </div>
        </section>
        <div style="height: 140px"></div>
    @endif
    @if(\Illuminate\Support\Facades\Auth::user())
    <section id="review-form">
        @include('inc.review-form')
    </section>
    @endif
@endsection