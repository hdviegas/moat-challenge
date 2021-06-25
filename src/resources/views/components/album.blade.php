<li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">{!! $album->name !!}</div>
      {{ $album->year }}
    </div>
    <ul class="list-group list-group-horizontal-sm">
        <li class="list-group-item p-0 border-0">
            <a class="btn btn-sm btn-primary" href="{{ route('album.edit.view', [$album->id_artist, $album->id]) }}"><i class="bi bi-pencil-square"></i></a>
        </li>
        @if (Auth::user()->isAdmin())
            <li class="list-group-item p-0 border-0 ms-2">
            <form method="POST" class="m-0" action="{{ route('album.delete') }}">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" value="{{ $album->id }}"/>
                    <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                </form>
            </li>
        @endif
    </ul>
</li>