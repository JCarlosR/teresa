<?php namespace App\Teresa\Analytics;

use Spatie\Analytics\Analytics;
use Spatie\Analytics\AnalyticsClientFactory;

class AnalyticsHelper
{
    public function getView($viewId)
    {
        $config = config('laravel-analytics');
        $client = AnalyticsClientFactory::createForConfig($config);
        return new Analytics($client, $viewId);
    }
}