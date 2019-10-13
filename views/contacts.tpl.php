<?php include ("header.tpl.php"); ?>

<?php
if (isset($this->data["content"])) {
    echo $this->data["content"];
}
?>

<?php include ("forms/contacts.tpl.php"); ?>

<?php include ("footer.tpl.php"); ?>
