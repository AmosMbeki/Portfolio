@props(['projects'])

<div id="projects" class="collapse">
    <x-card-top class="bg-warning">
      <h2>My Projects</h2>
      <p class="lead">Projects are what I enjoy working on the most. Over the years, I've completed a few side projects and continue to work on others in my spare time. Highlights of my individual research projects are listed below.</p>
    </x-card-top>

    <x-card-bottom>   
      <h3>What Have I Built?</h3>
      {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nostrum repudiandae debitis, nam iste amet.</p> --}}
      <hr>
        <div class="row no-gutters">
            
            <x-items-projects :projects="$projects" />
          </div>
        
    </x-card-bottom> 

    
    
  </div>