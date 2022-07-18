<?php
require_once("simple_html_dom.php");
// Create DOM from URL or file
$html = file_get_html('https://www.google.com/');

// Find all images
foreach($html->find('a') as $element)
       echo $element->href . '<br>';
?>
