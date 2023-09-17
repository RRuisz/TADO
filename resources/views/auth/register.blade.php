@extends('layouts.auth')

@section('title','Registrieren')

@section('content')

    <form method="post" class="">
        @csrf
        <x-form.text-input type="text" name="firstname" placeholder="Enter your firstame..." label="Vorname"/>

        <x-form.text-input type="text" name="lastname" placeholder="Enter your lastname" label="Familienname"/>

        <x-form.text-input type="email" name="email" placeholder="Enter your E-Mail" label="E-Mail" class=""/>

        <x-form.text-input type="password" name="password" placeholder="Enter your Password" label="Passwort">
        Dass Passwort muss mindestens 8 Zeichen lang sein und mind 1 Großbuchstaben enthalten!
        </x-form.text-input>

        <x-form.submit-button>
            Abschicken!
        </x-form.submit-button>
    </form>

@endsection
