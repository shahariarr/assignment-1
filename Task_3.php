<?php
$grades=[85, 92, 78, 88, 95];
function sorting($grades){
    rsort($grades);
    print_r($grades);
}
sorting($grades);
?>