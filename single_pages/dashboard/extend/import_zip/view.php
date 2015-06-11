<?php
defined('C5_EXECUTE') or die('Access Denied.');
?>

<form method="post" action="<?= $this->action('upload') ?>" enctype="multipart/form-data">
    <input type="file" name="file">
    <br>
    <input type="submit" class="btn btn-primary">
</form>
