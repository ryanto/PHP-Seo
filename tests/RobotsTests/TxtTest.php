<?php

require_once 'PHPUnit/Framework.php';
require_once 'PSeo/Robots/Txt.php';

class PSeoTests_RobotsTests_TxtTest extends PHPUnit_Framework_TestCase {

    /**
     * @var PSeo_Robots_Txt
     */
    private $robots;

    protected function setUp() {
        $this->robots = new PSeo_Robots_Txt();
    }

    public function testDefaults() {
        $data = explode("\n", $this->robots->content());
        $this->assertEquals("User-Agent: *", $data[0], 'user agent');
        $this->assertEquals("Allow: /", $data[1]);
    }

    public function testDisallowArray() {
        $this->robots->blockUrls(array(
           '/block1/',
           '/block2/',
        ));

        $data = explode("\n", $this->robots->content());

        $this->assertEquals('Disallow: /block2/', $data[2]);
    }

    public function testDisallowSingleUrl() {
        $this->robots->blockUrl('/a-url-here/');

        $data = explode("\n", $this->robots->content());

        $this->assertEquals('Disallow: /a-url-here/', $data[1]);

    }

    public function testAllowArray() {
        $this->robots->allowUrls(array(
           '/allow/',
           '/allowed/',
           '/allow-this-one-too/'
        ));

        $data = explode("\n", $this->robots->content());

        $this->assertEquals('Allow: /allow-this-one-too/', $data[4]);
    }

    public function testAllowSingleUrl() {
        $this->robots->allowUrl('/a-url-here/');

        $data = explode("\n", $this->robots->content());

        $this->assertEquals('Allow: /a-url-here/', $data[2]);
    }

    public function testUserAgent() {
        $this->robots->setUserAgent('googlebot');

        $data = explode("\n", $this->robots->content());

        $this->assertEquals('User-Agent: googlebot', $data[0]);

    }

    public function testSitemap() {
        $this->robots->setSitemap('http://www.google.com/sitemap.xml');

        $data = explode("\n", $this->robots->content());

        $this->assertEquals('Sitemap: http://www.google.com/sitemap.xml', $data[2]);

    }

    protected function tearDown() {
        unset($this->robots);
    }

}