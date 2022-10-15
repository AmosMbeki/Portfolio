@props(['projects'])

@unless (count($projects) == 0)
    @foreach ($projects as $project)
    <div class="col-md-4 px-2">
          <div class="card">
            <img class="card-img-top" src="https://unsplash.it/1200/768.jpg?image=2" alt="Project Name">
            <div class="card-body">
              <h6 class="card-title">{{$project->name}}</h6>
              <ul class="list-unstyled">
                <li>{{$project->description}}</li> 
                
              </ul>
              <p><b>Skills: </b><i>{{$project->skills}}</i></p>
            </div>
          </div>
          {{-- <button class="btn-warning btn-block btn-lg" data-toggle="modal" data-target="#descriptionModal">Technologies Used</button> --}}
    </div>
    
    <!-- Modal -->

    {{-- <div class="modal fade" id="descriptionModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>{{$project->skills}}</p>
          </div>
        </div>
      </div>
    </div> --}}
    @endforeach
@endunless

