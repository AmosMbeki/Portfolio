@props(['skills'])

@unless (count($skills) == 0)
    @foreach ($skills as $skill)
        <h4>{{$skill->name}}</h4>
        <div class="progress mb-3">
            <div class="progress-bar bg-primary" style="width:{{$skill->level}}%"></div>
        </div>
    @endforeach
@endunless