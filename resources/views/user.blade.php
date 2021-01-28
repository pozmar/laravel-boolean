@extends('layouts.main')
@section('content')
<div class="single_user">
    <h3>{{ $user->first_name . " " . $user->last_name}}
    </h3>
        <p>{{ $user->email }}</p>
        <p>{{ $user->gender }}</p>
        <img src="{{ $user->image }}" alt="single_user">
</div>
@endsection