@props(['experiences'])

<div id="experience" class="collapse">
    <x-card-top class="bg-success">
        <h2>My Experience</h2>
        <p class="lead">I current work at Jubilee Inusurance for the Insurtech wing of the the company. It is the largest Inusurance Company in the economy of East Africa Community with a market share of 20 percent.</p>
    </x-card-top>

    <x-card-bottom>
        <h3>Professional Work Experience</h3>
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

