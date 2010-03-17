<?php

require_once 'PSeo/Sitemap/Url.php';

abstract class PSeo_Sitemap_Abstract {

    abstract function content();

    protected $_urls = array();

    public function addUrl($url) {
        $url = new PSeo_Sitemap_Url();
        $url->setLoc($url);
        $this->addUrlObject($url);
    }

    public function addUrlData($urlData) {
        $url = new PSeo_Sitemap_Url();
        $url->setData($urlData);
        $this->addUrlObject($url);
    }

    public function addUrlObject($url) {
        $this->_urls[] = $url;
    }

    public function urls() {
        return $this->_urls;
    }
    


}
