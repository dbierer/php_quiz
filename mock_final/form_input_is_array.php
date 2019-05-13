<?php
if ($_POST) {
    $valid = is_array($_POST['choice']);
    echo ($valid) ? 'MULTI' : 'SINGLE';
    exit;
}
$item1 = 'method="post"';
$item2 = 'name="choice[]"';

?>
<html><body><form <?= $item1 ?>>
<input type="text" <?= $item2 ?> />
<input type="submit" /></form></body></html>
