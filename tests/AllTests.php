<?php

// add lib to global include line
set_include_path(get_include_path() . PATH_SEPARATOR .
        dirname(__FILE__) . '/../library/'
);

require_once 'PHPUnit/Framework.php';
require_once 'RobotsTests/TxtTest.php';
require_once 'SitemapTests/UrlTests/AbstractTest.php';
require_once 'SitemapTests/UrlTests/XmlTest.php';

class AllTests extends PHPUnit_Framework_TestSuite {

    protected function setUp() {
    
    }

    public static function suite() {

        $suite = new AllTests();

        $suite->addTestSuite('PSeoTests_RobotsTests_TxtTest');

        $suite->addTestSuite('PSeoTests_SitemapTests_UrlTests_AbstractTest');
        $suite->addTestSuite('PSeoTests_SitemapTests_UrlTests_XmlTest');


        return $suite;
    }


}
