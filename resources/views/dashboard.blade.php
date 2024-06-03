<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        </div>
    </div>

    <div class="container">
        <h1>Ingreso de Notas</h1>
        <!-- agregar notas -->
        <div class="mt-4">
            @include('notas.create')
        </div>
        <!-- lista de notas -->
        <div class="mt-4">
            @include('notas.index')
        </div>
    </div>
</x-app-layout>

