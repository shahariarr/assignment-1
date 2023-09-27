<?php
$text = "The quick brown fox jumps over the lazy dog.";
function modifyAndPrintText($inputText) {
    $lowercaseText = strtolower($inputText);
    $modifiedText = str_replace("brown", "red", $lowercaseText);
    echo $modifiedText;
  
}
modifyAndPrintText($text);
?>
