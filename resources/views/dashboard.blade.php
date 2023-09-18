@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <x-dashboard.status-bar />

        <div class="container mt-5 bg-secondary rounded">
            <div class="row">
                <div class="col-2">
                    <div class="p-3">hallo</div>
                    <div class="p-3">hallo</div>
                    <div class="p-3">hallo</div>
                    <div class="p-3">hallo</div>
                    <div class="p-3">hallo</div>
                    <div class="p-3">hallo</div>
                    <div class="p-3">hallo</div>
                    <div class="p-3">hallo</div>
                    <div class="p-3">hallo</div>
                </div>
                <div class="col-8 d-flex flex-column">
                    <div class="row">
                        <div class="col-4">Taskausgabe</div>
                    </div>
                    <div class="row">
                        <div class="col-2">Übersicht</div>
                        <div class="col-3">servus</div>
                    </div>
                </div>
            </div>
        </div>
{{--    TODO: new task button - richtig positionieren--}}
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Neue Aufgabe hinzufügen
    </button>


    <x-dashboard.newtask-modal/>

@endsection

@section('script')
    <script>

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }

        function startTime() {
            let today = new Date();
            let h = today.getHours();
            let m = today.getMinutes();
            let s = today.getSeconds();

            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
            t = setTimeout(function () {
                startTime()
            }, 750);
        }

        startTime();

    </script>
@endsection
