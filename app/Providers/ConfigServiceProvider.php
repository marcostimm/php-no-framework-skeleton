<?php

namespace App\Providers;

use \League\Container\ServiceProvider\AbstractServiceProvider;
use \App\Config\Config;
use \App\Config\Loaders\ArrayLoader;

class ConfigServiceProvider extends AbstractServiceProvider  
{

    protected $provides = [
        'config'
    ];

    public function register()
    {
        $container = $this->getContainer()->share('config', function () {
            $loader = new ArrayLoader([
                'app'       => base_path('config/app.php'),
                'cache'     => base_path('config/cache.php'),
                'db'        => base_path('config/db.php')
            ]);
            
            return (new Config)->load([$loader]);
        });

        

    }
}