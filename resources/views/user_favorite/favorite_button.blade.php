@if (Auth::user()->id != $user->id)
    @if (Auth::user()->is_favorite($micropost->id))
        {!! Form::open(['route' => ['user.undofavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Undo',['class' => "btn btn-danger btn-xs"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favorite',['class' => "btn btn-primary btn-xs"]) !!}
        {!! Form::close() !!}
    @endif
@endif
