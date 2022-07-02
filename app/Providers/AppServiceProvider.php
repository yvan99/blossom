<?php

namespace App\Providers;

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use ConsoleTVs\Charts\Registrar as Charts;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Charts $charts)
    {
        $getData = new StudentController;
        View::share($getData->populateData());

        $charts->register([
            \App\Charts\StudentAnswerPie::class,
            \App\Charts\SampleChart::class,
        ]);
    }
}
