@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <x-dashboard.status-bar />

        <div class="container mt-5 bg-secondary rounded height-80vh" >
            <div class="row">
                <div class="col-2 border-end border-black height-80vh">
                    <button class=" btn btn-secondary col-12 mt-2 navbtn" data-route="index">Übersicht</button>
                    <button class="btn btn-secondary col-12 mt-2 navbtn" data-route="tasks">Aufgaben Übersicht</button>
                    <button class="btn btn-secondary col-12 mt-2 navbtn" data-route="team">Team Übersicht</button>

                </div>
                <div class="col-10  height-80vh" id="dashboard">

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
            }, 1000);
        }

        startTime();



        const btns = document.querySelectorAll('.navbtn');
        const dashboard = document.getElementById('dashboard')

        btns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                btns.forEach(function (otherBtn) {
                    if (otherBtn !== btn) {
                        otherBtn.disabled = false;
                    }
                });
                const route = this.getAttribute('data-route')
                const url = '/dashboard/' + route ;

                fetch(url)
                    .then(response => response.text())
                    .then(data => {
                        dashboard.innerHTML = data
                        this.disabled = true;
                    })
            })
        })
        window.addEventListener('load', function() {
            const url = '/dashboard/index';


            fetch(url)
                .then(response => response.text())
                .then(data => {
                    dashboard.innerHTML = data;
                })

        });
    </script>
@endsection
