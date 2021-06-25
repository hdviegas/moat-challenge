<x-layout>
    <x-header title="Albums" />    
        <x-errors/>
        @if ($action == 'view')  
            <div class="container mt-5" >
                <div class="row">
                <div class="col-4">
                    <img src="{{ $artist->imageUrl }}">
                </div>
                <div class="col-8">
                    <h3 class="mb-4">{{ $artist->name }}</h3>    
                    <div class="mb-4">
                        @if($albums->count() == 0)    
                        <small class="text-muted">No album has been found</small>
                        @else
                        <ul class="list-group">    
                            @foreach ($albums as $album)
                            <x-album album="{!! $album !!}" />                
                                @endforeach
                            </ul>
                            @endif        
                    </div>
                    <a class="btn btn-sm btn-success" href="{{ route('album.create.view', ['artist'=> $artist->id]) }}">Create</a>
                    <a href="{{ route('index') }}" class="btn btn-sm btn-dark">Back</a>
                </div>
            </div>
        @elseif(in_array($action, ['edit', 'create']))
            <div class="container mt-5 w-50" >
                <x-album-form id="{{ $albumId ?? 0 }}" artist="{{ $artistId ?? 0 }}" />                        
            </div>
        @endif            

</x-layout>