{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')

{{-- profile.blade.phpの@yield('title')に'My プロフィール'を埋め込む --}}
@section('title', 'My プロフィール')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div clas="row">
            <h2>My プロフィール</h2>
        </div>
    </div>
@endsection