<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); wp_title('|', true, 'left'); ?></title>
  </head>
  <?php wp_head();?>
  <body id="page">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="assets/js/index.js" defer></script>
    <header class="header">
      <div class="header-wrap">
        <h1 class="logo is-invisible">TARUI's<br class="is-blank" />PORTFOLIO</h1>
        <nav class="navigation">
          <ul class="nav-list">
            <li class="nav-list-item"><a href="<?php echo home_url('/'); ?>">HOME</a></li>
            <li class="nav-list-item" id="js-about"><a href="<?php echo home_url('/'); ?>#about">ABOUT</a></li>
            <li class="nav-list-item" id="js-works"><a href="<?php echo home_url('/'); ?>#works">WORKS</a></li>
            <li class="nav-list-item"><a href="<?php echo home_url('/contact_form/'); ?>">CONTACT</a></li>
          </ul>
        </nav>
        <button class="nav-toggle" type="button">
          <span class="nav-border"></span>
          <span class="nav-border"></span>
          <span class="nav-border"></span>
        </button>
      </div>
    </header>
