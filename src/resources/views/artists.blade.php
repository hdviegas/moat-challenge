<x-layout>
  <x-header title="Artists" />
  <div class="container mt-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        @foreach ($artists as $artist)
          <x-artist-card id="{{ $artist->id }}" name="{{ $artist->name }}" twitter="{{ $artist->twitter }}" image="{{ $artist->imageUrl }}" />
        @endforeach
    </div>
  </div>
</x-layout>