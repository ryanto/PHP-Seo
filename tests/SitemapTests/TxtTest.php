<?php

require_once 'PHPUnit/Framework.php';
require_once 'PSeo/Sitemap/Txt.php';

class PSeoTests_SitemapTests_TxtTest extends PHPUnit_Framework_TestCase {

    /**
     * @var PSeo_Sitemap_Txt
     */
    private $sitemap;

    protected function setUp() {
        $this->sitemap = new PSeo_Sitemap_Txt();
        $this->sitemap->addUrl('http://www.google.com/');
        $this->sitemap->addUrl('http://www.yahoo.com/');
    }

    public function testContent() {
        $data = explode("\n", $this->sitemap->content());
        $this->assertEquals('http://www.yahoo.com/', $data[1]);
    }

    protected function tearDown() {
        unset($this->sitemap);
    }

}