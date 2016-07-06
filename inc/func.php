<?php

function debug($tableau) {
	echo '<pre>'.print_r($tableau, true).'</pre>';
}

function redirectJS($url, $delay = 1) {
    echo '<script>
          setTimeout(function() {
                location.href = "'.$url.'"; }
          , '.($delay * 1000).');
          </script>';
}

function formatAmount($amount, $currency = '&euro;') {
    return number_format($amount, 2, ',', '&nbsp;').' '.$currency;
}

function getProductPicture($picture = '') {

    if (!empty($picture)) {
        $img_path = 'img/product/'.$picture;
        if (file_exists($img_path)) {
            return $img_path;
        }
    }
    return 'http://placehold.it/320x150';
}

function cutString($text, $max_length = 0, $end = '...', $sep = '[@]') {

    if ($max_length > 0 && strlen($text) > $max_length) {
        $text = wordwrap($text, $max_length, $sep);
        $text = explode($sep, $text);
        return $text[0].$end;
    }

    return $text;
}

function displayProduct($product) {

	$product_id = $product['id'];
    $name = ucfirst(cutString($product['name'], 15));
    $description = cutString($product['description'], 100, ' [...]');
    $price = formatAmount($product['price']);
    $picture = getProductPicture($product['picture']);
    $rating = $product['rating'];

    include 'partials/product-thumbnail.php';
}