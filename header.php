<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HomeLife</title>
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700|Roboto:300,400" rel="stylesheet">
  </head>
  <body <?php body_class(); ?>>
    <header class="header">
      <div class="container">
        <div class="row">
          <div class="hamburger"><span></span><span></span><span></span><span></span></div>
          <div class="mobile-menu">
            <ul class="menu">
              <li class="menu__item"><a class="menu__link" href="#">О компании</a></li>
              <li class="menu__item"><a class="menu__link" href="#">Услуги</a></li>
              <li class="menu__item"><a class="menu__link" href="#">Галерея</a></li>
              <li class="menu__item"><a class="menu__link" href="#">Контакты</a></li>
            </ul>
          </div>
          <div class="logo"><img class="logo__image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/logo.png"></div>
          <nav class="nav">
            <ul class="menu">
              <li class="menu__item"><a class="menu__link" href="#">О компании</a></li>
              <li class="menu__item"><a class="menu__link" href="#">Услуги</a></li>
              <li class="menu__item"><a class="menu__link" href="#">Галерея</a></li>
              <li class="menu__item"><a class="menu__link" href="#">Контакты</a></li>
            </ul>
          </nav>
          <div class="contact"><a class="contact__link" href="javascript:void(0);">Заказать звонок</a></div>
        </div>
      </div>
    </header>