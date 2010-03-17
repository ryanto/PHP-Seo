<?php

require_once 'PSeo/Sitemap/Abstract.php';
require_once 'PSeo/Sitemap/Url/Xml.php';


class PSeo_Sitemap_Xml extends PSeo_Sitemap_Abstract {

    private $_schema = 'http://www.sitemaps.org/schemas/sitemap/0.9';

    protected $_className = 'Xml';

    public function content() {

        $sitemap = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
        $sitemap .= "<urlset xmlns=\"" . $this->_schema . "\">\n";

        foreach ($this->urls() as $url) {
            $sitemap .= $url->content();
        }

        $sitemap .= "</urlset>\n";

        return $sitemap;
    }

}
