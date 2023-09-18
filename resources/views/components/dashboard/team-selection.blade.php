<div class="list-group">
    @foreach(Auth::user()->team as $team)
    <a href="/dashboard/team/{{$team->id }}" class="list-group-item list-group-item-action   text-center p-3" aria-current="true">
    {{$team->name}}
    </a>
    @endforeach
    <a href="{{route('dashboard')}}" class="list-group-item list-group-item-action  text-center p-3">Ohne Team fortfahren</a>

</div>
