<?php
    // inlcude all configs 
    require_once __DIR__ . '/configs/path.config.php';
    require_once BOOTSTRAP;
    //require_once PRODUCTS_CLASS;
    $title = 'Shop';
    $links = [
        '<link rel="stylesheet" href="/views/css/main.css">'
    ];
    require_once HEADER;
    require_once ROUTER;
    // builder show 
    $filler = 'checkOut.php';
    require_once FULL_SREEN;
    $links =[
        '<script src="/views/frontCode/jquery.js"></script>',
        '<script src="views/frontCode/compiled/shop.js"></script>'
    ];
    require_once FOOTER;