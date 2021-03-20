<?php
require "valid_navg.php"
?>

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
				<form class="login100-form validate-form">
					<span class="login100-form-logo">
						<i><img src="imagens/logoHope.png" alt="Logo Hopw" height="110px"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Marcar consulta
					</span>

                    <h4 style="color: #F8F8FF;">Data e Hora:</h4>
					<div class="wrap-input100 validate-input" data-validate = "Coloque seu email">
						<input class="input100" type="datetime-local" name="data" placeholder="Data e Hora">
						<span class="focus-input100" data-placeholder="&#xf197;"></span>
					</div>

                    <h4 style="color: #F8F8FF;">Especialidade:</h4>
                    <div style="color: #F8F8FF;" class="wrap-input100 validate-input" data-validate="Especialidadede">
                    <input type="radio" name="especialidade" value="Cárdiologista">Cárdiologista
					</div>

                    <div style="color: #F8F8FF;" class="wrap-input100 validate-input" data-validate="Funçaõ">
                    <input type="radio" name="especialidade" value="Ortopedidta">Ortopedista
					</div>

                    <div style="color: #F8F8FF;" class="wrap-input100 validate-input" data-validate="Funçaõ">
                    <input type="radio" name="especialidade" value="Neuroista">Neurologista
					</div>

					<h4 style="color: #F8F8FF;">Plano:</h4>
                    <div style="color: #F8F8FF;" class="wrap-input100 validate-input" data-validate="Especialidadede">
                    <input type="radio" name="plano" value="Life Saúde">Life Saúde
					</div>

                    <div style="color: #F8F8FF;" class="wrap-input100 validate-input" data-validate="Funçaõ">
                    <input type="radio" name="plano" value="Real Sáude">Real Sáude
					</div>

                    <div style="color: #F8F8FF;" class="wrap-input100 validate-input" data-validate="Funçaõ">
                    <input type="radio" name="plano" value="Saúde Plues">Saúde Plues
					</div>

					
                    <div style="color: #F8F8FF;" class="wrap-input100 validate-input" data-validate="Funçaõ">
                    <input type="radio" name="plano" value="Particular">Particular
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Confirmar
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="logoff.php">
							Mudar conta
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