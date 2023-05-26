<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="root">
        <!-- Aquí puedes agregar el contenido de tu tema -->
        <?php
            // Ejemplo: Mostrar el título del sitio
            echo "<h1>" . get_bloginfo('name') . "</h1>";
        ?>
    </div>
    <?php wp_footer(); ?>
</body>
</html>
