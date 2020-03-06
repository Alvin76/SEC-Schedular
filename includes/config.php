<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'GroupSynch',
        'pretty_uri' => false,
        'site_url' => 'https://sec-schedulars.herokuapp.com/',
        'nav_menu' => [
            'home' => 'Home',
            /*'contact' => 'Contact',
            'buildings' => 'Buildings'*/
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}