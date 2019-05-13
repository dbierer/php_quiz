<?php
function get($id, $name) {
    return array((int) $id,
                 ucfirst(strtolower($name)));
}
function get($name) {
    return array(ucfirst(strtolower($name)));
}
$name = 'nAMe';
echo get($name);
echo get("5", $name);
?>
