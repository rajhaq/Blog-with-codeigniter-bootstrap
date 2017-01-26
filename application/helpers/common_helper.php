<?php
if ( ! function_exists('cat')) {
    function cat($catname = '') {
        return "'".$catname."' successfully added";
    }
}
if ( ! function_exists('cat')) {
    function createSlug($slug) {
        $lettersNumbersSpacesHyphens = '/[^\-\s\pN\pL]+/u';
        $spacesDuplicateHypens = '/[\-\s]+/';
        $slug = preg_replace($lettersNumbersSpacesHyphens, '', $slug);
        $slug = preg_replace($spacesDuplicateHypens, '-', $slug);
        $slug = trim($slug, '-');
        return mb_strtolower($slug, 'UTF-8');
    }
}

if ( ! function_exists('errormessage')) {
    function errormessage($slug = FALSE) {
        if($slug === FALSE) {
            echo '<div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Error!</strong> There is something wrong!! Please try again later</div>';
        } else {
            echo '<div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Error!</strong> ' . $slug . ' </div>';
        }
    }
}

if ( ! function_exists('successmessage')) {
    function successmessage($slug = FALSE) {
        if($slug === FALSE) {
            echo '<div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Error!</strong> There is something wrong!! Please try again later</div>';
        } else {
            echo '<div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>' . $slug . '</strong> addded </div>';
        }
    }
}
?>