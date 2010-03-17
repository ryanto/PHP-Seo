<?php

/**
 * Description of Xml
 *
 * @author ryan
 */

require_once 'PSeo/Sitemap/Url/Abstract.php';

class PSeo_Sitemap_Url_Txt extends PSeo_Sitemap_Url_Abstract {

    public function content() {
        return $this->loc() . "\n";
    }

}
