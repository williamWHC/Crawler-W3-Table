<?php
/**
 * Created by PhpStorm.
 * User: fabricio-oliveira
 * Date: 08/01/19
 * Time: 13:22
 */

namespace CrawlerXpath\src\PageObject;


use CrawlerXpath\src\Parser\ParserSinep;

class SinepPageObject extends AbstractPageObject
{
    public function getSinep()
{
    $response = $this->client->get('http://mapfrenegociospublicos.com.br/');

    return new ParserSinep($response->getBody()->getContents());
}

    public function postLogin()
    {
        $html = $this->getSinep();

        $vs = $html->getViewState();

        $ev = $html->getEventValidation();


        $response = $this->client->request('POST', 'http://mapfrenegociospublicos.com.br/Default.aspx', [


            'form_params'=>[
                'txtuser'=>'',
                'txtpass'=>'',
                '__VIEWSTATE'=> $vs,
                '__VIEWSTATEGENERATOR'=>'CA0B0334',
                '__EVENTVALIDATION'=> $ev,
                'btnLogin' => ''
            ]
        ]);

        return $response->getBody()->getContents();
    }
}