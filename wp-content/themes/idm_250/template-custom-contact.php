<?php 

/*Template Name: Custom Contact*/ 
?>

<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<div class="container">
 

  <?php the_post_thumbnail(); ?>

  <div class="custom-general-main">
      <div class="custom-general-cont">
          <div class="custom-general">
            <h1 class="title-gen"><?php the_title(); ?>
            </h1>
            <!-- start content -->
            <?php the_content(); ?>
            <!-- end content -->
          </div>
      </div>
  </div>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>