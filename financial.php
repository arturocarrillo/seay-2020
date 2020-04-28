<!DOCTYPE html>
<html lang="es-MX" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="La Secretaría Ejecutiva del Sistema Estatal Anticorrupción de Yucatán (SESEAY), somos un organismo público descentralizado, no sectorizado, con personalidad jurídica y patrimonio propio, autonomía técnica y de gestión funge como órgano de apoyo técnico del comité coordinador">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Financiera</title>
	<link rel="apple-touch-icon" sizes="57x57" href="http://www.seay.org.mx/img/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="http://www.seay.org.mx/img/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="http://www.seay.org.mx/img/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="http://www.seay.org.mx/img/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="http://www.seay.org.mx/img/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="http://www.seay.org.mx/img/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="http://www.seay.org.mx/img/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="http://www.seay.org.mx/img/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="http://www.seay.org.mx/img/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="http://www.seay.org.mx/img/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="http://www.seay.org.mx/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="http://www.seay.org.mx/img/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="http://www.seay.org.mx/img/favicon-16x16.png">
	<link rel="manifest" href="http://www.seay.org.mx/img/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="http://www.seay.org.mx/img/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
	<link rel="canonical" href="http://seseay.org.mx/financial.php">
	<link rel="shortlink" href="http://seseay.org.mx/financial.php">
	<link rel="stylesheet" type="text/css" href="./css/style_icon.css">
	<link rel="stylesheet" type="text/css" href="./css/scroll-top.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<script src="http://www.seay.org.mx/js/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="http://www.seay.org.mx/js/script4.js" type="text/javascript" charset="utf-8"></script>
	<script src="http://www.seay.org.mx/js/bootstrap.js" type="text/javascript" charset="utf-8"></script>
	<script>
		$(document).ready(function () {
    		$('.up').click(function(){
        		$('body,html').animate({
           	 		scrollTop: '0px'
        		}, 1000);
    		});
    		$(window).scroll(function(){
        		if( $(this).scrollTop() > 0 ){
            		$('.up').slideDown(600);
        		}else {
            		$('.up').slideUp(600);
        		}
    		});
    		/*hacia abajo*/
     		$('.ir-abajo').click(function(){
         		$('body,html').animate({
           	  		scrollTop: '1000px'
         		}, 1000);
     		});
		});
	</script>
	<style>
		td a{
			text-decoration: none;
			color: #0c0c0c;
			transition: all 0.3s ease-in-out;
		}
		td a:hover{
			text-decoration: none;
			color: #007bff;
		}
		.modalAdd, .modalAdd2, .modalAdd3, .modalAdd4, .modalAdd5{
			display: none;
		}
	</style>
	<script type="text/javascript">
        $(document).ready(function(){  
    			$(".plus").click(function () {
        		$('.modalAdd').toggle("slow");
    		});
    			$(".plus2").click(function () {
        		$('.modalAdd2').toggle("slow");
    		});
    			$(".plus3").click(function () {
        		$('.modalAdd3').toggle("slow");
    		});
    			$(".plus4").click(function () {
        		$('.modalAdd4').toggle("slow");
    		});
    			$(".plus5").click(function () {
        		$('.modalAdd5').toggle("slow");
    		});
		});
    </script>
</head>
<body>
	<div class="up">
    	<span class="ir-arriba icon-arrow-up2">
    	</span>
	</div>
	<?php 
		include'./header.php'
	?>
	<div class="up">
    	<span class="ir-arriba icon-circle-up">
    	</span>
	</div>
	<section class="w-100 flex justify-content-center mt-11">
		<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-10 start">
			<h2 class="sub-title text-blue_1 p-2">Información 2018</h2>
		</div>
		<div class="col-xl-10 col-lg-10 col-md-10 col-sm-11 col-xs-11 mb-5 flex-around-stretch">
			<!--  --------------- 1 btn informacion contable ---------------  -->
			<div class="col-xl-2 col-lg-10 col-md-9 col-sm-9 btn-icon-lg flex justify-content-center bg-blue_1" data-toggle="modal" data-target="#contable_2018">
				<a class="link-icon-lg a-btn" href="#">Información <br> Contable</a>
				<span class="span-icon-lg icon-calculator"></span>
			</div>
			<!-- modal btn one -->
			<div class="modal fade" id="contable_2018" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLongTitle">Información Contable</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body flex">
					       	<table class="table  table-hover table-light table-bordered">
								<tbody>
									<tr>
										<th scope="col" style="text-align: left; " valign="top">Número</th>
										<th scope="col" style="text-align: left; ">&nbsp;Información</th>
										<td scope="col"  style="text-align: center; vertical-align: middle;">1ER</td>
										<td scope="col"  style="text-align: center; vertical-align: middle;">2DO</td>
										<td scope="col"  style="text-align: center; vertical-align: middle;">3ER</td>
										<td scope="col"  style="text-align: center; vertical-align: middle;">4TO</td>
									</tr>
									<tr>
				                        <th scope="row" style="text-align: left; " valign="top">1</th>
				                        <th scope="row" style="text-align: left; ">&nbsp;Estados de Situación Financiera</th>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" ><span class="disable icon-file-pdf"></span></a></td>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" ><span class="disable icon-file-pdf"></span></a></td>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Sep_2018_3er_trim/contable/3er.Trim.18 Estado de Situación Financiera.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Dec_2018_4to_trim/contable/4to.Trim.18 Estado de situación fianciera.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
				                    </tr>
				                    <tr>
				                        <th scope="row" style="text-align: left; " valign="top">2</th>
				                        <th scope="row" style="text-align: left; ">&nbsp;Estado de Cambios en la Situación Financiera</th>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" ><span class="disable icon-file-pdf"></span></a></td>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" ><span class="disable icon-file-pdf"></span></a></td>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Sep_2018_3er_trim/contable/3er.Trim.18 Estado de cambios en la Situación Financiera.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Dec_2018_4to_trim/contable/4to.Trim.18 Estado de cambios en la situación financiera.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
				                    </tr>
				                    <tr>
				                        <th scope="row" style="text-align: left; " valign="top">3</th>
				                        <th scope="row" style="text-align: left; ">&nbsp;Estado de Flujos de Efectivo</th>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" ><span class="disable icon-file-pdf"></span></a></td>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" ><span class="disable icon-file-pdf"></span></a></td>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Sep_2018_3er_trim/contable/3er.Trim.18 Estado de flujos de efectivo.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Dec_2018_4to_trim/contable/4to.Trim.18 Estado de flujos de Efectivo.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
				                    </tr>
				                    <tr>
				                        <th scope="row" style="text-align: left; " valign="top">4</th>
				                        <th scope="row" style="text-align: left; ">&nbsp;Estado de Actividades</th>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" ><span class="disable icon-file-pdf"></span></a></td>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" ><span class="disable icon-file-pdf"></span></a></td>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Sep_2018_3er_trim/contable/3er.Trim.18 Estado de Actividades.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Dec_2018_4to_trim/contable/4to.Trim.18 Estado de actividades.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
				                    </tr>
				                    <tr>
				                        <th scope="row" style="text-align: left; " valign="top">5</th>
				                        <th scope="row" style="text-align: left; ">&nbsp;Estado de Variaciones en la Hacienda Pública</th>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" ><span class="disable icon-file-pdf"></span></a></td>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" ><span class="disable icon-file-pdf"></span></a></td>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Sep_2018_3er_trim/contable/3er.Trim.18 Estado de variaciones en la Hacienda Pública.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Dec_2018_4to_trim/contable/4to.Trim.18 Estado de variaciones en la Hacienda Pública.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
				                    </tr>
				                    <tr>
				                        <th scope="row" style="text-align: left; " valign="top">6</th>
				                        <th scope="row" style="text-align: left; ">&nbsp;Estado Analítico del Activo</th>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" ><span class="disable icon-file-pdf"></span></a></td>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" ><span class="disable icon-file-pdf"></span></a></td>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Sep_2018_3er_trim/contable/3er.Trim.18 Estado Analítico del Activo.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Dec_2018_4to_trim/contable/4to.Trim.18 Estado Analítico del Activo.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
				                    </tr>
				                    <tr>
				                        <th scope="row" style="text-align: left; " valign="top">7</th>
				                        <th scope="row" style="text-align: left; ">&nbsp;Endeudamiento Neto e Intereses de la Deuda</th>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" ><span class="disable icon-file-pdf"></span></a></td>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" ><span class="disable icon-file-pdf"></span></a></td>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Sep_2018_3er_trim/contable/3er.Trim.18 Endeudamiento neto e intereses de la deuda.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Dec_2018_4to_trim/contable/4to.Trim.18 Endeudamiento neto e intereses de la deuda.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
				                    </tr>
				                    <tr>
				                        <th scope="row" style="text-align: left; " valign="top">8</th>
				                        <th scope="row" style="text-align: left; ">&nbsp;Notas a los Estados Financieros</th>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" ><span class="disable icon-file-pdf"></span></a></td>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" ><span class="disable icon-file-pdf"></span></a></td>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Sep_2018_3er_trim/contable/3er.Trim.18 Notas a los Estados Financieros.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
				                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Dec_2018_4to_trim/contable/4to.Trim.18 Notas a los Estados Financieros..pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
				                    </tr>
								</tbody>
							</table>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn bg-blue_1" data-dismiss="modal">Cerrar</button>
					      </div>
					    </div>
					  </div>
			</div>
			<!-- End btn informacion contable -->
			<!--  --------------- 2 btn informacion Presupuestaria ---------------  -->
			<div class="col-xl-2 col-lg-10 col-md-9 col-sm-9 btn-icon-lg flex  justify-content-center bg-blue_1" data-toggle="modal" data-target="#presupuestaria_2018">
				<a class="link-icon-lg a-btn" href="#">Información <br> Presupuestaria</a>
				<span class="span-icon-lg icon-clipboard"></span>
			</div>
			<!-- modal btn informacion presupuestaria -->
			<div class="modal fade" id="presupuestaria_2018" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLongTitle">Información Presupuestaria</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
					      </div>
					      <div class="modal-body flex">
						       	<table class="table  table-hover table-light table-borde">
									<tbody>
										<tr>
											<th scope="col" style="text-align: left; " valign="top">Número</th>
											<th scope="col" style="text-align: left; ">&nbsp;Información</th>
											<td scope="col"  style="text-align: center; vertical-align: middle;">1ER</td>
											<td scope="col"  style="text-align: center; vertical-align: middle;">2DO</td>
											<td scope="col"  style="text-align: center; vertical-align: middle;">3ER</td>
											<td scope="col"  style="text-align: center; vertical-align: middle;">4TO</td>
										</tr>
										<tr>
					                        <th scope="row" style="text-align: left; " valign="top">1</th>
					                        <th scope="row" style="text-align: left; ">&nbsp;Estado Analítico de Ingresos Presupuestales</th>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Sep_2018_3er_trim/presupuestaria/3er.Trim.18 Estado Analítico de Ingresos Presup..pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Dec_2018_4to_trim/presupuestaria/4to.Trim.18 Estado analítico de Ingresos Presupuestales..pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
					                    </tr>
					                    <tr>
					                        <th scope="row" style="text-align: left; " valign="top">2</th>
					                        <th scope="row" style="text-align: left; ">&nbsp;Estado del Ejercicio del Presupuesto de Egresos por Capítulo de Gasto</th>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Sep_2018_3er_trim/presupuestaria/3er.Trim.18 Estado del Ejerc. del Presup.de Egresos por Cap.de Gasto.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Dec_2018_4to_trim/presupuestaria/4to.Trim.18 Estado del Ejerc. del Presup. de Egresos por Capítulo de Gasto.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
					                    </tr>
					                    <tr>
					                        <th scope="row" style="text-align: left; " valign="top">3</th>
					                        <th scope="row" style="text-align: left; ">&nbsp;Estado Analítico del Ejercicio del Presupuesto de Egresos (Clasificación Económica)</th>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Sep_2018_3er_trim/presupuestaria/3er.Trim.18 Estado Analítico del Ejerc. del Presup.de Egresos.Clasificación Económica.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Dec_2018_4to_trim/presupuestaria/4to.Trim.18 Estado Analítico del Ejerc. del Presup.de Egresos.Clasificación Económica..pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
					                    </tr>
					                    <tr>
					                        <th style="text-align: left; " valign="top">4</th>
					                        <th style="text-align: left; ">&nbsp;Estado Analítico del Ejercicio del Presupuesto de Egresos (Clasificación Administrativa)</th>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Sep_2018_3er_trim/presupuestaria/3er.Trim.18 Estado Analítico del Ejerc. del Presup.de Egresos.Clasificación Administrativa.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Dec_2018_4to_trim/presupuestaria/4to.Trim.18 Estado Analítico del Ejerc. del Presup.de Egresos.Clasificación Administrativa.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
					                    </tr>
					                    <tr>
					                        <th scope="row" style="text-align: left; " valign="top">5</th>
					                        <th scope="row" style="text-align: left; ">&nbsp;Estado Analítico del Ejercicio del Presupuesto de Egresos (Por objeto del Gasto)</th>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Sep_2018_3er_trim/presupuestaria/3er.Trim.18 Estado Analítico del Ejerc. del Presup.de Egresos.Objeto del Gasto.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Dec_2018_4to_trim/presupuestaria/4to.Trim.18 Estado Analítico del Ejerc. del Presup.de Egresos.Objeto del Gasto.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
					                    </tr>
					                    <tr>
					                        <th scope="row" style="text-align: left; " valign="top">6</th>
					                        <th scope="row" style="text-align: left; ">&nbsp;Estado Analítico del Ejercicio del Presupuesto de Egresos (Clasificación Funcional)</th>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Sep_2018_3er_trim/presupuestaria/3er.Trim.18 Estado Analítico del Ejerc. del Presup.de Egresos.Clasificación Funcional.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Dec_2018_4to_trim/presupuestaria/4to.Trim.18 Estado Analítico del Ejerc. del Presup.de Egresos.Clasificación Funcional.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
					                    </tr>
					                    <tr>
					                        <th scope="row" style="text-align: left; " valign="top">7</th>
					                        <th scope="row" style="text-align: left; ">&nbsp;Gasto por Categoría Programática</th>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Sep_2018_3er_trim/presupuestaria/3er.Trim.18 Gasto por categoría programática..pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Dec_2018_4to_trim/presupuestaria/4to.Trim.18 Gasto por categoría programática.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
					                    </tr>
									</tbody>
								</table>
					      </div>
					      <div class="modal-footer">
					        	<button type="button" class="btn bg-blue_1" data-dismiss="modal">Cerrar</button>
					      </div>
					    </div>
					  </div>
			</div>
			<!-- End btn informacion presupuestaria -->
			<!--  --------------- 3 btn Informacion Financiera  ---------------  -->
			<div class="col-xl-2 col-lg-10 col-md-9 col-sm-9 btn-icon-lg flex justify-content-center bg-blue_1" data-toggle="modal" data-target="#financiera_2018">
				<a class="link-icon-lg a-btn" href="#">Información <br>Disciplina Financiera</a>
				<span class="span-icon-lg icon-coin-dollar"></span>
			</div>
			<!-- modal btn Informacion Financiera -->
			<div class="modal fade" id="financiera_2018" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
					  <div class="modal-dialog" role="document">
						    <div class="modal-content">
							      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLongTitle">Información Disciplina Financiera</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
							      </div>
							      <div class="modal-body flex">
							       		<table class="table table-bordetable-light table-hover">
											<tbody>
												<tr>
													<th scope="col" style="text-align: left; " valign="top">Número</th>
													<th scope="col" style="text-align: left; ">&nbsp;Información</th>
													<td scope="col"  style="text-align: center; vertical-align: middle;">1ER</td>
													<td scope="col"  style="text-align: center; vertical-align: middle;">2DO</td>
													<td scope="col"  style="text-align: center; vertical-align: middle;">3ER</td>
													<td scope="col"  style="text-align: center; vertical-align: middle;">4TO</td>
												</tr>
												<tr>
							                        <th scope="row" style="text-align: left; " valign="top">1</th>
							                        <th scope="row" style="text-align: left; ">&nbsp;Estado de Situación Financiera Detallado LDF</th>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Sep_2018_3er_trim/financiera/3er.Trim.18 Estado de situación financiera detallado-LDF.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Dec_2018_4to_trim/financiera/4to.Trim.18 Estado de situación financiera detallado LDF.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
							                    </tr>
							                    <tr>
							                        <th scope="row" style="text-align: left; " valign="top">2</th>
							                        <th scope="row" style="text-align: left; ">&nbsp;Informe Analítico de la Deuda Pública y Otros Pasivos LDF</th>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Sep_2018_3er_trim/financiera/3er.Trim.18 Informe Analítico de la Deuda Pública y otro pasivos-LDF..pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Dec_2018_4to_trim/financiera/4to.Trim.18 Informe Analítico de la Deuda Pública y otro pasivos LDF.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
							                    </tr>
							                    <tr>
							                        <th scope="row" style="text-align: left; " valign="top">3</th>
							                        <th scope="row" style="text-align: left; ">&nbsp;Informe Analítico de Obligaciones Diferentes de Financiamientos LDF</th>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Sep_2018_3er_trim/financiera/3er.Trim.18 Informe Analítico de Obligac. Diferentes de Financ.LDF.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Dec_2018_4to_trim/financiera/4to.Trim.18 Informe Analítico de Obligaciones Diferentes de Financiamientos LDF.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
							                    </tr>
							                    <tr>
							                        <th scope="row" style="text-align: left; " valign="top">4</th>
							                        <th scope="row" style="text-align: left; ">&nbsp;Balance Presupuestario LDF</th>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Sep_2018_3er_trim/financiera/3er.Trim.18 Balance Presupuestario-LDF.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Dec_2018_4to_trim/financiera/4to.Trim.18 Balance Presupuestario-LDF.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
							                    </tr>
							                    <tr>
							                        <th scope="row" style="text-align: left; " valign="top">5</th>
							                        <th scope="row" style="text-align: left; ">&nbsp;Estado Analítico de Ingresos Detallados LDF</th>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Sep_2018_3er_trim/financiera/3er.Trim.18 Estado Analítico de Ingresos Detallados-LDF..pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Dec_2018_4to_trim/financiera/4to.Trim.18 Estado Analítico de Ingresos Detallados-LDF.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
							                    </tr>
							                    <tr>
							                        <th scope="row" style="text-align: left; " valign="top">6</th>
							                        <th scope="row" style="text-align: left; ">&nbsp;Estado Analítico del Ejercicio del Presupuesto de Egresos Detallado por Objeto del Gasto LDF</th>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Sep_2018_3er_trim/financiera/3er.Trim.18 Edo.Analítico del Ejerc.del Presup.de Egresos Detallado por Objeto del Gasto-LDF..pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Dec_2018_4to_trim/financiera/4to.Trim.18 Estado Analítico del Ejerc.del Presup. de Egresos Detallado por Objeto del Gasto-LDF.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
							                    </tr>
							                    <tr>
							                        <th scope="row" style="text-align: left; " valign="top">7</th>
							                        <th scope="row" style="text-align: left; ">&nbsp;Estado Analítico del Ejercicio del Presupuesto de Egresos Detallado (Clasificación Administrativa) LDF</th>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Sep_2018_3er_trim/financiera/3er.Trim.18 Edo.Analítico del Ejerc.del Presup.de Egresos Detallado.Clasificación Admva.LDF.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Dec_2018_4to_trim/financiera/4to.Trim.18 Estado Analítico del Ejerc.del Presup. de Egresos Detallado.Clasificación Admva-LDF.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
							                    </tr>
							                    <tr>
							                        <th scope="row" style="text-align: left; " valign="top">8</th>
							                        <th scope="row" style="text-align: left; ">&nbsp;Estado Analítico del Ejercicio del Presupuesto de Egresos Detallado (Clasificación Funcional) LDF</th>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Sep_2018_3er_trim/financiera/3er.Trim.18 Edo.Analítico del Ejerc.del Presup. de Egresos Detallado.Clasificación Funcional LDF.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Dec_2018_4to_trim/financiera/4to.Trim.18 Estado Analítico del Ejerc.del Presup. de Egresos Detallado.Clasificación Funcional-LDF.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
							                    </tr>
							                     <tr>
							                        <th scope="row" style="text-align: left; " valign="top">9</th>
							                        <th scope="row" style="text-align: left; ">&nbsp;Estado Analítico del Ejercicio del Presupuesto de Egresos Detallado (Clasificación Servicios Personales) LDF</th>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Sep_2018_3er_trim/financiera/3er.Trim.18 Estado Analítico del Ejercicio del Presupuesto de Egresos Detallado (Clasificación Servicios Personales) LDF.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/Dec_2018_4to_trim/financiera/4to.Trim.18 Edo. Analítico del Ejerc. del Presup. de Egresos Detallado.Clasificación de Servicios Personales LDF.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
							                    </tr>
											</tbody>
										</table>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn bg-blue_1" data-dismiss="modal">Cerrar</button>
							      </div>
						    </div>
					  </div>
			</div>
			<!-- End btn Informacion Financiera -->
			<!--  --------------- 3 btn Informacion Financiera  ---------------  -->
			<div class="col-xl-2 col-lg-10 col-md-9 col-sm-9 btn-icon-lg flex justify-content-center bg-blue_1" data-toggle="modal" data-target="#integrado_2018">
				<a class="link-icon-lg a-btn" href="#">Documento <br>Integrado</a>
				<span class="span-icon-lg icon-files-empty"></span>
			</div>
			<!-- modal btn Informacion Financiera -->
			<div class="modal fade" id="integrado_2018" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
					  <div class="modal-dialog" role="document">
						    <div class="modal-content">
							      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLongTitle">Documento Integrado</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
							      </div>
							      <div class="modal-body flex">
							       		<table class="table table-bordetable-light table-hover">
											<tbody>
												<tr>
													<th scope="col" style="text-align: left; " valign="top">Número</th>
													<th scope="col" style="text-align: left; ">&nbsp;Información</th>
													<td scope="col"  style="text-align: center; vertical-align: middle;">1ER</td>
													<td scope="col"  style="text-align: center; vertical-align: middle;">2DO</td>
													<td scope="col"  style="text-align: center; vertical-align: middle;">3ER</td>
													<td scope="col"  style="text-align: center; vertical-align: middle;">4TO</td>
												</tr>
												<tr>
							                        <th scope="row" style="text-align: left; " valign="top">1</th>
							                        <th scope="row" style="text-align: left; ">&nbsp;Documento Integrado 2018</th>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable "></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable "></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/doc_int_2018/Documento Integrado 3trim. 2018.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/doc_int_2018/TOMO VI 60 SESEAY para enviar.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
							                    </tr>
							                    <tr>
							                        <th scope="row" style="text-align: left; " valign="top">2</th>
							                        <th scope="row" style="text-align: left; ">&nbsp;Inventario de Bienes Informáticos 2018</th>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable "></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable "></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable "></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/doc_int_2018/Inventario de Bienes Informáticos 2018.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
							                    </tr>
							                    <tr>
							                        <th scope="row" style="text-align: left; " valign="top">3</th>
							                        <th scope="row" style="text-align: left; ">&nbsp;Inventario de Bienes Muebles 2018</th>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable "></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable "></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"><span class="disable "></span></a></td>
							                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/doc_int_2018/Inventario de Bienes Muebles 2018.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
							                    </tr>
											</tbody>
										</table>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn bg-blue_1" data-dismiss="modal">Cerrar</button>
							      </div>
						    </div>
					  </div>
				</div>
			<!-- End btn Informacion Financiera -->
		</div>
	</section>
	<section class="w-100 d-flex justify-content-center mt-5 mb-5">
		<!--  --------------- 2019 ---------------  -->
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-10 center">
			<div class="w-100 center">
				<h2 class="sub-title text-blue_1 p-2">Información 2019</h2>
			</div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-11 col-xs-11 mb-5 center">
				<!--  --------------- 1 btn informacion contable ---------------  -->
				<div class="w-90 btn-icon-lg flex justify-content-center bg-blue_1" data-toggle="modal" data-target="#contable_2019">
					<a class="link-icon-lg a-btn" href="#">Información <br> Financiera y <br>Presupuestal</a>
					<span class="span-icon-lg icon-calculator"></span>
				</div>
				<!-- modal btn one -->
				<div class="modal fade" id="contable_2019" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLongTitle">Información Financiera y Presupuestal</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body flex">
						        <table class="table  table-hover table-light table-bordered">
									<tbody>
										<tr>
											<th scope="col" style="text-align: left; " valign="top">Número</th>
											<th scope="col" style="text-align: left; ">&nbsp;Información</th>
											<td scope="col"  style="text-align: center; vertical-align: middle;">1ER</td>
											<td scope="col"  style="text-align: center; vertical-align: middle;">2DO</td>
											<td scope="col"  style="text-align: center; vertical-align: middle;">3ER</td>
											<td scope="col"  style="text-align: center; vertical-align: middle;">4TO</td>
										</tr>
										<tr>
					                        <th scope="row" style="text-align: left; " valign="top">1</th>
					                        <th scope="row" style="text-align: left; ">&nbsp;Información Financiera y Presupuestal</th>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/doc_int_2019/1er. Trimestre 2019 Financieros y Pptal..pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/doc_int_2019/2do-Trimestre-2019-Financieros-y-Pptal.pdf" target="_blank" ><span class="disable icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/doc_int_2019/Inf. Financ. y Pptal. 3er.Trim.2019.pdf" target="_blank" ><span class="disable icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/doc_int_2019/SESEAY INF. FINANC. Y PPTAL. 4TO.TRIM. 2019.pdf" target="_blank" ><span class="disable icon-file-pdf"></span></a></td>
					                    </tr>
					                    <tr>
					                        <th scope="row" style="text-align: left; " valign="top">2</th>
					                        <th scope="row" style="text-align: left; ">&nbsp;Información de Disciplina Financiera</th>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/doc_int_2019/1er. Trimestre 2019 Disciplina Financiera.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/doc_int_2019/2do-Trimestre-2019-Disciplina-Financiera.pdf" target="_blank"><span class="disable icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/doc_int_2019/Disciplina Financ. 3er.Trim.2019.pdf" target="_blank"><span class="disable icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/doc_int_2019/SESEAY DISCIPLINA FINANCIERA 4TO.TRIM.2019.pdf" target="_blank"><span class="disable icon-file-pdf"></span></a></td>
					                    </tr>
					                    <tr>
					                        <th scope="row" style="text-align: left; " valign="top">3</th>
					                        <th scope="row" style="text-align: left; ">&nbsp;Inventario de Bienes Muebles</th>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#">NA</a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/doc_int_2019/Inventario_de_Bienes_Muebles_2tr_2019.pdf" target="_blank"><span class="disable icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#">NA</a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/doc_int_2019/Inventario Bienes Muebles e Informaticos al 31.12.2019.pdf" target="_blank"><span class="disable icon-file-pdf"></span></a></td>
					                    </tr>
					                    <tr>
					                        <th scope="row" style="text-align: left; " valign="top">4</th>
					                        <th scope="row" style="text-align: left; ">&nbsp;Documento Integrado</th>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/doc_int_2019/Documento Integrado 1er.Trim.2019.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/doc_int_2019/DOCUMENTO_INTEGRADO_JUN_2019.pdf" target="_blank"><span class="disable icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/doc_int_2019/Documento integrado 3er-Trim.2019.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/doc_int_2019/SESEAY Documento integrado 4to.trim.2019.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
					                    </tr>
					                     <tr>
					                        <th scope="row" style="text-align: left; " valign="top">5</th>
					                        <th scope="row" style="text-align: left; ">&nbsp; Inventario de Bienes Informáticos 2019</th>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/doc_int_2019/Inventario de Bienes Informáticos 2019 2do semestre.pdf" target="_blank"><span class="disable icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="./download/transparency/doc_int_2019/Inventario Bienes Muebles e Informaticos al 31.12.2019.pdf" target="_blank"><span class="disable icon-file-pdf"></span></a></td>
					                    </tr>
									</tbody>
								</table>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn bg-blue_1" data-dismiss="modal">Cerrar</button>
						      </div>
						    </div>
						  </div>
				</div>
				<!-- End btn informacion contable -->
			</div>
		</div>
		<!--  --------------- 2020 ---------------  -->
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-10 center">
			<div class="w-100 center">
				<h2 class="sub-title text-blue_1 p-2">Información 2020</h2>
			</div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-11 col-xs-11 mb-5 center">
				<!--  --------------- 1 btn informacion contable ---------------  -->
				<div class="w-90 btn-icon-lg flex justify-content-center bg-blue_1" data-toggle="modal" data-target="#contable_2020">
					<a class="link-icon-lg a-btn" href="#">Información <br> Financiera y <br>Presupuestal</a>
					<span class="span-icon-lg icon-calculator"></span>
				</div>
				<!-- modal btn one -->
				<div class="modal fade" id="contable_2020" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLongTitle">Información Financiera y Presupuestal</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body flex">
						        <table class="table  table-hover table-light table-bordered">
									<tbody>
										<tr>
											<th scope="col" style="text-align: left; " valign="top">Número</th>
											<th scope="col" style="text-align: left; ">&nbsp;Información</th>
											<td scope="col"  style="text-align: center; vertical-align: middle;">1ER</td>
											<td scope="col"  style="text-align: center; vertical-align: middle;">2DO</td>
											<td scope="col"  style="text-align: center; vertical-align: middle;">3ER</td>
											<td scope="col"  style="text-align: center; vertical-align: middle;">4TO</td>
										</tr>
										<tr>
					                        <th scope="row" style="text-align: left; " valign="top">1</th>
					                        <th scope="row" style="text-align: left; ">&nbsp;Información Financiera y Presupuestal</th>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="http://www.seay.org.mx/download/transparency/doc_int_2020/SESEAY%20Documento%20%20integrado%201er.trim.2020.pdf" target="_blank"><span class="icon-file-pdf"></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" target="_blank" ><span class=""></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" target="_blank" ><span class=""></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" target="_blank" ><span class=""></span></a></td>
					                    </tr>
					                    <tr>
					                        <th scope="row" style="text-align: left; " valign="top">2</th>
					                        <th scope="row" style="text-align: left; ">&nbsp;Información de Disciplina Financiera</th>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" target="_blank"><span class=""></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" target="_blank"><span class=""></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" target="_blank"><span class=""></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" target="_blank"><span class=""></span></a></td>
					                    </tr>
					                    <tr>
					                        <th scope="row" style="text-align: left; " valign="top">3</th>
					                        <th scope="row" style="text-align: left; ">&nbsp;Inventario de Bienes Muebles</th>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" target="_blank"><span class=""></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" target="_blank"><span class=""></span></a></td>
					                    </tr>
					                    <tr>
					                        <th scope="row" style="text-align: left; " valign="top">4</th>
					                        <th scope="row" style="text-align: left; ">&nbsp;Documento Integrado</th>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" target="_blank"><span class=""></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" target="_blank"><span class=""></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" target="_blank"><span class=""></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" target="_blank"><span class=""></span></a></td>
					                    </tr>
					                     <tr>
					                        <th scope="row" style="text-align: left; " valign="top">5</th>
					                        <th scope="row" style="text-align: left; ">&nbsp; Inventario de Bienes Informáticos 2020</th>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" target="_blank"><span class=""></span></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#"></a></td>
					                        <td  style="text-align: center; vertical-align: middle;" ><a href="#" target="_blank"><span class=""></span></a></td>
					                    </tr>
									</tbody>
								</table>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn bg-blue_1" data-dismiss="modal">Cerrar</button>
						      </div>
						    </div>
						  </div>
				</div>
				<!-- End btn informacion contable -->
			</div>
		</div>
	</section>
</body>
</html>