<main class="container">
    <link rel="stylesheet" href="style.css">
    <?php if ( have_posts() ): ?>
        <?php while( have_posts() ): the_post(); ?>
       <div class="dd"> <?php
if ( has_post_thumbnail() ) { 
the_post_thumbnail('full-width');

}
?></div>

            <div class="cont shadow-lg p-3 ">
                <div id="info"><p class="post-info"><?php the_time('F jS,Y g:i a');?> | by <?php the_author();?> | Category
            <?php 
            $categories = get_the_category();
            $separator = ", ";
            $output = '';
            if ($categories){
                foreach($categories as $category) {
                    $output .= $category->cat_name . $separator;
                }
                echo trim ($output, $separator);
            }
            ?>
            
            </p></div>
                <?php the_title( '<h1 class="title">', '</h1>' ); ?>
               <?php the_content(''); ?>
</div>
            
        <?php endwhile; ?>
    <?php endif; ?>
    <?php
                                // Start the loop.
                                while ( have_posts() ) : the_post();
                                               
                                                // If comments are open or we have at least one comment, load up the comment template.
                                                if ( comments_open() || get_comments_number() ) {
                                                                comments_template();
                                                }
                                                // End of the loop.
                            
                                endwhile;
                                ?>
	<style>
      
    </style>
    
</main> 
    </body>