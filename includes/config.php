<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Simple PHP Website',
        'site_url' => '',
        'pretty_uri' => false,
        'nav_menu' => [
            '' => 'Home',
            'about-us' => 'About Us',
            'products' => 'Products',
            'contact' => 'Contact',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.1',

        // Database Configuration
        'db_host' => 'db', // Docker service name for MySQL
        'db_name' => 'mydb',
        'db_user' => 'user',
        'db_pass' => 'password',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
?>
