@if (Auth::id() != $user->id)
    @if (Auth::user()->is_favorites($user->id))
        {{-- お気に入り解除ボタンのフォーム --}}
        {!! Form::open(['route' => ['micropost.unfavorite', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unavorite', ['class' => "btn btn-danger btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {{-- お気に入りボタンのフォーム --}}
        {!! Form::open(['route' => ['micropost.favorite', $user->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-sm"]) !!}
        {!! Form::close() !!}
    @endif
@endif