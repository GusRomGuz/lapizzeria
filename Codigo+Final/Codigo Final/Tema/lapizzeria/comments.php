<div class="contenedor comentarios">
    <?php
        $args = array(
            'class_submit' => 'boton boton-primario'
        );
        comment_form($args);
    ?>

    <h3 class="text-center">Comentarios</h3>
    <ul class="lista-comentarios">
        <?php
            $args = array(
                'post_id' => $post->ID, 
                'status' => 'approve'
            );
            $comentarios = get_comments( $args);
            $args2 = array(
                'per_page' => 10,
                'reverse_top_level' => false
            );
            wp_list_comments($args2, $comentarios);

        ?>

    </ul>
</div>