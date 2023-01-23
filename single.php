<?php

/**
* Single Page Template File:
* Renders a Static Page Template File
*
* @package Resonance
*/

?>

<header>
    <?php get_header(); ?>
</header>

<main>
    <article>
        <?php get_template_part( 'template-parts/page/single' )?>
    </article>
</main>