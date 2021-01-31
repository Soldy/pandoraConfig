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
    function __construct(string $config_file = '../.pandora.json')
    {
         $conf = file_get_contents($config_file, true);
         if($conf == false)
             die('.pandora.json not exist');
         $this->_config = json_decode($conf, true);
    }
}
