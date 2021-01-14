<div class="row">

  <?php if (have_posts()) : ?>
    <?php $contador = 1 ;?>
  <?php while (have_posts()) : the_post(); ?>

    <div class="col-xs-12 col-sm-6 col-md-3">
      <div class="thumbnail">

        <?php if(the_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail( 'full' ); ?>" alt="imagem">
        <?php endif; ?>


        <div class="caption">
          <h3><?php the_title(); ?></h3>
          <small>Postado por <?php the_author() ?> em <?php the_time('d/M/Y') ?> - <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?> <?php edit_post_link('(Editar)'); ?></small><br/>
          <p><?php the_excerpt(); ?></p>
          <p><a href="<?php the_permalink(); ?>" class="btn btn-primary" role="button">Veja mais...</a></p>
        </div>
      </div>
    </div>

    <?php if($contador == 4): ?>
      </div>
      <div class="row">
      <?php $contador = 1; ?>
    <?php endif; $contador++;  ?>

  <?php endwhile; ?>
  <?php else : ?>

    <p class="text-center">Ainda não existe conteúdo aqui!</p>

  <?php endif; ?>
</div>


