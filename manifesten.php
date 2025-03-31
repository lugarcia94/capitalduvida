<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Fabricio
 * Template Name: manifesten
 */
get_header('en'); ?>
<?php include 'language.php'; ?>
<section class="manifest__first">
    <div class="lateral__info desk"><img src="<?php bloginfo('template_directory'); ?>/imgs/manifestolateral.png" /></div>
    <div class="mob"><img src="<?php bloginfo('template_directory'); ?>/imgs/manifestolateralmob.png" /></div>
    <h2 class="ppeditorlightitalic">Manifest</h2>
    <span class="ppeditorlightitalic">Many times, everything starts with a <strong>“what if?”</strong></span>
</section>

<section class="manifest__first second">
    <img class="desk" src="https://w57.199.myftpupload.com/wp-content/uploads/2025/03/manifestimage.png" />
    <img class="mob" src="<?php bloginfo('template_directory'); ?>/imgs/manifestimagemob.png" />
</section>

<section class="manifest__first three">
    <p>What if I could create a filament that glows without burning out when electricity passes through it?</p>

    <p>That was Thomas Edison's question—without knowing whether one of his thousand attempts would eventually lead to the electric lightbulb.</p>

    <p>What if I added a gasoline-powered engine to a dirigible?</p>

    <p>That was Santos Dumont’s vision, shaping the future of modern aviation.</p>

    <p>What if I combined music, telephony, and internet communication into a single device?</p>

    <p>That was Steve Jobs, before launching the iPhone in 2007.</p>

    <p>As ironic as it may seem, doubt has been the greatest driving force of creativity since the invention of the wheel.</p>
    <p>And in a world with fewer and fewer certainties—a shifting-sands reality where nothing is solid—doubt has become essential. Not just for great inventors, but for anyone who dares to live life on their own terms.</p>
    <p>Doubt as capital. A starting point.</p>
    <p>Doubt as intellectual and financial capital.</p>
    <p>Doubt as a force of awareness—capable of opening minds, shaping businesses, and changing habits.</p>
    <p>This is where we begin. A space for conversations that challenge familiar ideas, unlock new perspectives, and—above all—dismantle the inherited certainties that so often hold us back.</p>


    <p><span><strong>Welcome.</strong> Capital da Dúvida <span class="ppeditorlightitalic">the place</span> where questions led the way.</span></p>
    <p>Because more often than not, it all starts with a single "what if”.</p>
</section>

<?php include 'backbutton.php'; ?>
<?php get_footer('en'); ?>