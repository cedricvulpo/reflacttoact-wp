<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="wrapper-footer">
	<div class="container">
    <ul class="rainbow">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
    <div class="row">
      <div class="col-sm-12">
          <a href="https://diplomatie.belgium.be/en/dgd" target="_blank">
              <img src="/wp-content/themes/leerkrachten-unicef/img/CBD_logo_NL_RGB.png">
          </a>
      </div>
      <div class="col-sm-6">
          <a href="https://www.ucll.be/" target="_blank">
              <img src="/wp-content/themes/leerkrachten-unicef/img/logo_UCLL.png">
          </a>
      </div>
      <div class="col-sm-6">
          <a href="https://www.unicef.be/" target="_blank">
              <img src="/wp-content/themes/leerkrachten-unicef/img/logo_UNICEF.png">
          </a>
      </div>
  	</div>
	</div>
</div>

</div>


<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<?php wp_footer(); ?>

</body>

</html>
