@extends('layout.base')

@section('title', 'Sign up')

@section('content')
    <form action="{{ route('save') }}" method="POST">
        {{ csrf_field() }}

        <div class="field">
            <label for="name">Name:</label>
            <input type="text" name="name" placeholder="Type your first name">

            @if ($errors->has('name'))
                @foreach ($errors->get('name') as $erro)
                    <strong class="erro">{{ $erro }}</strong>
                @endforeach
            @endif
        </div>

        <div class="field">
            <label for="email">E-mail:</label>
            <input type="email" name="email" placeholder="Ex: robertsmith@gmail.com">

            @if ($errors->has('email'))
                @foreach ($errors->get('email') as $erro)
                    <strong class="erro">{{ $erro }}</strong>
                @endforeach
            @endif
        </div>

        <div class="field">
            <label for="password">password:</label>
            <input type="password" name="password" placeholder="Ex: Password123@56">

            @if ($errors->has('password'))
            @foreach ($errors->get('password') as $erro)
                <strong class="erro">{{ $erro }}</strong>
            @endforeach
        @endif
        </div>

        <div class="btn">
            <button type="submit">Send</button>
        </div>
    </form>

@endsection
