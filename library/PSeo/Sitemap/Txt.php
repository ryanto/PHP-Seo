<?php

require_once 'PSeo/Sitemap/Abstract.php';
require_once 'PSeo/Sitemap/Url/Txt.php';


class PSeo_Sitemap_Txt extends PSeo_Sitemap_Abstract {

    protected $_className = 'Txt';

    public function content() {

        $sitemap = '';

        foreach ($this->urls() as $url) {
            $sitemap .= $url->content();
        }

        return $sitemap;
    }

}
