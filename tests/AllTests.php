<?php

// add lib to global include line
set_include_path(get_include_path() . PATH_SEPARATOR .
        dirname(__FILE__) . '/../library/'
);

require_once 'PHPUnit/Framework.php';
require_once 'RobotsTests/TxtTest.php';

require_once 'SitemapTests/UrlTests/AbstractTest.php';
require_once 'SitemapTests/UrlTests/XmlTest.php';
require_once 'SitemapTests/UrlTests/TxtTest.php';

require_once 'SitemapTests/AbstractTest.php';
require_once 'SitemapTests/XmlTest.php';
require_once 'SitemapTests/TxtTest.php';

class PSeoTests_AllTests extends PHPUnit_Framework_TestSuite {

    protected function setUp() {
    
    }

    public static function suite() {

        $suite = new PSeoTests_AllTests();

        $suite->addTestSuite('PSeoTests_RobotsTests_TxtTest');

        $suite->addTestSuite('PSeoTests_SitemapTests_UrlTests_AbstractTest');
        $suite->addTestSuite('PSeoTests_SitemapTests_UrlTests_XmlTest');
        $suite->addTestSuite('PSeoTests_SitemapTests_UrlTests_TxtTest');

        $suite->addTestSuite('PSeoTests_SitemapTests_AbstractTest');
        $suite->addTestSuite('PSeoTests_SitemapTests_XmlTest');
        $suite->addTestSuite('PSeoTests_SitemapTests_TxtTest');
        
        return $suite;
    }


}
