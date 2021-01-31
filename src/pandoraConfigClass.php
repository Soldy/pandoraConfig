<?php
declare(strict_types=1);

namespace Pandora\Config;


class PandoraConfigClass
{
    private $_config;
    public function get(string $name) // : any
    {
        return $this->_config[$name];
    }
    function __construct()
    {
         $conf = file_get_contents('../.pandora.json', true);
         if($conf == false)
             die('.pandora.json not exist');
         $this->_config = json_decode($conf, true);
    }
}
