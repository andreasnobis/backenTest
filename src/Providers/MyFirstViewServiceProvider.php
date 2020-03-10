<?php

namespace MyFirstViewTest\Providers;


use Plenty\Plugin\ServiceProvider;

    class MyFirstViewServiceProvider extends ServiceProvider
    {
        public function register()
        {

        }
        
        // access configuration from PHP
        function getTitle(ConfigRepository $config):string
        {
            if( $config->get('MyPlugin.show_title') == "1" )
              {
                  return $config->get('MyPlugin.title_text');
              }
            else
              {
                  return "No Title in Config";
              }
        }
        
    }

