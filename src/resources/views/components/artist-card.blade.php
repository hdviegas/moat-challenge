<div class="col">
  <div class="card" style="width: 250px;">
      <img src="{{ $image }}" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">{{ $name }}</h5>      
        <a href="{{ route('albums', [$id]) }}" class="btn btn-primary">See Albums</a>
        <a href="https://twitter.com/{{ $twitter }}" class="btn btn-primary" target="_blank">Twitter</a>
      </div>
  </div>
</div>