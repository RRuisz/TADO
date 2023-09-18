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
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Neue Aufgabe hinzufügen
    </button>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">neuen Task anlegen</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('task.store')}}">
                        @csrf
                        <x-form.text-input name="title" placeholder="Task Titel angeben..." label="Titel"/>
                        <x-form.text-input name="description" placeholder="Task Beschreibung..." label="Beschreibung"/>
                        <div class="row mt-3">
                            <div class=" col-6">
                                <label for="priority">Priorität</label>
                                <select name="priority" class="form-select">
                                    <?php $i = 10 ?>
                                    @while($i > 0)
                                    <option value="{{$i}}">{{$i}}</option>
                                        <?php $i-- ?>
                                    @endwhile

                                </select>
                            </div>

                            <div class=" col-6">
                                <label for="priority">Team</label>
                                <select name="team_id" class="form-select">
                                    @foreach(Auth::user()->team as $team)
                                        <option value="{{$team->id}}" class="">{{$team->name}}</option>
                                    @endforeach
                                    <option value="">Kein Team auswählen</option>
                                </select>
                            </div>
                        </div>
                        <x-form.submit-button>Speichern</x-form.submit-button>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
