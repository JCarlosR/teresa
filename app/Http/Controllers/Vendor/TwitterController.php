<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use TwitterAPIExchange;

class TwitterController extends Controller
{
    public function counter()
    {
        header('Access-Control-Allow-Origin: *');
        header('Content-type: application/json');
        require_once('TwitterAPIExchange.php'); // from https://github.com/J7mbo/twitter-api-php

        /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
        $settings = [
            'oauth_access_token' => "767820098908348416-HfMPXDIons02oU3H5acdfE2SqOs3wKu",
            'oauth_access_token_secret' => "wdZVdI80o07cteu0ljMn1ok8hFkJl2uWVENPl2kWIe58B",
            'consumer_key' => "vDuNH6CEdK1eO1oLexgZz5VlS",
            'consumer_secret' => "xQ3b6AXap57TPE5tXue0xEli7D1f8KaYb6eHG1sMoBuqitv5Yo"
        ];
        $twitter_username = $_GET['user'];
        $ta_url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
        $getfield = '?screen_name='.$twitter_username;
        $requestMethod = 'GET';
        $twitter = new TwitterAPIExchange($settings);
        $follow_count = $twitter->setGetfield($getfield)
            ->buildOauth($ta_url, $requestMethod)
            ->performRequest();
        $data = json_decode($follow_count, true);
        $followers_count = $data[0]['user']['followers_count'];
        $json_array = ['followers' => $followers_count];
        return $json_array;
    }
}
