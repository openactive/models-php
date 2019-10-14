<?php
namespace OpenActive;

require __DIR__ . '/../vendor/autoload.php';

$data = array(
    'type' => 'organization',
    'email' => 'tom.coates@simpleweb.co.uk',
    'founder' => array(
        'type' => 'person',
        'name' => 'Tom Coates',
    ),
    'founding_date' => '1986-11-19',
    'logo' => 'https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png',
    'name' => 'Tom Coates',
    'url' => 'tomcoat.es',
    'founding_location' => array(
        'type' => 'place',
        'address' => 'My address, Bristol'
    )
);

$parsed = Model\ModelFactory::deserialize($data);

var_dump($parsed);
