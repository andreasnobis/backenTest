<?php

namespace MyFirstViewTest\Providers;

use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;



    class MyFirstViewServiceProvider extends ServiceProvider
    {
        public function register()
        {

        }   
        
        // access configuration from PHP
        public function getTitle()
        {
           /* if( $config->get('MyPlugin.show_title') == "1" )
              {
                  return $config->get('MyPlugin.title_text');
              }
            else
              {
                  return "No Title in Config";
              }
             */
            $config="Es funktioniert zumindest irgendwas";
            return $config;
        }
    }

