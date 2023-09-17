@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<form method="post">
    @csrf
    <x-form.text-input name="username" placeholder="Username oder E-Mail eingeben..." label="Username oder E-Mail"/>
    <x-form.text-input name="password" placeholder="Passwort eingeben..." label="Passwort" type="password" />
    @if($errors->any())
        @foreach($errors->all() as $error)
            <span class="text-danger">{{$error}}</span>
        @endforeach
    @endif
    <x-form.submit-button>
        Abschicken!
    </x-form.submit-button>

</form>
@endsection
