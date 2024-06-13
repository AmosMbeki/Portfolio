<form method="POST" action="/">
    @csrf
    <div class="form-group">
      <div class="input-group input-group-lg">
        <div class="input-group-prepend">
          <span class="input-group-text bg-white text-black">
            <i class="fas fa-user"></i>
          </span>
        </div>
        <input type="text" name="name" value="{{old('name')}}" class="form-control bg-white text-dark" placeholder="Name">
      </div>
      @error('name')
          <p class="text-danger">{{$message}}</p>
      @enderror
    </div>

    <div class="form-group">
      <div class="input-group input-group-lg">
        <div class="input-group-prepend">
          <span class="input-group-text bg-white text-black">
            <i class="fas fa-envelope"></i>
          </span>
        </div>
        <input type="email" name="email" value="{{old('email')}}" class="form-control bg-white text-black" placeholder="Email">
      </div>
      @error('email')
      <p class="text-danger">{{$message}}</p>
      @enderror
    </div>

    <div class="form-group">
      <div class="input-group input-group-lg">
        <div class="input-group-prepend">
          <span class="input-group-text bg-white text-black">
            <i class="fas fa-pencil-alt"></i>
          </span>
        </div>
        <textarea class="form-control bg-white text-black" name="message" value="{{old('message')}} placeholder="Message"></textarea>
      </div>
      @error('message')
            <p class="text-danger">{{$message}}</p>
      @enderror
    </div>

    <input type="submit" value="Submit" class="btn btn-danger btn-block btn-lg">
  </form>