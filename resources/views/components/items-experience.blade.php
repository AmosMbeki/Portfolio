@props(['experiences'])

@unless (count($experiences) == 0)
    @foreach ($experiences as $experience)
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{$experience->name}}</h4>
                <p class="card-text">{{$experience->description}}</p>
                <p class="p-2 mb-3 bg-success text-white">
                Position: {{$experience->position}}
                </p>
                <p class="p-2 mb-3 bg-success text-white">
                Phone: {{$experience->contact}}
                </p>
            </div>
            <div class="card-footer">
                <h6 class="text-muted">Dates: {{$experience->from}} - {{$experience->to}}</h6>
            </div>
        </div>
    </div>
    @endforeach
@endunless