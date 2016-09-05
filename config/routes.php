<?php

return array (
  'kontakti'           => 'contact/index', //actionIndex in ContactController
  'ceni'               => 'price/index', //actionIndex in PriceController
  'portfolio'          => 'portfolio/index', //actionIndex in PortfolioController 
  'stilisty'           => 'stylists/index', //actionIndex in StylistsController
  'pricheski'          => 'haircuts/index', //actionIndex in HaircutsController 
  'obuchenie'          => 'education/index', //actionIndex in EducationController  
  'blog/post/([0-9]+)' => 'blog/post/$1', //actionPost in BlogController   
  'blog'               => 'blog/list', //actionList in BlogController
  'main'               => 'index/main', //actionMain in IndexController
  ''                   => 'index/main', //actionMain in IndexController  
  
);

