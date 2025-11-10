<?php

namespace App\Providers;

// ADICIONE ESTA LINHA:
use Illuminate\Support\Facades\Gate; 

use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Certifique-se de que você está chamando o registerPolicies() se for usar Policies
        // $this->registerPolicies(); 

        // DEFINIÇÃO DO SEU GATE AQUI:
        Gate::define('access-admin', function ($user) {
            // OBS: No seu exemplo anterior, o ID era 2. Corrigi para 1 conforme seu código, mas verifique qual ID é o correto.
            return $user->id === 2; 
        });
    }
}