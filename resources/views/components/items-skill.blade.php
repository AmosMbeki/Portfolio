@props(['skills'])

@unless (count($skills) == 0)
    @foreach ($skills as $skill)
        <h6>{{$skill->name}}</h6>
        <div class="progress mb-3">
            <div class="progress-bar bg-primary" style="width:{{$skill->level}}%"></div>
        </div>
    @endforeach
@endunless
