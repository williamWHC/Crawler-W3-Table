<?php
/**
 * Created by PhpStorm.
 * User: william-cirino
 * Date: 18/01/19
 * Time: 12:01
 */

namespace CrawlerXpath\src\PageObject;
use BotCrawlerCaixa\src\PageObject\AbstracPageObject;

class HtmlTablePageObject extends AbstracPageObject
{
    public function getPageHtmlTable()
    {
        $response = $this->client->get('//table[@class="w3-table-all notranslate"]/tbody/tr[position()>1]');
    }
}