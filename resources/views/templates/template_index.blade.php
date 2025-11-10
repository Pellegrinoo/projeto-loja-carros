<x-app-layout>
    <x-slot name="header">
    <div class="flex items-center space-x-8">
        
        @yield('nav')
        
    </div>
</x-slot>

    @yield('carros')    

</x-app-layout>
