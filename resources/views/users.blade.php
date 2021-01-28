@extends('layouts.main')
@section('content')
<div class="users">
    @foreach($users as $user)
    <div class="box">
        <img src="{{ $user->image }}" alt=""/>
        <h3>{{ $user->first_name . " " . $user->last_name}}</h3>
        <p>{{ $user->email }}</p>
        <p>{{ $user->gender}}</p>
        </div>
        @endforeach

    
</div>
@endsection