<?php

    namespace CrawlerXpath\src\Parser;

    use CrawlerXpath\src\Iterator\Iterator;

    class Parser extends AbstractParser
    {
        public function getTituloPrincipal()
        {
            return $this->crawler->filterXPath('(//h1)[1]')->text();
        }

        public function getHtml()
        {
            return $this->crawler->html();
        }

        public function getIterator()
        {
            return new Iterator($this->getHtml(), "//table[@id='customers']/tr[position()>1]");
        }
    }