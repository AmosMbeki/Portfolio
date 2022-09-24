@props(['projects'])

<div id="projects" class="collapse">
    <x-card-top class="bg-warning">
      <h2>My Projects</h2>
      <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, ut!</p>
    </x-card-top>

    <x-card-bottom>   
      <h3>What Have I Built?</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nostrum repudiandae debitis, nam iste amet.</p>
        <div class="row no-gutters">
            <x-items-projects :projects="$projects" />
        </div>
    </x-card-bottom> 
    
  </div>