<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<div class="single-projects container">
  <main>
    <h1 class=""><?php the_title(); ?>
    </h1>
    <div style="margin-left: 20px;">
      <?php
        $terms = get_the_terms(get_the_ID(), 'idm-project-categories');
        if ($terms) {
            foreach ($terms as $term) {
                echo $term->name . ',';
            }
        }
    ?>
    </div>
    <div class="editor">
      <!-- start content -->
      <?php the_content(); ?>
      <!-- end content -->
    </div>
  </main>
</div>
<?php endwhile; ?>


<?php get_footer(); ?>
