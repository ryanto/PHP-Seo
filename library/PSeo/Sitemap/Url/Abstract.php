<?php
/**
 * An object that defines a single Url
 *
 */
abstract class PSeo_Sitemap_Url_Abstract {

    abstract function content();
    // abstract specials ?

    private $_loc;
    private $_lastmod;
    private $_changefreq;
    private $_priority;

    protected $_keys = array('loc','lastmod','changefreq','priority');

    /**
     * Sets the <loc>
     *
     * @param string $loc
     */
    public function setLoc($loc) {
        $this->_loc = $loc;
    }

    /**
     * Sets the <lastmod>
     *
     * @param string $lastmod
     */
    public function setLastmod($lastmod) {
        $this->_lastmod = $lastmod;
    }

    /**
     * Sets the <changefreq>
     *
     * @param string $changefreq
     */
    public function setChangefreq($changefreq) {
        $this->_changefreq = $changefreq;
    }

    /**
     * Sets the <priority>
     *
     * @param string $priority
     */
    public function setPriority($priority) {
        $this->_priority = $priority;
    }

    /**
     * Pass in an array of fields and they will be set.
     *
     * @param array $data
     */
    public function setData($data) {
        foreach ($this->_keys as $key) {
            if (isset($data[$key])) {
                $this->{'set' . ucfirst($key)}($data[$key]);
            }
        }
    }

    /**
     * The loc
     *
     * @return string
     */
    public function loc() {
        return $this->_loc;
    }

    /**
     * The lastmod
     *
     * @return string
     */
    public function lastmod() {
        return $this->_lastmod;
    }

    /**
     * The changefreq
     *
     * @return string
     */
    public function changefreq() {
        return $this->_changefreq;
    }

    /**
     * The priority
     *
     * @return string
     */
    public function priority() {
        return $this->_priority;
    }

    

}
