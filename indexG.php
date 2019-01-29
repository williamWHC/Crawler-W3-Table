<?php
/**
 * Created by PhpStorm.
 * User: fabricio-oliveira
 * Date: 14/12/18
 * Time: 11:57
 */

require_once "vendor/autoload.php";

use CrawlerXpath\src\PageObject\GloboPageObject;
use GuzzleHttp\Client;

$Gpo = new GloboPageObject(new Client());

echo($Gpo->getPageGlobo());