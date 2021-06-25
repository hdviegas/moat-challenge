<form class="row g-3" method="POST" action="{{ route('album.insert') }}">
    @method($album == null ? 'POST' : 'PUT')
    @csrf
    <input type="hidden" name="id" value="{{ $album->id ?? old('id') ?? '' }}" />
    <div class="col-12">
        <label for="" class="form-label">Artist</label>
        <select id="inputArtist" name="id_artist" class="form-select" required>
            <option>Choose...</option>
            @foreach ($artists as $item)                
                <option value="{{ $item->id }}" {{ $item->id == $artist ? 'selected' : '' }}> {{ $item->name }} </option>    
            @endforeach
        </select>
    </div>
    <div class="col-12">
        <label for="" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Album name" required aria-label="Album name" value="{{ $album->name ?? old('name') ?? '' }}">
    </div>
    <div class="col-2">
        <label for="" class="form-label">Year</label>        
        <input type="text" name="year" class="form-control" placeholder="Album year" required aria-label="Album year" value="{{ $album->year ?? old('year') ?? '' }}">         
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-sm btn-primary">Save</button>
        <a href="{{ url()->previous() }}" class="btn btn-sm btn-dark">Back</a>
    </div>
</form>