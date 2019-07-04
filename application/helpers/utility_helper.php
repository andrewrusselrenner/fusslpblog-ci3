<?php
function asetURL() {
    return base_url().'assets/';
}

function imageURL() {
    return base_url().'assets/img/';
}

function vendorURL() {
    return base_url().'assets/vendor/';
}

function activeclass($url) {
    if (current_url() == current_url($url) )
    {
        echo 'active';
    } else {
        // none
    }
}

function npmURL() {
    return base_url().'assets/vendor/js/node_modules/';
}

function timeconvert($date) {
    $newDate = date("d F Y @ H:i", strtotime($date));
    return $newDate;
}