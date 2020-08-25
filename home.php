<?php get_header(); ?>

    <?php
        $pagina_blog = get_option( 'page_for_posts' );
        $imagen_id = get_post_thumbnail_id($pagina_blog);
        $imagen_src = wp_get_attachment_image_src($imagen_id, 'full')[0];
    ?>
    <div class="hero" style="background-image: url( <?php echo $imagen_src ?> );">
        <div class="contenido-hero">
            <h1><?php echo get_the_title($pagina_blog); ?></h1>
        </div>
    </div>

    <div class="seccion contenedor con-sidebar">
            <main class="contenido-principal">
                <?php while(have_posts()): the_post(); ?>
                    <article class="entrada-blog">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('especialidades'); ?>
                        </a>

                        <?php 
                            get_template_part('template-parts/informacion','entrada');
                        ?>  

                        <div class="contenido-entrada">
                            <?php the_excerpt(); ?>
                            <a class="boton boton-primario" href="<?php the_permalink(); ?>">
                                Leer Más
                            </a>
                        </div>
                    

                    </article>
                <?php endwhile; ?>

                <div class="paginacion">
                    <?php next_posts_link('Anteriores'); ?>
                    <?php previous_posts_link('Siguientes'); ?>
                </div>
            </main>

            <?php get_sidebar(); ?>
    </div>


<?php get_footer(); ?>