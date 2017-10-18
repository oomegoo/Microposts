@extends('layouts.app')
@section('content')
    @if (count($favorites) > 0)
    <ul class="media-list">
        @foreach($favorites as $favorite)
            <li class="media">
                <div class="media-left">
                    <img class="media-object img-rounded" src="{{ Gravatar::src($favorite->email, 50) }}" alt="">
                </div>
                <div class="media-body">
                    {{ $favorite->name }}
                </div>
                <div>
                    <p>{!! link_to_route('users.show', 'View Profile',['id' => $favorite->id]) !!}</p>
                </div>
            </li>
        @endforeach
    </ul>
    {!! $favorites->render() !!}
    @else
    <p>お気に入りに登録されているものはありません</p>
    @endif
@endsection