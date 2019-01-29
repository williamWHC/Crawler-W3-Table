<?php

    namespace CrawlerXpath\src\PageObject;

    use CrawlerXpath\src\Parser\Parser;

    class PageObject extends AbstractPageObject
    {
        public function getHtmlTable()
        {
            $response = $this->client->get('https://www.w3schools.com/html/html_tables.asp');

            return new Parser($response->getBody()->getContents());
        }

    }