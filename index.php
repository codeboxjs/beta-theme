

<?php get_header(); ?>

<div id="content">
   <div class="container-full">
      <main>
         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
               <h2><?php the_title(); ?></h2>
               <div><?php the_content(); ?></div>
            </article>
         <?php endwhile; endif; ?>
      </main>
   </div>
</div>

<?php get_footer(); ?>
