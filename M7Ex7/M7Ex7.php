<?php
$time = 12-16-2015;
$eTag = 'Hello Doug';

$noneMatch == isset($_SERVER['HTTP_if_NONE_MATCH']) ? $_SERVER['HTTP_if_NONE_MATCH'] : ""; 
    if($noneMatch == $etag) {
        header('304 Not Modified', TRUE, 304);
            exit;
        } else {
            header("ETag: $etag");
        }

?>