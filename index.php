<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Teste Abril - Front-end</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<div class="container fixed-header navbar-fixed-top">
		<div class="row header-ad">
    		<figure class="center-block">
    	        <a href="#"><img class="img-responsive" src="assets/images/publicidade-1.png" alt=""></a>
	        </figure>
        </div>
        <div class="row">
		    <header class="main-header">
		        <h1 class="col-md-2 logo"><a href="#"><img src="assets/images/logo.png" alt=""></a></h1>
		        <ul class="col-md-1 social">
		            <li><a class="facebook" href="#"></a></li>
		            <li><a class="instagram" href="#"></a></li>
		            <li><a class="twitter" href="#"></a></li>
		            <li><a class="logo-abril" href="#"></a></li>
		        </ul>
		        <div class="col-md-8">
			        <nav class="main-menu">
			            <ul>
			                <li class="tree-menu" data-child="carros"><a href="#">Carros</a></li>
			                <li class="tree-menu" data-child="testes"><a href="#">Testes</a></li>
			                <li><a href="#">Notícias</a></li>
			                <li><a href="#">Auto-serviço</a></li>
			                <li><a href="#">Guia de compras</a></li>
			                <li><a href="#">Tabela Fipe</a></li>
			                <li><a href="#">Assine</a></li>
			            </ul>
			        </nav>
			        <form class="col-md-2" action="#">
			        	<div class="inner-addon left-addon">
				            <input type="text" name="s" placeholder="PESQUISAR">
				            <i class="glyphicon glyphicon-search"></i>
				        </div>
			            <input type="submit" value="">
			        </form>
			    </div>
			</header>
		</div>
		<div class="row popular-wrapper">
				<div class="col-md-2 popular-label">
					+ ACESSADOS
				</div>
		        <nav class="col-md-10 popular">
		            <ul>
		                <li><a href="#">Salão do Automóvel</a></li>
		                <li><a href="#">Renegade</a></li>
		                <li><a href="#">Novo Sandero</a></li>
		                <li><a href="#">Novo Fox</a></li>
		                <li><a href="#">Novo KA</a></li>
		                <li><a href="#">HB 20</a></li>
		                <li><a href="#">Duster</a></li>
		                <li><a href="#">Golf</a></li>
		                <li><a href="#">Corolla</a></li>
		                <li><a href="#">Civic</a></li>
		                <li><a href="#">| A-Z |</a></li>
		            </ul>
		        </nav>
		    </header>
		</div>
		<div class="row child-menu">
	        <ul>
	            <li>
	                <nav class="submenu category-list" data-id="carros">
	                	<div class="row">
		                    <ul class="col-md-2">
		                        <li class="is_active"><a href="#">Modelos de A a Z</a></li>
		                    </ul>
		                    <div class="col-md-10">
		                        <ul>
		                            <li><a href="#">Audi</a></li>
		                            <li><a href="#">Bentley</a></li>
		                            <li><a href="#">BMW</a></li>
		                            <li><a href="#">Chevrolet</a></li>
		                            <li><a href="#">Chryslet</a></li>
		                            <li><a href="#">Chevrolet</a></li>
		                            <li><a href="#">Dodge</a></li>
		                            <li><a href="#">Ferrari</a></li>
		                            <li><a href="#">Fiat</a></li>
		                            <li><a href="#">Ford</a></li>
		                            <li><a href="#">Honda</a></li>
		                            <li><a href="#">Hyundai</a></li>
		                            <li><a href="#">JAC Motos</a></li>
		                            <li><a href="#">Jaguard</a></li>
		                            <li><a href="#">Jeep</a></li>
		                            <li><a href="#">Kia</a></li>
		                            <li><a href="#">Lamborghini</a></li>
		                            <li><a href="#">Mercedes-Benz</a></li>
		                            <li><a href="#">Mitsubishi</a></li>
		                            <li><a href="#">Volkswagen</a></li>
		                        </ul>
		                    </div>
		                </div>
	                </nav>
	            </li>
	            <li>
	                <nav class="submenu" data-id="testes">
	                	<div class="row">
		                    <ul class="col-md-2">
		                        <li class="is_active"><a href="#">Ver tudo de testes</a></li>
		                        <li><a href="#">Comparativos</a></li>
		                        <li><a href="#">Impressões</a></li>
		                        <li><a href="#">Longa duração</a></li>
		                        <li><a href="#">Teste de Pista</a></li>
		                    </ul>
		                    <div class="col-md-10 center-block">
		                        <div class="row">
		                            <div class="col-md-3">
		                                <a href="#">
		                                	<img src="assets/images/teste-1.jpg" alt="" width="230">
		                                    <h4>Ford Focus Fastback Titanium Plus</h5>
		                                </a>
		                            </div>
		                            <div class="col-md-3">
		                                <a href="#">
		                                	<img src="assets/images/teste-2.jpg" alt="" width="230">
		                                    <h4>Audi A6 2.0 TFSI</h5>
		                                </a>
		                            </div>
		                            <div class="col-md-3">
		                                <a href="#">
		                                	<img src="assets/images/teste-3.jpg" alt="" width="230">
		                                    <h4>Audi Q3 1.4</h5>
		                                </a>
		                            </div>
		                            <div class="col-md-3">
		                                <a href="#">
		                                	<img src="assets/images/teste-4.jpg" alt="" width="230">
		                                    <h4>BMW 420i Cabriolet</h5>
		                                </a>
		                            </div>
		                        </div>
		                    </div>
	                    </div>
	                </nav>
	            </li>
	        </ul>
	    </div>
	</div>

    <div class="container">

		<div class="row">
		    <div class="col-md-6 mosaic">
	            <figure>
			        <a href="#"><img class="img-responsive" src="assets/images/destaque-1.jpg" alt=""></a>
		        </figure>
		    </div>
		    <div class="col-md-6">
		        <div class="row">
		            <div class="col-md-6 mosaic">
		            	<figure>
			                <a href="#"><img class="img-responsive" src="assets/images/destaque-2.jpg" alt=""></a>
						</figure>
		            </div>
		            <div class="col-md-6 mosaic">
	                	<figure>
			                <a href="#"><img class="img-responsive" src="assets/images/publicidade-2.png" alt=""></a>
		                </figure>
		            </div>
		        </div>
		        <div class="row">
		            <div class="col-md-6 mosaic">
	                	<figure>
			                <a href="#"><img class="img-responsive" src="assets/images/destaque-3.jpg" alt=""></a>
		                </figure>
		            </div>
		            <div class="col-md-6 mosaic">
	                	<figure>
			                <a href="#"><img class="img-responsive" src="assets/images/destaque-4.jpg" alt=""></a>
		                </figure>
		            </div>
		        </div>
		    </div>
		</div>

        <hr>

        <div class="row">

            <div class="col-md-3 col-sm-6 feature">
                <div class="thumbnail">
                	<figure>
	                    <a href="#"><img class="img-responsive" src="assets/images/destaque-5.jpg" alt=""></a>
                    </figure>
                    <div class="caption">
                        <h4><a href="#">Audi S3 X Mercedes-Benz CLA 45 AMG</a></h4>
                        <p>Pista livre para o embate entre os dois cometas de cauda curta</p>
                    </div>
                    <div class="related">
                        <a href="#">+ Troller T4 X Jeep Renegade</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 feature">
                <div class="thumbnail">
                	<figure>
	                    <a href="#"><img class="img-responsive" src="assets/images/destaque-6.jpg" alt=""></a>
					</figure>
                    <div class="caption">
                        <h4><a href="#">Nissan GT-R</a></h4>
                        <p>Pilotamos o Godzilla, o monstro recordista de Nürburgring que assombra os alemães</p>
                    </div>
                    <div class="related">
                        <a href="#">+ Troller T4 X Jeep Renegade</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 feature">
                <div class="thumbnail">
                	<figure>
	                    <a href="#"><img class="img-responsive" src="assets/images/destaque-7.jpg" alt=""></a>
                    </figure>
                    <div class="caption">
                        <h4><a href="#">BMW Série 2 Active Tourer</a></h4>
                        <p>Pista livre para o embate entre os dois cometas de cauda curta</p>
                    </div>
                    <div class="related">
                        <a href="#">+ Troller T4 X Jeep Renegade</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 feature">
                <div class="thumbnail">
                	<figure>
	                    <a href="#"><img class="img-responsive" src="assets/images/destaque-8.jpg" alt=""></a>
                    </figure>
                    <div class="caption">
                        <h4><a href="#">Chevrolet mostra nova geração do Malibu</a></h4>
                        <p>Sedã perdeu 136 kg e ampliou o espaço entre-eixos</p>
                    </div>
                    <div class="related">
                        <a href="#">+ Troller T4 X Jeep Renegade</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- jQuery -->
    <script src="assets/js/vendor/jquery.js"></script>

    <!-- Custom JavaScript -->
    <script src="assets/js/main.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>