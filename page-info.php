<?php

/**
* Page Template File:
* Renders a Static Page Template File
*
* @package Premise
*/

?>

<header>
    <!-- Loads Header -->
    <?php get_header(); ?>
</header>

<main class="grid container">

    <article>
        <?php get_template_part( 'parts/page/about' )?>
    </article>

</main>