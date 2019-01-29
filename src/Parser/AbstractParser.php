<?php
/**
 * Created by PhpStorm.
 * User: fabricio-oliveira
 * Date: 14/12/18
 * Time: 13:18
 */

namespace CrawlerXpath\src\Parser;

use Symfony\Component\DomCrawler\Crawler;

abstract class AbstractParser
{
    protected $crawler;

    /**
     * Parser constructor.
     * @param $crawler
     */
    public function __construct($html)
    {
        $this->crawler = new Crawler();
        $this->crawler->addHtmlContent($html);
    }
}