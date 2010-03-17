<?php
/**
 * Description of Url
 *
 * @author ryan
 */
abstract class PSeo_Sitemap_Url_Abstract {

    abstract function content();
    // abstract specials ?

    private $_loc;
    private $_lastmod;
    private $_changefreq;
    private $_priority;

    protected $_keys = array('loc','lastmod','changefreq','priority');

    public function setLoc($loc) {
        $this->_loc = $loc;
    }

    public function setLastmod($lastmod) {
        $this->_lastmod = $lastmod;
    }

    public function setChangefreq($changefreq) {
        $this->_changefreq = $changefreq;
    }

    public function setPriority($priority) {
        $this->_priority = $priority;
    }

    public function setData($data) {
        foreach ($this->_keys as $key) {
            if (isset($data[$key])) {
                $this->{'set' . ucfirst($key)}($data[$key]);
            }
        }
    }

    public function loc() {
        return $this->_loc;
    }

    public function lastmod() {
        return $this->_lastmod;
    }

    public function changefreq() {
        return $this->_changefreq;
    }

    public function priority() {
        return $this->_priority;
    }

    

}
