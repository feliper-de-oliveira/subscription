<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->configureModel();

        $this->configureScheme();

        $this->configureTests();

        $this->configureVite();

        $this->configureDB();
    }

    private function configureModel(): void
    {
        Model::automaticallyEagerLoadRelationships();

        Model::unguard();

        Model::shouldBeStrict(! $this->app->isProduction());

    }

    private function configureScheme(): void
    {
        URL::forceHttps($this->app->isProduction());
    }

    private function configureTests(): void
    {
        Http::preventStrayRequests(! $this->app->isProduction());
    }

    private function configureVite(): void
    {
        Vite::useAggressivePrefetching();
    }

    private function configureDB(): void
    {
        DB::prohibitDestructiveCommands(app()->isProduction());
    }
}
