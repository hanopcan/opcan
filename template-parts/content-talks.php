<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>


<h2><?php the_field('title');?></h2>

<?php $date = get_field('date');
$date2 = date("F j, Y", strtotime($date)); ?>

<div class="date"><?php echo $date2;?></div>

<?php twentysixteen_post_thumbnail(); ?>
<?php the_content(); ?>

<div class="button_container">
	<a href="<?php the_field('sign-up_button');?>" target="_blank">
		<div class="button"><span class="dashicons dashicons-welcome-learn-more"></span> Book your space now <span class="dashicons dashicons-arrow-right-alt2"></span></div>	 	
	</a>
</div>


