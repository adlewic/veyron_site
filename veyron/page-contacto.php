<?php get_header(); ?>
		 <!-- small header -->
	<header>
		<div id="title">
			<h3> Contacto </h3>
		</div>		
		<div id="banner">
			<div id="banner_title">
				<h2> Lorem ipsum lorem </h2>
			</div>
		</div>
	</header>
	
	<div id="wrapper" class="twelve columns">
			
		<section class="nine columns">
			<p id="p_contact"> 
				Stevenson Systems is a company that prides itself on meeting with our clients to help solve questions and challenges. Whether it’s a question about a measurement standard or a need to conduct careful analysis on an impending building purchase or disposition, we are here to assist. 
			</p>

		</section>

		<section class="three columns">
			<div id="title_contact">
					CONTACTANOS
			</div>
			<form method="post" action="<?php bloginfo('url'); ?>/sendform">
				<input type="text" name="nombre" placeholder="Nombre">
				<br>
				<input type="text" name="apellido" placeholder="Apellido">
				<br>
				<input type="text" name="email" placeholder="Email">
				<br>
				<input type="text" name="phone" placeholder="Teléfono">
				<br>
				<!-- <textarea type="text" name="message" placeholder="Mensaje"> </textarea> -->
				<br>
				<input type="submit" value="Submit">
			</form>
		</div>



		</section>
	</div>	
<?php get_footer(); ?>