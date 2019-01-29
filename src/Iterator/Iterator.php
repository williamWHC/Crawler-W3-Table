<?php

    namespace CrawlerXpath\src\Iterator;


    use Symfony\Component\DomCrawler\Crawler;

    class Iterator implements \Countable, \Iterator
    {
        private $iterator;

        public function __construct($html, $xpath)
        {
            $crawler = new Crawler();
            $crawler->addHtmlContent($html);
            $this->iterator = $crawler->filterXPath($xpath)->getIterator();
        }

        /**
         * Return the current element
         * @link https://php.net/manual/en/iterator.current.php
         * @return mixed Can return any type.
         * @since 5.0.0
         */
        public function current()
        {
            //$item->getElementsByTagName('td')->item(2)->textContent;
            $tds = $this->iterator->current()->getElementsByTagName('td');
            $empresa = new \stdClass();
            $empresa->company = $tds->item(0)->textContent;
            $empresa->contact = $tds->item(1)->textContent;
            $empresa->country = $tds->item(2)->textContent;
            return $empresa;

            return [
                'Company' => $tds->item(0)->textContent,
                'Contact' => $tds->item(1)->textContent,
                'Country' => $tds->item(2)->textContent
            ];
        }

        /**
         * Move forward to next element
         * @link https://php.net/manual/en/iterator.next.php
         * @return void Any returned value is ignored.
         * @since 5.0.0
         */
        public function next()
        {
            $this->iterator->next();
        }

        /**
         * Return the key of the current element
         * @link https://php.net/manual/en/iterator.key.php
         * @return mixed scalar on success, or null on failure.
         * @since 5.0.0
         */
        public function key()
        {
            return $this->iterator->key();
        }

        /**
         * Checks if current position is valid
         * @link https://php.net/manual/en/iterator.valid.php
         * @return boolean The return value will be casted to boolean and then evaluated.
         * Returns true on success or false on failure.
         * @since 5.0.0
         */
        public function valid()
        {
            return $this->iterator->valid();
        }

        /**
         * Rewind the Iterator to the first element
         * @link https://php.net/manual/en/iterator.rewind.php
         * @return void Any returned value is ignored.
         * @since 5.0.0
         */
        public function rewind()
        {
            $this->iterator->rewind();
        }

        /**
         * Count elements of an object
         * @link https://php.net/manual/en/countable.count.php
         * @return int The custom count as an integer.
         * </p>
         * <p>
         * The return value is cast to an integer.
         * @since 5.1.0
         */
        public function count()
        {
            return $this->iterator->count();
        }
    }