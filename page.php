<?php

get_header();

while (have_posts()) {
    the_post();?>

    <div class="page-banner" id="pages">

      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title();?></h1>
      </div>
    </div>

    <div class="container container--narrow page-section">
    <div class="generic-content">
      <?php the_content();?>
    </div>

  </div>

  <?php }

get_footer();

?>