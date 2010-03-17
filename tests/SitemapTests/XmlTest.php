<?php

require_once 'PHPUnit/Framework.php';
require_once 'PSeo/Sitemap/Xml.php';

class PSeoTests_SitemapTests_XmlTest extends PHPUnit_Framework_TestCase {

    /**
     * @var PSeo_Sitemap_Xml
     */
    private $sitemap;

    protected function setUp() {
        $this->sitemap = new PSeo_Sitemap_Xml();
        $this->sitemap->addUrl('http://www.google.com/');
        $this->sitemap->addUrl('http://www.yahoo.com/');

    }

    public function testContent() {
        $data = explode("\n", $this->sitemap->content());
        $this->assertEquals('<loc>http://www.yahoo.com/</loc>', $data[6]);
    }
    
    protected function tearDown() {
        unset($this->sitemap);
    }

}