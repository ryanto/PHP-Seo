<?php

abstract class PSeo_Sitemap_Abstract {

    abstract function content();

    protected $_urls = array();

    public function createUrl() {
        $className = 'PSeo_Sitemap_Url_' . $this->_className;
        $url = new $className;
        return $url;
    }

    public function addUrl($urlString) {
        $url = $this->createUrl();
        $url->setLoc($urlString);
        $this->addUrlObject($url);
    }

    public function addUrlData($urlData) {
        $url = $this->createUrl();
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
