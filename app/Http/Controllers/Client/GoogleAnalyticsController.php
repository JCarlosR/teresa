<?php

namespace App\Http\Controllers\Client;

use DateTime;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Spatie\Analytics\Analytics;
use Spatie\Analytics\Period;
use App\Teresa\Analytics\AnalyticsHelper;

class GoogleAnalyticsController extends Controller
{
    protected $format = 'Y-m-d H:i:s';

    public function index(AnalyticsHelper $analyticsHelper, Request $request)
    {
        // Date range
        $startDateTime = DateTime::createFromFormat($this->format, $request->input('start'));
        $endDateTime = DateTime::createFromFormat($this->format, $request->input('end'));
        $period = Period::create($startDateTime, $endDateTime);

        $metrics = 'ga:pageviews';
        $optional = [
            'dimensions' => 'ga:date,ga:medium'
        ];

        $view_id = $request->input('view_id');
        $analytics = $analyticsHelper->getView($view_id);
        $response = $analytics->performQuery($period, $metrics, $optional);

        return $this->responseToChartVisitsData($response->rows);
    }

    public function responseToChartVisitsData($rows) {
        $data = [];
        $data['total'] = [];
        $data['referral'] = [];
        $data['organic'] = [];

        for ($i=0; $i<sizeof($rows); ++$i) {
            $row = [
                'date' => strtotime($rows[$i][0]) *1000, // from string to unix, to timestamps
                'type' => $rows[$i][1],
                'quantity' => $rows[$i][2]
            ];

            $rowData = [
                $row['date'], $row['quantity']
            ];

            if ($row['type'] == 'referral') {
                $data['referral'][] = $rowData;
            } else if ($row['type'] == 'organic') {
                $data['organic'][] = $rowData;
            }

            if ($i==0)
                $data['total'][] = $rowData;
            else {
                // if date is the same than the previus
                // sum the quantities
                // if not, add a new row
                $lastPosition = sizeof($data['total']) -1;
                // here we use the & to get a reference of the array :)
                $lastTotalRow = &$data['total'][$lastPosition];
                if ($row['date'] === $lastTotalRow[0]) {
                    $lastTotalRow[1] += $row['quantity'];
                } else {
                    $data['total'][] = $rowData;
                }
            }
        }

        return $data;
    }

    public function byChannelGrouping(AnalyticsHelper $analyticsHelper, Request $request)
    {
        // Date range
        $startDateTime = DateTime::createFromFormat($this->format, $request->input('start'));
        $endDateTime = DateTime::createFromFormat($this->format, $request->input('end'));
        $period = Period::create($startDateTime, $endDateTime);

        $metrics = 'ga:pageviews';
        $optional = [
            'dimensions' => 'ga:channelGrouping'
        ];

        $view_id = $request->input('view_id');
        $analytics = $analyticsHelper->getView($view_id);
        $response = $analytics->performQuery($period, $metrics, $optional);
        return $response->rows;
    }
}
