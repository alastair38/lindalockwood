<?php
/*
Template Name: Categorised Gallery Pages
*/
?>

<?php get_header();

$page_title = $wp_query->post->post_title;
$page_id = $wp_query->post->id;
$the_content = $wp_query->post->post_content;
$page_slug = basename(get_permalink()); //$page_slug will match category slug for use in loop
$sub_slug = $page_slug . '-landscape';
$theCatId = get_term_by( 'slug', $page_slug, 'category' );
$theCatId = $theCatId->term_id;

?>

 <div class="large-12 columns" id="content">

     <?php get_template_part( 'partials/nav', 'side' ); ?>

<div class="large-9 medium-8 small-12 columns" >
     <div class="columns" >
     <div class="gallery">
<?php $descendants = get_categories(array('child_of' => $theCatId)); ?>
<?php foreach ($descendants as $child) { ?>
<?php $catPosts = new WP_Query(); $catPosts->query("post_type=paintings&cat=$child->term_id"); ?>
<h3 class="gallery-title columns"><?php echo $page_title . ' - ' . $child->cat_name; ?></h3>
<?php while ($catPosts->have_posts()) : $catPosts->the_post(); ?>

<?php get_template_part( 'partials/loop', 'paintings' ); ?>

<?php endwhile; ?>
<?php } ?>


        </div>
   </div>

<div class="large-12 columns">
<h3 class="gallery-title">Pricing</h3>

<?php echo '<p>' . $the_content . '</p>';?>
</div>



</div>

               </div>
                <?php get_footer(); ?>
