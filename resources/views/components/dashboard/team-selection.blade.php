<div class="list-group">
    @foreach(Auth::user()->teams as $team)
    <a href="{{route('dashboard.team', ['id' => $team->id])}}" class="list-group-item list-group-item-action   text-center p-3" aria-current="true">
    {{$team->name}}
    </a>
    @endforeach
    <a href="{{route('dashboard')}}" class="list-group-item list-group-item-action  text-center p-3">Ohne Team fortfahren</a>

</div>
