<x-app-layout>
    <x-slot name="header">
        @yield('titulo')
    </x-slot>

    @yield('crud');
   
</x-app-layout>