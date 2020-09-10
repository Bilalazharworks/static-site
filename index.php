<?php common_component('header'); ?>

<main role="main">

    <?php //page('home'); ?>
    <?php //page('about'); ?>
    <?php //page('product-listing'); ?>
    <?php page('product-single'); ?>

</main>

<?php common_component('footer'); ?>


<?php

function slugify($text){
    // replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, '-');

    // remove duplicate -
    $text = preg_replace('~-+~', '-', $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }

    return $text;
}

function json($file_name){
    return json_decode( file_get_contents(__DIR__ . "/jsons/$file_name.json" ), true);
}

function common_component($component){
    require_once __DIR__ . "/common-components/$component.php";
}

function component($component){
    require_once __DIR__ . "/components/$component.php";
}

function page($page){
    require_once __DIR__ . "/pages/$page.php";
}