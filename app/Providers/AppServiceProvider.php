<?php

namespace App\Providers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        // Registering the custom pagination macro for collections
        Collection::macro('paginate', function (int $perPage = 10, $page = null, array $optional = []) {
            $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);

            // dd($page);

            $paginator = new LengthAwarePaginator(
                $this->forPage($page, $perPage),
                $this->count(),
                $perPage,
                $page,
                $optional
            );

            $paginator->setPath(request()->url());
            return $paginator;
        });
    }
}
