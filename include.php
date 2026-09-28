<?php
$announcement = "This site is in beta and is being rewritten. If you find any bugs, please report them to me on Discord: Dano#0001";
// This is used for header, displays the body and head.
if (!$title) $title = "Dano Code";
if (!$body) $body = null;
if (!$outsideBody) $outsideBody = null;
if (!$head) $head = null;
if (!$announcement) $announcement = null;
?>
  
<!DOCTYPE html>
<html>
  <head>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <?= $head ?>
    <title><?= $title ?>></title>
  </head>
  <body>
    <!-- !include header! -->
    <div class="announcement">
      <?= $announcement ?>
    </div>
    <header>
      <nav>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/testing">Try now!</a></li>
        </ul>
        <ul>
          <li><a href="/login">Login</a></li>
          <li><a href="/signup">Sign Up</a></li>
        </ul>
      </nav>
    </header>
    <!-- !include body! --> 
    <?= $body ?>
  </body> 
  <? $outsideBody ?>
</html>
