<?php

/**
 * Description of Xml
 *
 * @author ryan
 */

require_once 'PSeo/Sitemap/Url/Abstract.php';

class PSeo_Sitemap_Url_Xml extends PSeo_Sitemap_Url_Abstract {

    /**
     * Returns the XML based sitemap.
     *
     * @return string XML based Sitemap
     */
    public function content() {

        $content = "<url>\n";

        foreach ($this->_keys as $key) {
            if ($this->{$key}() != '') {
                $content .= "<" . $key . ">" . $this->{$key}() . "</" . $key . ">\n";
            }
        }

        // foreach special $this->special()

        $content .= "</url>\n";

        return $content;
    }

}
