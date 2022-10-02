@props(['experiences'])

<div id="experience" class="collapse">
    <x-card-top class="bg-success">
        <h2>My Experience</h2>
        <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, ut!</p>
    </x-card-top>

    <x-card-bottom>
        <h3>Where Have I Worked?</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque similique saepe inventore rem vitae esse.</p>
        <div class="card-deck">
            <x-items-experience :experiences="$experiences" />
        </div>
    </x-card-bottom>
    {{-- <div class="mt-6 p-4">
        {{$experiences->links()}}
    </div> --}}
</div>

