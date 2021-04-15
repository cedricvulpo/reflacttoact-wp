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
<style type="text/css">
	#wrapper-v-bottom {
		background: #EAECEF;
		padding: 30px;
	}
	
	#wrapper-v-bottom img.intro {
		margin-bottom: 24px;
		width: 100%;
		max-width: 612px;
		height: auto;
	}
	
	#wrapper-v-bottom h4 {
		font-size: 1.4rem;
		line-height: 1.2;
		margin-bottom: 30px;
	}
	
	#wrapper-v-bottom .card {
		margin-top: 15px;
		margin-bottom: 15px;
		border: none;
		border-radius: 10px;
		background: #3fb7f4;
	}
	
	#wrapper-v-bottom .card a {
		color: #000;
		padding: 15px 0 0;
	}
	
		#wrapper-v-bottom .card a:hover {
			text-decoration: none;
	}
		

	#wrapper-v-bottom .card img.card-img-top {
		width: auto;
    	height: 100%;
    	max-height: 192px;
    	margin: 0 auto 15px;
    	display: inherit;
	}
	
	#wrapper-v-bottom .card .card-body {
		padding: 30px;
		background: #dcf1fc;
		min-height: 224px;
	}
	
	#wrapper-v-bottom .card .card-body h5, #wrapper-v-bottom .card .card-body h5.card-title {
		font-size: 1.5rem;
		font-weight: bold;
		line-height: 1.2;
		text-align: center;
		color: #000;
	}
	
	#wrapper-v-bottom .card .card-body p {
		font-size: 1rem;
		font-weight: lighter;
		line-height: 1.4;
		color: #000;
	}
	
	#wrapper-v-bottom ul {
		margin: 0 0 15px;
		padding: 0;
	}
	
	#wrapper-v-bottom ul li {
		display: inline-block;
		width: 33.33%;
		background: #e6007e;
		border-radius: 10px;
		padding: 30px;
		text-align: center;
	}
	
	#wrapper-v-bottom ul li a {
		color: #fff;
		font-size: 1em;
	}
</style>
<?php
if (is_front_page() && get_locale() == 'nl_NL') {
	?>
	 <div class="wrapper" id="wrapper-v-bottom">
		<div class="container" id="wrapper-static-content" tabindex="-1">
			<div class="row">
				<div class="col-12">
					<h2>NOG MEER MATERIAAL OP MAAT VAN DE LERARENOPLEIDING</h2>
					<img src="/wp-content/uploads/2021/04/img_02-768x607-1.png" alt="NOG MEER MATERIAAL OP MAAT VAN DE LERARENOPLEIDING" class="intro" />
					<h4>Om samen met je studenten stil te staan en te leren over kinderrechten:</h4>
					<div class="row justify-content-center">
						<div class="col-sm-12 col-md-4">
							<div class="card">
								<a href="#" target="_blank">
									<img class="card-img-top" src="/wp-content/uploads/2021/04/Icones_Unicef-01-1.png" alt="GETUIGENISSEN">
									<div class="card-body">
										<h5 class="card-title">GETUIGENISSEN</h5>
										<p class="card-text">
											Dit zijn concrete getuigenissen van kinderen, jongeren, studenten en lerarenopleiders rond kinderrechten in onderwijs.
										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col-sm-12 col-md-4">
							<div class="card">
								<a href="#" target="_blank">
									<img class="card-img-top" src="/wp-content/uploads/2021/04/Icones_Unicef-05-1.png" alt="VISIE">
									<div class="card-body">
										<h5 class="card-title">VISIE</h5>
										<p class="card-text">
											Laat je inspireren over kinderrechten vanuit de link met inclusie, armoede, maatschappelijke problemen, de identiteit en rol van de leerkracht.
										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col-sm-12 col-md-4">
							<div class="card">
								<a href="#" target="_blank">
									<img class="card-img-top" src="/wp-content/uploads/2021/04/Icones_Unicef-02-1.png" alt="INSPIRATIEMATERIAAL">
									<div class="card-body">
										<h5 class="card-title">INSPIRATIEMATERIAAL</h5>
										<p class="card-text">
											Hier vind je kant-en-klaar materiaal om met studenten aan de slag te gaan rond kinderrechten.
										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col-sm-12 col-md-4">
							<div class="card">
								<a href="#" target="_blank">
									<img class="card-img-top" src="/wp-content/uploads/2021/04/Icones_Unicef-03-1.png" alt="REFLECTIE">
									<div class="card-body">
										<h5 class="card-title">REFLECTIE</h5>
										<p class="card-text">
											Reflecteer met jouw studenten aan de hand van concrete reflectie-werkvormen vanuit een kinderrechtenkader.
										</p>
									</div>
								</a>
							</div>
						</div>

						<div class="col-sm-12 col-md-4">
							<div class="card">
								<a href="#" target="_blank">
									<img class="card-img-top" src="/wp-content/uploads/2021/04/Icones_Unicef-04-1.png" alt="INFO">
									<div class="card-body">
										<h5 class="card-title">INFO</h5>
										<p class="card-text">
											Verdiep je kennis over kinderrechten in het algemeen, op school en in de lerarenopleiding met deze concrete achtergrondinformatie.
										</p>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 mt-4">
					<h4>Zoek je nog meer materiaal voor leerkrachten rond kinderrechten?<br />Bezoek onze leerkrachtenpagina</h4>
					<ul>
						<li><a href="https://www.starttokinderrechten.be/" target="_blank">starttokinderrechten</a></li>
						<li><a href="https://www.unicef.be/nl/kinderrechteneducatie" target="_blank">UNICEF kinderrechteneducatie</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php
}
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


<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<?php wp_footer(); ?>

</body>

</html>
