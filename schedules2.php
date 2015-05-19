<!DOCTYPE html>
<!--[if lt IE 7]>   <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>      <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>      <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"> <!--<![endif]-->
	<head>
		<?php include dirname(__FILE__) . '/blocks/shared/head.php' ?><!-- ./head -->
	</head>
	<body>
		<?php include dirname(__FILE__) . '/blocks/shared/header.php' ?><!-- ./header -->
		<section id="main">
			<div class="wrapper">
				<div class="container">
					<div class="row">
						<section id="mainbody" class="col-xs-12 col-md-8">
							<div class="page-header">
								<h2>Watch Live</h2>
							</div>
							<?php include dirname(__FILE__) . '/blocks/modules/player.php' ?><!-- ./showcase -->
							<div class="row">
								<div class="col-xs-12 col-sm-9">
									<div class="panel live-links">
										<div class="panel-body">
											<div class="items-filter">
												<ul class="list-inline list-unstyled">
													<li class="active"><a href="#">Flash Stream</a></li>
													<li><a href="#">Windows Media Stream</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-3">
									<div class="panel share">
										<div class="panel-body pull-right">
											<ul class="list-unstyled list-inline">
												<li><a href="#"><i class="icon-facebook"></i></a></li>
												<li><a href="#"><i class="icon-twitter"></i></a></li>
												<li><a href="#"><i class="icon-gplus"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="panel schedules schedules-condensed">
								<div class="panel-body">
									<table class="table table-responsive">
										<tbody>
											<tr>
												<td class="time col-xs-1">
													<span>14:30</span>
												</td>
												<td class="program col-xs-11">
													<div class="inner">
														<h3>HispanTV Noticias</h3>
														<p>Noticias actualizadas durante las 24 horas del día. La versión real de lo que ocurre en todo el mundo. </p>
													</div>
												</td>
											</tr>
											<tr>
												<td class="time col-xs-1">
													<span>14:30</span>
												</td>
												<td class="program col-xs-11">
													<div class="inner">
														<h3>Epílogo: Gobernar para la sostenibi</h3>
														<p>Foruzande, el dueño de una fábrica de alfombras, se encuentra atrapado en el cabo suelto del pasado de su única y amada hija, mientras todo se complica debido a la traición de uno de sus empleados... </p>
													</div>
												</td>
											</tr>
											<tr class="active">
												<td class="time col-xs-1">
													<span>14:30</span>
												</td>
												<td class="program col-xs-11">
													<div class="inner">
														<h3>HispanTV Noticias Exprés</h3>
														<p>Noticias actualizadas durante las 24 horas del día. La versión real de lo que ocurre en todo el mundo. </p>
													</div>
												</td>
											</tr>
											<tr>
												<td class="time col-xs-1">
													<span>14:30</span>
												</td>
												<td class="program col-xs-11">
													<div class="inner">
														<h3>Detrás de la Razón: Diálogos nuclea</h3>
														<p>En casi 3 minutos repasamos las noticias más destacadas de última hora en formato breve</p>
													</div>
												</td>
											</tr>
											<tr>
												<td class="time col-xs-1">
													<span>14:30</span>
												</td>
												<td class="program col-xs-11">
													<div class="inner">
														<h3>Guayoyo: El movimiento estudiantil</h3>
														<p>Noticias actualizadas durante las 24 horas del día. La versión real de lo que ocurre en todo el mundo.</p>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="panel-footer">
									<div class="more text-center has-line">
										<a class="btn black" href="#">More</a>
									</div>
								</div>
							</div>
						</section>
						<aside id="sidebar" class="col-xs-12 col-md-4">
							<?php include dirname(__FILE__) . '/blocks/modules/sidebar/latest.php' ?><!-- ./latest -->
							<?php include dirname(__FILE__) . '/blocks/modules/sidebar/bulletin.php' ?><!-- ./bulletin -->
							<?php include dirname(__FILE__) . '/blocks/modules/sidebar/sharings.php' ?><!-- ./sharings -->
							<?php include dirname(__FILE__) . '/blocks/modules/sidebar/most-viewed.php' ?><!-- ./most-viewed -->
							<?php include dirname(__FILE__) . '/blocks/modules/sidebar/apps.php' ?><!-- ./apps -->
						</aside>
					</div>
				</div>
			</div>
		</section>
		<?php include dirname(__FILE__) . '/blocks/shared/footer.php' ?><!-- ./footer -->
	</body>
</html>
