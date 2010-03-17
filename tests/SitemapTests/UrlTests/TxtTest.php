<?php

require_once 'PHPUnit/Framework.php';
require_once 'PSeo/Sitemap/Url/Txt.php';

class PSeoTests_SitemapTests_UrlTests_TxtTest extends PHPUnit_Framework_TestCase {

    /**
     * @var PSeo_Sitemap_Url_Xml
     */
    private $url;

    protected function setUp() {
        $this->url = new PSeo_Sitemap_Url_Txt();
        $this->url->setLoc('http://www.google.com/');
    }

    public function testContent() {
        $this->assertEquals(
                "http://www.google.com/\n",
                $this->url->content()
                );
    }
    
    protected function tearDown() {
        unset($this->url);
    }

}