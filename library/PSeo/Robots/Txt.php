<?php

/**
 * Generates robots.txt
 *
 */
class PSeo_Robots_Txt {

    private $_allow = array('/');
    private $_block = array();
    private $_userAgent = '*';
    private $_sitemap = '';

    /**
     * Pass an array of Urls that will be allowed
     *
     * @param array $urls
     */
    public function allowUrls($urls) {
        $this->_allow = array_merge($this->_allow, $urls);
    }

    /**
     * Pass a Url that will be allowed
     *
     * @param string $url
     */
    public function allowUrl($url) {
        $this->_allow[] = $url;
    }

    /**
     * Pass an array of Urls that will be blocked
     *
     * @param array $urls
     */
    public function blockUrls($urls) {
        $this->_block = array_merge($this->_block, $urls);
    }

    /**
     * Pass a Url that will be blocked
     *
     * @param string $url
     */
    public function blockUrl($url) {
        $this->_block[] = $url;
    }

    /**
     * Sets the User-Agent
     *
     * @param string $userAgent
     */
    public function setUserAgent($userAgent) {
        $this->_userAgent = $userAgent;
    }

    /**
     * Sets the Sitemap
     *
     * @param string $sitemap
     */
    public function setSitemap($sitemap) {
        $this->_sitemap = $sitemap;
    }

    /**
     * The robots.txt file
     * 
     * @return string robots.txt
     */
    public function content() {
        $text = "User-Agent: " . $this->_userAgent . "\n";

        foreach ($this->_block as $url) {
            $text .= "Disallow: " . $url . "\n";
        }

        foreach ($this->_allow as $url) {
            $text .= "Allow: " . $url . "\n";
        }

        if ($this->_sitemap != '') {
            $text .= "Sitemap: " . $this->_sitemap . "\n";
        }
        
        return $text;

    }

}
