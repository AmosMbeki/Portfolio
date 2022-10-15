@props(['skills'])

<div id="home" class="collapse show">

    <x-card-top class="bg-primary">
      <h2>Welcome</h2>
      <p class="lead">Hey there! I recently earned a degree in computer science from JKUAT and have a keen interest in software engineering, particularly system design and DevOps. I've been studying computing for at least five years, I have also taken part in apprenticeship programs, and have conducted research in software engineering and related subjects. I have acquired the technical abilities necessary to address the majority of computing challenges throughout the course of these years through learning, conducting research, and training. I have also learned how to use several technologies and tools, as show below:</p>
    </x-card-top>

    <x-card-bottom>
      <h3>Skills</h3>
      {{-- <p>Here are some of the technologies, tools and frameworks I've worked with.</p> --}}
      <hr>
      <x-items-skill :skills="$skills" />
    </x-card-bottom>
</div>   