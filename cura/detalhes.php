<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="row text-center">
    <h1 class="text-uppercase"><?php the_title(); ?></h1>
    <small>Postado por <?php the_author() ?> em <?php the_time('d/M/Y') ?> - <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?> <?php edit_post_link('(Editar)'); ?></small>
</div>
<div class="row  text-justify">
      <blockquote>
        <p><?php the_excerpt(); ?></p>
      </blockquote>
</div>
<div class="row text-justify">
      <?php the_content(); ?>
</div>
<div class="row text-center">
      <p><?php previous_post_link(); ?>&nbsp;|&nbsp;<?php next_post_link(); ?></p>
</div>
<div class="row">
      <?php comments_template(); ?>
</div>


  <?php endwhile; ?>
  <?php else : ?>

    <p class="text-center">Ainda não existe conteúdo aqui!</p>

  <?php endif; ?>

