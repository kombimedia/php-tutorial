<?php
require_once __DIR__.'/../vendor/autoload.php';
use app\Client\GiphyClient;
use app\Service\SearchService;
use app\Model\Result;
$giphy = new GiphyClient();
$search = new SearchService($giphy);
$response = $search->search('cats');
//$expected = [$result1, $result2, $result3, $result4, $result5];
$pass = true;
foreach ($response as $result) {
    if (substr($result->url, -4) != '.gif') {
        echo "Expected {$result->url} to end in .gif\n";
        $pass = false;
    }
}
if ($pass) {
    echo "PASSED\n";
} else {
    echo "FAILED\n";
}
