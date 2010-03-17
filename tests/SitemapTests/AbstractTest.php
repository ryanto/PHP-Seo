<?php

require_once 'PHPUnit/Framework.php';

require_once 'PSeo/Sitemap/Xml.php';
require_once 'PSeo/Sitemap/Url/Xml.php';

class PSeoTests_SitemapTests_AbstractTest extends PHPUnit_Framework_TestCase {

    /**
     * @var PSeo_Sitemap_Abstract
     */
    private $sitemap;

    protected function setUp() {
        $this->sitemap = new PSeo_Sitemap_Xml();
    }

    public function testCreateUrl() {
        $url = $this->sitemap->createUrl();
        $this->assertNotNull($url->content());
    }

    public function testAddUrl() {
        $this->sitemap->addUrl('http://www.google.com/');

        $data = $this->sitemap->urls();

        $this->assertEquals(
                'http://www.google.com/',
                $data[0]->loc()
        );
    }

    public function testAddUrlData() {
        $this->sitemap->addUrlData(array(
                'loc' => 'http://www.google.com/',
                'changefreq' => 'never',
        ));

        $data = $this->sitemap->urls();

        $this->assertEquals(
                'never',
                $data[0]->changefreq()
        );


    }

    public function testAddUrlObject() {
        $url = new PSeo_Sitemap_Url_Xml();
        $url->setLoc('http://www.google.com/');

        $this->sitemap->addUrlObject($url);

        $data = $this->sitemap->urls();

        $this->assertEquals(
                'http://www.google.com/',
                $data[0]->loc()
        );
    }

    protected function tearDown() {
        unset($this->sitemap);
    }

}