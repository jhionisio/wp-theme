<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

    <title><?php bloginfo('name'); ?></title>

    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap_tema.min.css" rel="stylesheet">

  </head>
  <body>
    <header>
     <nav class="navbar navbar-default">
     <div class="container">
          
          <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#identificacaoMenu" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><?php bloginfo('name'); ?></a>
          </div>

          
          <div class="collapse navbar-collapse" id="identificacaoMenu">
            <ul class="nav navbar-nav">
              <?php wp_list_cats('sort_column=name'); ?>

            </ul>

            <ul class="nav navbar-nav navbar-right">
              <?php wp_list_pages('title_li='); ?>

            </ul>
      </div>
      </div>
      </nav>

    </header>

