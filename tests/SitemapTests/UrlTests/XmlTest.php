<?php

require_once 'PHPUnit/Framework.php';
require_once 'PSeo/Sitemap/Url/Xml.php';

class PSeoTests_SitemapTests_UrlTests_XmlTest extends PHPUnit_Framework_TestCase {

    /**
     * @var PSeo_Sitemap_Url_Xml
     */
    private $url;

    protected function setUp() {
        $this->url = new PSeo_Sitemap_Url_Xml();
        $this->url->setLoc('http://www.google.com/');
        $this->url->setLastmod('2010-03-15');
        $this->url->setChangefreq('always');
        $this->url->setPriority('0.8');
    }

    public function testContent() {
        $data = explode("\n", $this->url->content());
        $this->assertEquals("<url>", $data[0], 'url open');
        $this->assertEquals("<loc>http://www.google.com/</loc>", $data[1], 'loc');
        $this->assertEquals("<lastmod>2010-03-15</lastmod>", $data[2], 'lastmod');
        $this->assertEquals("<changefreq>always</changefreq>", $data[3], 'changefreq');
        $this->assertEquals("<priority>0.8</priority>", $data[4], 'priority');
        $this->assertEquals("</url>", $data[5], 'url close');
    }
    
    protected function tearDown() {
        unset($this->url);
    }

}