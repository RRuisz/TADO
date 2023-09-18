@extends('layouts.auth')

@section('title', 'Neues Team anlegen')

@section('content')
<form method="post">
    @csrf
    <x-form.text-input name="name" placeholder="Teamname..." label="Teamname" />
    <x-form.text-input name="invmail" placeholder="Partneremail" label="Jemanden zum Team einladen" />
    <x-form.submit-button>Abschicken</x-form.submit-button>
</form>
@endsection
