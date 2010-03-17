<?php

/**
 * Description of Xml
 *
 * @author ryan
 */

require_once 'PSeo/Sitemap/Url/Abstract.php';

class PSeo_Sitemap_Url_Txt extends PSeo_Sitemap_Url_Abstract {

    /**
     * Retrns the content of a text based sitemap.  All this is
     * is a list of plain text Urls, nothing else.
     *
     * @return string Plain text sitemap
     */
    public function content() {
        return $this->loc() . "\n";
    }

}
