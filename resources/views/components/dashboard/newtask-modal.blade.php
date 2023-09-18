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
                            <select name="priority" id="priority" class="form-select">
                                <?php $i = 10 ?>
                                @while($i > 0)
                                    <option value="{{$i}}">{{$i}}</option>
                                        <?php $i-- ?>
                                @endwhile

                            </select>
                        </div>

                        <div class=" col-6">
                            <label for="teamselect">Team</label>
                            <select name="team_id" id="teamselect" class="form-select">
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
