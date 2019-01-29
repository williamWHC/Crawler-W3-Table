<?php

require_once "vendor/autoload.php";

use CrawlerXpath\src\PageObject\PageObject;
use GuzzleHttp\Client;

$poMapfe = new PageObject(new Client());

$po = new PageObject(new Client([
    'cookies' => true]));

$iterator = $po->getHtmlTable()->getIterator();

foreach ($iterator as $item) {
    var_dump($item->company);
}

