@extends('layouts.profilefront')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="title p-2">
                                    <h1>{{ str_limit($headline->name, 70) }}</h1>
                                </div>
                            </div>
                            <p class="body mx-auto">
                                @if($headline->gender == 'male')男
                                @elseif($headline->gender == 'female')女
                                @endif
                            </p>
                            <p class="body mx-auto">{{ str_limit($headline->hobby, 650) }}</p>
                            <p class="body mx-auto">{{ str_limit($headline->introduction, 650) }}</p>
                        </div>
                    </div>
                </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="caption mx-auto">
                                    <div class="title p-2">
                                        <h1>{{ str_limit($post->name, 70) }}</h1>
                                    </div>
                                </div>
                                <p class="body mx-auto">
                                    @if($post->gender == 'male')男
                                    @elseif($post->gender == 'female')女
                                    @endif
                                </p>
                                <p class="body mx-auto">{{ str_limit($post->hobby, 650) }}</p>
                                <p class="body mx-auto">{{ str_limit($post->introduction, 650) }}</p>
                            </div>
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
@endsection
