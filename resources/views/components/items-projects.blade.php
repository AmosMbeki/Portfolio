@props(['projects'])

@unless (count($projects) == 0)
    @foreach ($projects as $project)
        
    @endforeach
@endunless