@extends('layout.userMaster')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h4 mb-0 font-weight-bold text-primary">Frequent Asked Question</h1>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @if(count($faqs) > 0)
                        @foreach($faqs as $faq)
                            <div class="row no-gutters">
                                <div class="col-md-12" style="margin-bottom: 1rem;">
                                    <b>Q: {{$faq->question}}</b><br>
                                    A: {{$faq->answer}}
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h1 class="h4 mb-0 font-weight-bold text-primary">No Records</h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection