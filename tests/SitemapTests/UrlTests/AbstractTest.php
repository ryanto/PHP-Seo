<?php

require_once 'PHPUnit/Framework.php';
require_once 'PSeo/Sitemap/Url/Xml.php';

class PSeoTests_SitemapTests_UrlTests_AbstractTest extends PHPUnit_Framework_TestCase {

    /**
     * @var PSeo_Sitemap_Url_Abstract
     */
    private $url;

    protected function setUp() {
        $this->url = new PSeo_Sitemap_Url_Xml();
        $this->url->setLoc('http://www.google.com/');
        $this->url->setLastmod('2010-03-15');
        $this->url->setChangefreq('always');
        $this->url->setPriority('0.8');
    }

    public function testLoc() {
        $this->assertEquals('http://www.google.com/', $this->url->loc());
    }

    public function testLastmod() {
        $this->assertEquals('2010-03-15', $this->url->lastmod());
    }

    public function testChangefreq() {
        $this->assertEquals('always', $this->url->changefreq());
    }

    public function testPriority() {
        $this->assertEquals('0.8', $this->url->priority());
    }

    public function testSetData() {
        $this->url->setData(array(
                'loc' => 'http://www.yahoo.com/',
                'lastmod' => '2009-09-09',
                'changefreq' => 'never',
                'priority' => '0.1',
        ));

        $this->assertEquals('http://www.yahoo.com/', $this->url->loc(), 'loc');
        $this->assertEquals('2009-09-09', $this->url->lastmod(), 'lastmod');
        $this->assertEquals('never', $this->url->changefreq(), 'changefreq');
        $this->assertEquals('0.1', $this->url->priority(), 'priority');
    }

    protected function tearDown() {
        unset($this->url);
    }

}