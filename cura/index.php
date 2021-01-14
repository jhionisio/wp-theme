<?php get_header(); ?>

    <main>
      <div class="container-fluid">
        <div class="row">
            <div class="jumbotron text-center">
              <h1><?php bloginfo('name'); ?></h1>
              <p><?php bloginfo('description'); ?></p>
            </div>
        </div>
      </div>
      <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-9">
          <?php get_template_part('_conteudo'); ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
          <?php get_sidebar(); ?>          
        </div>

      </div>
    </main>
<?php get_footer(); ?>

