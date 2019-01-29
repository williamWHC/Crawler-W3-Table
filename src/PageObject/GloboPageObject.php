<?php
/**
 * Created by PhpStorm.
 * User: fabricio-oliveira
 * Date: 14/12/18
 * Time: 13:01
 */


namespace CrawlerXpath\src\PageObject;

use CrawlerXpath\src\Parser\GloboParser;

class GloboPageObject extends AbstractPageObject
{
    public function getPageGlobo()
    {
        $response = $this->client->get('https://www.uol.com.br/');

        return $response->getBody()->getContents();
    }
}