<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2014-2016 Zend Technologies USA Inc. (http://www.zend.com)
 */

namespace Application;

use Zend\Uri\UriFactory;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    // Insert the method below
    public function onBootstrap()
    {
        UriFactory::registerScheme('chrome-extension', 'Zend\Uri\Uri');
    }
}
