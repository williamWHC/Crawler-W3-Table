<?php
/**
 * Created by PhpStorm.
 * User: fabricio-oliveira
 * Date: 08/01/19
 * Time: 14:01
 */

namespace CrawlerXpath\src\Parser;


class ParserSinep extends AbstractParser
{
    public function getViewState()
    {
        return $this->crawler->filterXPath('//input[@name="__VIEWSTATE"]')->attr('value');
    }

    public function getEventValidation()
    {
        return $this->crawler->filterXPath('//input[@name="__EVENTVALIDATION"]')->attr('value');
    }
}