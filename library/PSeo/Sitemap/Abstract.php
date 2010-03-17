<?php

class PSeo_Robots_Txt {

    private $_allow = array('/');
    private $_block = array();
    private $_userAgent = '*';

    public function allowUrls($urls) {
        $this->_allow = array_merge($this->_allow, $urls);
    }

    public function allowUrl($url) {
        $this->_allow[] = $url;
    }

    public function blockUrls($urls) {
        $this->_block = array_merge($this->_block, $urls);
    }

    public function blockUrl($url) {
        $this->_block[] = $url;
    }

    public function setUserAgent($userAgent) {
        $this->_userAgent = $userAgent;
    }

    public function content() {
        $text = "User-Agent: " . $this->_userAgent . "\n";

        foreach ($this->_block as $url) {
            $text .= "Disallow: " . $url . "\n";
        }

        foreach ($this->_allow as $url) {
            $text .= "Allow: " . $url . "\n";
        }

        return $text;

    }

}
