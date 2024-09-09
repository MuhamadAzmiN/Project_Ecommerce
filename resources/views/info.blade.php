<x-app-layout title="Info">
    <x-slot name="header">

    </x-slot>

    
   @foreach ($riwayat as $item)
       <h1>{{ $item->user->name }}</h1>
   @endforeach
</x-app-layout>