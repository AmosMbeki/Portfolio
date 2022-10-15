@props(['experiences'])

<div id="experience" class="collapse">
    <x-card-top class="bg-success">
        <h2>My Experience</h2>
        <p class="lead">Below are some of the the institutions attended, companies interned or worked for and the specific roles taken part in over my learning, research and career path.</p>
    </x-card-top>

    <x-card-bottom>
        <h3>Work & Studies</h3>
        <hr>
        {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque similique saepe inventore rem vitae esse.</p> --}}
        <div class="card-deck">
            <x-items-experience :experiences="$experiences" />
        </div>
    </x-card-bottom>
    {{-- <div class="mt-6 p-4">
        {{$experiences->links()}}
    </div> --}}
</div>

