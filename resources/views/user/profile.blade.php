@extends('layouts.app')

@section('head')

<link href="{{ asset('css/profile.css') }}" rel="stylesheet">
@yield('headabout')

@endsection

@section('content')
<div class="container profile">
    <div class="profile-header row">
        <div class="profile-image"> 
            @if($user->prof_pic == null)
            <img src="/img-uploads/maleDefault.png"/>
            @else
            <img src="{{$user->prof_pic}}"/>
            @endif
        </div>
        <div class="profile-name">
          <h1>{{ $user->fname }}</h1>
          <h2>{{ $user->username }}</h2>
        </div>
        @if(($user->id)==(Auth::user()->id))
            <span class="profile-edit-button">
                <a href="/profile/{{$user->username}}/settings" data-pg="{{ $user->username}}" class="pull-right btn btn-default">Edit</a>
            </span>
        @endif
        <div class="profile-mini-nav nav nav-tabs">
            <li id="about"><a href="/profile/{{$user->username}}/about">About</a></li>
            <li id="posts"><a href="/profile/{{$user->username}}/posts" class="">Posts</a></li>
            @if((($user->id)!=(Auth::user()->id)) && $followed=='false')
                <a id="follow-unfollow" href="javascript:void(0)" data-pg="{{ $user->username}}" class="pull-right btn btn-primary follow-user">Follow</a>
            @elseif((($user->id)!=(Auth::user()->id)) && $followed=='true')
                <a id="follow-unfollow" href="javascript:void(0)" data-pg="{{ $user->username}}" class="pull-right btn btn-primary btn-warning unfollow-user">Unfollow</a>
            @endif

            
        </div>
    </div>
    @yield('details')
</div>
@endsection