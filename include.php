<?php
// This is used for header, displays the body and head.
if (!$title) $title = "Dano Code";
if (!$body) $body = null;
if (!$outsideBody) $outsideBody = null;
if (!$head) $head = null;
?>
  
<!DOCTYPE html>
<html>
  <head>
    <?= $head ?>
    <title><?= $title ?>></title>
  </head>
  <body>
    <?= $body ?>
  </body> 
  <? $outsideBody ?>
</html>
