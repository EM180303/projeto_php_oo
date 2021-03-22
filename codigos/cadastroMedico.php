<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Hope</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="imagens/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head> 
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form action="medico.php" method="POST" class="login100-form validate-form">
					<span class="login100-form-logo">
						<i><img src="imagens/logoHope.png" alt="Logo Hopw" height="110px"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Cadastro Médico
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Informe seu CRM">
						<input class="input100" type="text" name="crm" placeholder="CRM">
						<span class="focus-input100" data-placeholder="&#xf297;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Informe seus anos de profissão">
						<input class="input100" type="number" name="anos" placeholder="Anos de profissão">
						<span class="focus-input100" data-placeholder="&#xf298;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Informe qua é a sua especialidade">
						<input class="input100" type="text" name="especialidade" placeholder="Especialidade">
						<span class="focus-input100" data-placeholder="&#xf319;"></span>
					</div>

                    <p style="color: #F8F8FF;">Registramos seus dados no nosso banco de dados. Entraremos em contato para uma possível oferta de emprego.</p>

                    <br>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Finalizar
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="cadastro.php">
							Cadastre-se
						</a>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="logoff.php">
							Deslogar
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>