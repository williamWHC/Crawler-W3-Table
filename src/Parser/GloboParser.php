<?php
/**
 * Created by PhpStorm.
 * User: fabricio-oliveira
 * Date: 14/12/18
 * Time: 13:18
 */

namespace CrawlerXpath\src\Parser;

class GloboParser extends AbstractParser
{
    public function getNoticiaTI()
    {
        return $this->crawler->filterXPath('//*[@id="corpo"]/div[1]/div/div[1]/div[1]/div[1]/div/a/h1')->text();
    }
}