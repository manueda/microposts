@if (Auth::user()->favotteru($micropost->id))
        {!! Form::open(['route' => ['user.unfavoru', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavoru', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.favoru', $micropost->id]]) !!}
            {!! Form::submit('Favoru', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif