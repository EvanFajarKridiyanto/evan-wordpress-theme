<?php if (have_posts()) :

?>
<?php 
while(have_posts()) : the_post();?>
    <link rel="stylesheet" href="style.css">
<div class="all">
<h1><a href="<?php the_permalink();?>"><?php the_title();?></a><h1>
<p class="post-info"><?php the_time('F jS,Y g:i a');?> | by <a href ="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"> <?php the_author();?> </a>
| Category
		  <?php 
		  $categories = get_the_category();
		  $separator = ", ";
		  $output = '';
		  if ($categories){
			  foreach($categories as $category) {
				  $output .= '<a href="'. get_category_link($category->term_id) .'"> '. $category->cat_name  .' </a>'. $separator;
			  }
			  echo trim ($output, $separator);
		  }
		  ?>
		  
		  </p>
		  <div class="pp"> <?php
if ( has_post_thumbnail() ) { 
the_post_thumbnail('full-width');

}
?></div>		  

  <div class="post">
  <?php the_content();?>
</div>
		</div>
  <?php endwhile;
  else :
	echo'<p>tidak ada postingan disini</p>';
  endif;
  ?>
  </div>