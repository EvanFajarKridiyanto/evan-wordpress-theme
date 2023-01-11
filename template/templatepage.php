<title <?php the_title( '<h1 class="title">', ); ?></title>
<?php /* Template Name: TemplateEvanBaru*/ ?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<body>
<div id="primary" class="content-area">
                <main id="main" class="site-main" role="main"> 
                    <div id="sampul" class="content ">
                    <?php
$alternative_post_image = get_post_meta($post->ID, 'Alternative Image', $single = true);
if ($alternative_post_image !== '' ) { ?>
<img src="<?php echo $alternative_post_image; ?>" alt="<?php ?>" title="<?php the_title(); ?>" />
<?php } else { ?>
<?php
the_post_thumbnail();
?>
<?php } ?>

                 </div>
</div>

            <div class="content">
            <div class="container-fluid">
            <div class="col-md-6 py-5 "><?php if ( have_posts() ): ?>
        <?php while( have_posts() ): the_post(); ?><!--CLASSIMAGE-->
       <div id="gambar" class="image"> <?php 
if ( has_post_thumbnail() ) { 
the_post_thumbnail('medium');
}
?></div>    </div>  

  <div class="row ">
    <div class="col-md-6 py-5  ">
                <?php the_title( '<h1 class="title">', '</h1>' ); ?>
                <?php the_content(); ?><!--CLASSH1-->
</div>


            </div>
    
    </main>
        <?php endwhile; ?>
    <?php endif; ?>
                    
</div>
                    

                          