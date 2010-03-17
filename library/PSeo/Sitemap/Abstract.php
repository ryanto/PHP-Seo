<?php

abstract class PSeo_Sitemap_Abstract {

    abstract function content();

    protected $_urls = array();

    /**
     * Creates a Url based on the current sitemap class.
     *
     * @return PSeo_Sitemap_Url_Abstract
     */
    public function createUrl() {
        $className = 'PSeo_Sitemap_Url_' . $this->_className;
        $url = new $className;
        return $url;
    }

    /**
     * Add a Url to the sitemap.  Its best to include http://
     *
     * @param string $urlString
     */
    public function addUrl($urlString) {
        $url = $this->createUrl();
        $url->setLoc($urlString);
        $this->addUrlObject($url);
    }

    /**
     * Add Url data to the sitemap, pass an array of sitemap data.
     *
     * @param array $urlData
     */
    public function addUrlData($urlData) {
        $url = $this->createUrl();
        $url->setData($urlData);
        $this->addUrlObject($url);
    }

    /**
     * Add a Url object to the sitemap.  Generally only needed for
     * advance use.
     *
     * @param Pseo_Sitemap_Url_Abstract $url
     */
    public function addUrlObject($url) {
        $this->_urls[] = $url;
    }

    /**
     * Returns an array of all of the Url objects within this
     * sitemap.
     * 
     * @return array
     */
    public function urls() {
        return $this->_urls;
    }
    

}
