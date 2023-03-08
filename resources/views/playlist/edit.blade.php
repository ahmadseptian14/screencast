<x-app-layout>
    <x-slot name="title">
       Edit Playlist {{$playlist->name}}
    </x-slot>
    <x-slot name="header">
       Edit Playlist {{$playlist->name}}
    </x-slot>
    <form action="{{ route('playlists.create') }}" method="post" enctype="multipart/form-data" novalidate>
        @include('playlist._form-control', [
            'submit' => 'Create'
        ])

    </form>
</x-app-layout>
