<?php get_header(); ?>

<div class="404-container">
<div class="row">
<div class="large-12 columns">

<h1>4-Ohhh-4!</h1>
<h2>We've lost this page... or you can't type</h2>
<img src=""/>
<a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>">TAKE ME HOME PLEASE</a>

</div>
</div>
</div>

<style type="text/css">

  .button { 
    background: #e85252;
    color: white;
    font-weight: bold;
    text-transform: uppercase;
    display: table;
    margin: 50px auto auto auto;
    float: none; }

  h1, h2 { 
    color: #222;
    text-align: center;
    font-weight: bold;
    text-transform: uppercase; }

  h1 { 
    font-size: 68px;
    margin-top: 15%;
    margin-bottom: 10px; }

  h2 { 
    font-size: 32px; }    
  
  header, footer { 
    display: none; }

  body { 
    background: url(<?php bloginfo('template_url'); ?>/img/sf-img/monster.png) no-repeat bottom left #fee9d7; }  

</style>

<?php get_footer(); ?>