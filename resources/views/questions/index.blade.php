@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">All Questions</div>

                <div class="card-body">
                    @foreach ($questions as $q)
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mt-0">{{$q->title}}</h3>
                                <small>Posted By: {{$q->user->name}}</small>
                                <br>
                                {{ str_limit($q->body, 250) }}
                            </div>
                        </div>
                        <hr>
                    @endforeach

                    <div class="pagination justify-content-center">
                        {{ $questions->links() }}
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection