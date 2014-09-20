<!DOCTYPE html>
<html lang="es">
<head>	
	<?php include('php/cabeza.php');?>
	<title></title>
</head>
<body>
	<section>
		<article class="info">
			<ul>
				<li>Email: info@alohame.com.mx <span></span></li>
				<li>
					<ul >
						<li>Facebook</li>
						<li>Twitter</li>
					</ul>
				</li>
			</ul>
		</article>
	</section>
		<aside>
			<div class="container">
				<div>
					<div class="row">
						<!-- Sección para el logotipo -->
						<div class="col-lg-3">
							<aside class="logotipo">
								<img class="img-responsive" src="http://www.alohame.com.mx/imagenes-alohame/logotipo-alohame.png" alt"logotipo-alohame">
							</aside>
						</div>
						<!-- Sección del menú principal -->
						<div class="col-lg-9">
							<?php include('php/navegador.php');?>						
						</div>
					</div>
				</div>
			</div>
		</aside>
		<aside class="carrusel">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						  	<!-- Indicators -->
						  	<ol class="carousel-indicators">
							    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
						  	</ol>
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
						    	<div class="item active">
						     		<img src="http://www.elizabethorozco.com.mx/blog-imagenes/personologia.jpg" alt="...">
						     		<div class="carousel-caption">
						        		<h3>Carrusel uno</h3>
						        		<p>

						        		</p>
						      		</div>
						    	</div>
						    	<div class="item">
						      		<img src="http://www.elizabethorozco.com.mx/blog-imagenes/productos.jpg" alt="...">
						      		<div class="carousel-caption">
						        		<h3>Carrusel dos</h3>
						        		<p>
						        		</p>
						      		</div>
						    	</div>
						    	<!-- Termina la sección de imagenes dentro del carrusel -->
						  	</div>
						  <!-- Controles de la nevegación del carrusel-->
						  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left"></span>
						  </a>
						  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right"></span>
						  </a>
						</div>
					</div>
				</div>
			</div>
		</aside>
	<section class="cuerpo">
		<section>
			<div class="row">
				<!-- Modulo uno de publicidad -->
			  <div class="col-sm-6 col-md-4 col-lg-4">
			    <div class="thumbnail">
			      <img data-src="holder.js/300x300" alt="...">
			      <div class="caption">
			        <h3 class="titulo-paquetes">Paquete Host 1</h3>
			        <p>
			        	<ul>
			        		<li> <span class="color-icono-azul glyphicon glyphicon-random"> 		</span> Ancho de banda: 	<span class="paquete"> 1Gb </span></li><br />
			        		<li> <span class="color-icono-azul glyphicon glyphicon-hdd"> 			</span> Espacio en Disco: 	<span class="paquete"> 2000 Mb </span></li><br/>
			        		<li> <span class="color-icono-azul glyphicon glyphicon-globe">			</span> Alta en navegadores:<span class="color-icono-verde glyphicon glyphicon-ok"></span></li><br />		        	
			        		<li> <span class="color-icono-azul glyphicon glyphicon-envelope">		</span> Correo Electrónico: <span class="paquete"> 5 </span></li><br/>
			        		<li> <span class="color-icono-azul glyphicon glyphicon-compressed">		</span> Creador de sitios: 	<span class="paquete">Automático</span></li><br />
			        		<li> <span class="color-icono-azul glyphicon glyphicon glyphicon-tasks"></span> Base de datos: 		<span class="paquete">Ilimitadas</span></li><br />
			        		<li> <span class="color-icono-azul glyphicon glyphicon glyphicon-tasks"></span> Cuentas FTP: 		<span class="paquete">Ilimitadas</span></li><br />
			        		<li> <span class="color-icono-azul glyphicon glyphicon-usd"> 			</span> Costo: 				<span class="paquete"> $99.00 NMX</span></li>
			        	</ul>
			        </p>
			        <p class="centrado"><a href="#" class="btn btn-primary" role="button">Comprar</a> <a href="#" class="btn btn-default" role="button">Más detalles</a></p>
			      </div>
			    </div>
			  </div>
			  <!-- Módulo dos de publicidad -->
			  <div class="col-sm-6 col-md-4 col-lg-4">
			    <div class="thumbnail">
			      <img data-src="holder.js/300x300" alt="...">
			      <div class="caption">
			        <h3 class="titulo-paquetes">Paquete Host 2</h3>
			        <p>
			        	<ul>
			        		<li> <span class="color-icono-azul glyphicon glyphicon-random"> 		</span> Ancho de banda: 	<span class="paquete"> 1Gb </span></li><br />
			        		<li> <span class="color-icono-azul glyphicon glyphicon-hdd"> 			</span> Espacio en Disco: 	<span class="paquete"> 2000 Mb </span></li><br/>
			        		<li> <span class="color-icono-azul glyphicon glyphicon-globe">			</span> Alta en navegadores:<span class="color-icono-verde glyphicon glyphicon-ok"></span></li><br />		        	
			        		<li> <span class="color-icono-azul glyphicon glyphicon-envelope">		</span> Correo Electrónico: <span class="paquete"> 5 </span></li><br/>
			        		<li> <span class="color-icono-azul glyphicon glyphicon-compressed">		</span> Creador de sitios: 	<span class="paquete">Automático</span></li><br />
			        		<li> <span class="color-icono-azul glyphicon glyphicon glyphicon-tasks"></span> Base de datos: 		<span class="paquete">Ilimitadas</span></li><br />
			        		<li> <span class="color-icono-azul glyphicon glyphicon glyphicon-tasks"></span> Cuentas FTP: 		<span class="paquete">Ilimitadas</span></li><br />
			        		<li> <span class="color-icono-azul glyphicon glyphicon-usd"> 			</span> Costo: 				<span class="paquete"> $99.00 NMX</span></li>
			        	</ul>
			        </p>
			        <p class="centrado"><a href="#" class="btn btn-primary" role="button">Comprar</a> <a href="#" class="btn btn-default" role="button">Más detalles</a></p>
			      </div>
			    </div>
			  </div>
			  <!-- Módulo tres de publicidad -->
			  <div class="col-sm-6 col-md-4 col-lg-4">
			    <div class="thumbnail">
			      <img data-src="holder.js/300x300" alt="...">
			      <div class="caption">
			        <h3 class="titulo-paquetes">Paquete Host 3</h3>
			        <p>
			        	<ul>
			        		<li> <span class="color-icono-azul glyphicon glyphicon-random"> 		</span> Ancho de banda: 	<span class="paquete"> 1Gb </span></li><br />
			        		<li> <span class="color-icono-azul glyphicon glyphicon-hdd"> 			</span> Espacio en Disco: 	<span class="paquete"> 2000 Mb </span></li><br/>
			        		<li> <span class="color-icono-azul glyphicon glyphicon-globe">			</span> Alta en navegadores:<span class="color-icono-verde glyphicon glyphicon-ok"></span></li><br />		        	
			        		<li> <span class="color-icono-azul glyphicon glyphicon-envelope">		</span> Correo Electrónico: <span class="paquete"> 5 </span></li><br/>
			        		<li> <span class="color-icono-azul glyphicon glyphicon-compressed">		</span> Creador de sitios: 	<span class="paquete">Automático</span></li><br />
			        		<li> <span class="color-icono-azul glyphicon glyphicon glyphicon-tasks"></span> Base de datos: 		<span class="paquete">Ilimitadas</span></li><br />
			        		<li> <span class="color-icono-azul glyphicon glyphicon glyphicon-tasks"></span> Cuentas FTP: 		<span class="paquete">Ilimitadas</span></li><br />
			        		<li> <span class="color-icono-azul glyphicon glyphicon-usd"> 			</span> Costo: 				<span class="paquete"> $99.00 NMX</span></li>
			        	</ul>
			        </p>
			        <p class="centrado"><a href="#" class="btn btn-primary" role="button">Comprar</a> <a href="#" class="btn btn-default" role="button">Más detalles</a></p>
			      </div>
			    </div>
			  </div>
			</div>
		</section>	
	
	</section>
</body>
</html>