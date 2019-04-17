<?php

namespace webmuscets\TableManager;
use Illuminate\Support\ServiceProvider;
    
    class TableManagerServiceProvider extends ServiceProvider {
        public function boot()
        {
        	$this->loadViewsFrom(__DIR__.'/views', 'table-manager');
        }
        
        public function register()
        {
        
        }
    
    }

?>