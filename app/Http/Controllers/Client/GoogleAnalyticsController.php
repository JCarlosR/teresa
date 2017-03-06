<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Spatie\Analytics\Analytics;
use Spatie\Analytics\Period;

class GoogleAnalyticsController extends Controller
{
    public function index(Analytics $analytics)
    {
        $metrics = 'ga:pageviews';
        $optional = [
            'dimensions' => 'ga:date,ga:medium'
        ];

        $response = $analytics->performQuery(Period::days(30), $metrics, $optional);
        dd($response);

        // return $analytics->fetchVisitorsAndPageViews(Period::days(30));
    }
}
