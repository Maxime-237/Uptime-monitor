<?php

use App\Jobs\CheckWebsiteJob;
use App\Models\Website;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Schedule::call(function () {
    Website::each(fn(Website $website) => CheckWebsiteJob::dispatch($website));
})->everyfiveMinute();
