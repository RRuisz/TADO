@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<x-dashboard.status-bar />

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
