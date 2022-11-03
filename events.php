<?php
/*
 * Template Name: Events
 * Template Post Type: page
 */
?>


<?php get_header(); ?>

<?php include ("component/nav.php"); ?> 

<section class="events grid sm:grid-rows-2 md:grid-cols-2 lg:grid-cols-2 p-8">
<div class="overlay"></div>
<?php if( have_rows('locations') ): ?>
  <div class="acf-map">
  <?php while ( have_rows('locations') ) : the_row(); 
  $location = get_sub_field('location');
  ?>
  <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
  <h4><?php the_sub_field('title'); ?></h4>
    <p class="address"><?php echo $location['address']; ?></p>
    <p><?php the_sub_field('description'); ?></p>
  </div>
  <?php endwhile; ?>
  </div>
  <?php endif; ?>
  <div class="desc bg-cyan-500 flex items-center">
  <div class="parallelogram bg-cyan-500 pl-8"></div>
    <div class="inner-container ml-4 text-left p-9">
      <h1 class="text-2xl font-bold text-white mb-4">Events Page</h1>
      <div class="grid text-white">
          <div class="info mb-4"><strong><span>Where: </span><?php the_field('venue'); ?></strong></div>
          <div class="info mb-4"><strong><span>Date: </span><?php the_field('datetime'); ?></strong></div>
          <div class="info"><span>Additional Info: </span><?php the_field('additionalinfo'); ?></div>
      </div>
      <div class="rounded-md mb-8">
          <a href="#" class="btn flex w-1/4 mt-2 rounded-md items-center justify-center border border-transparent bg-white-500/50 px-8 py-3 text-base font-medium md:py-4 md:px-10 md:text-lg lg:mt-8"><span>Register!</span></a>
        </div>
    </div>
  </div>
</section>

  <?php get_footer(); ?>