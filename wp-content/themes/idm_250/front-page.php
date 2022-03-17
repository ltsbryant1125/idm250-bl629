<?php 
/*Template Name: Home Page*/ 
?>

<?php get_header(); ?>
<?php
get_template_part(
    'components/heros/home-hero',
    null,
    [
        'heading' => 'Bryant Lu',
        'body' => 'Developer'
    ]
);
get_template_part('components/recent-works');
get_template_part('components/recent-posts');
?>
<!-- <div class="front-main">
    <div class="lead">
        <h2>Hi, I’m Bryant.</h2>
        <h2>I’m a student at Drexel University studying User Experience & Interaction Design.</h2>
        <h2>I’m an aspiring UI/UX Designer.</h2>
    </div>
</div>
<div class="front-content">
    <div class="content-place">
        <img class="place-pic" src="http://bludevdesign.com/idm250/wp-content/uploads/2022/02/placeholder-image.png" alt="Placeholder Image">
        <h2>lorem</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, amet. Amet praesentium, delectus deleniti necessitatibus quas molestias quia temporibus nesciunt</p>
    </div>
</div> -->


<?php get_footer(); ?>