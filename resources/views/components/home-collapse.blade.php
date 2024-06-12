@props(['skills'])

<div id="home" class="collapse show">

    <x-card-top class="bg-primary">
      <h2>Welcome</h2>
      <p class="lead">Experienced Software, Cloud, Container, and DevSecOps Engineer with expertise in designing, deploying, and
        managing scalable and fault-tolerant systems. Proficient in Kubernetes, Docker, IaaS and CI/CD tools. Strong
        background in cloud platforms (AWS, Azure, GCP) and DevOps practices. Alway aiming to improve team processes,
        enhancing productivity, and leading digital transformation initiatives.</p>
    </x-card-top>

    <x-card-bottom>
      <h3>Skills</h3>
      {{-- <p>Here are some of the technologies, tools and frameworks I've worked with.</p> --}}
      <hr>
      <x-items-skill :skills="$skills" />
    </x-card-bottom>
</div>   