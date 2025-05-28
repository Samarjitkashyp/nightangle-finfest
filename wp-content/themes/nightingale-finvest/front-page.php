<!-- Header -->
<?php get_header(); ?>

<div id="main-hero-slider-wrapper">
  <?php echo do_shortcode('[smartslider3 slider="2"]');?>
</div>

<!-- <?php if( have_rows('hero_slides') ) : ?>
<section class="hero-slider owl-carousel owl-theme">
  <?php while( have_rows('hero_slides') ): the_row(); 
    // $bg = get_sub_field('background_image');
    // $heading = get_sub_field('heading');
    // $desc = get_sub_field('description');
    // $btn_text = get_sub_field('button_text');
    // $btn_link = get_sub_field('button_link');
  ?>
    <div class="hero-slide" style="background-image: url('<?php echo esc_url($bg); ?>');">
      <div class="hero-content text-center text-white">
        <?php if( $heading ): ?>
          <h1 class="animate__animated animate__fadeInDown animate__delay-1s"><?php echo esc_html($heading); ?></h1>
        <?php endif; ?>

        <?php if( $desc ): ?>
          <p class="animate__animated animate__fadeInUp animate__delay-2s"><?php echo esc_html($desc); ?></p>
        <?php endif; ?>

        <?php if( $btn_text && $btn_link ): ?>
          <a href="<?php echo esc_url($btn_link); ?>" class="btn btn-lg btn-outline-light mt-3 px-4 py-2 animate__animated animate__fadeInUp animate__delay-3s"><?php echo esc_html($btn_text); ?></a>
        <?php endif; ?>
      </div>
    </div>
  <?php endwhile; ?>
</section>
<?php endif; ?> -->


<!-- search form -->




<!-- Footer -->
<?php get_footer(); ?>