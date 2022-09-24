@props(['skills'])

<div id="home" class="collapse show">

    <x-card-top class="bg-primary">
      <h2>Welcome To My Page</h2>
      <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, ut!</p>
    </x-card-top>

    <x-card-bottom>
      <h3>My Skills</h3>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus ea excepturi officia quisquam atque eos.</p>
      <hr>
      <x-items-skill :skills="$skills" />
    </x-card-bottom>
</div>   