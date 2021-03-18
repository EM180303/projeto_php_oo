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

<script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);

        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form action="cadastrar.php" method="POST" class="login100-form validate-form">
					<span class="login100-form-logo">
						<i><img src="imagens/logoHope.png" alt="Logo Hopw" height="110px"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Cadastro
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Coloque seu nome e sobrenome">
						<input class="input100" type="text" name="name" placeholder="Nome e sobre nome">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Coloque seu email">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf291;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Coloque sua senha">
						<span class="btn-show-pass">
							<i class="fa fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" placeholder="Senha">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Coloque seu número de telefone">
						<input class="input100" type="text" name="telefone" placeholder="Telefone">
						<span class="focus-input100" data-placeholder="&#xf291;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Coloque sua data de nascimento">
						<input class="input100" type="date" name="nascimento" placeholder="Nascimento">
						<span class="focus-input100" data-placeholder="&#xf245;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Coloque seu CEP">
						<input class="input100" type="text" id="cep" value="" name="cep" placeholder="CEP" onblur="pesquisacep(this.value);">
						<span class="focus-input100"data-placeholder="&#xf196;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Coloque sua rua">
						<input class="input100" type="text" id="rua"  name="rua" placeholder="Rua">
						<span class="focus-input100"data-placeholder="&#xf196;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Coloque seu bairro">
						<input class="input100" type="text" id="bairro" name="bairro" placeholder="Bairro">
						<span class="focus-input100"data-placeholder="&#xf196;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Coloque sua cidade">
						<input class="input100" type="text" id="cidade" name="cidade" placeholder="Cidade">
						<span class="focus-input100"data-placeholder="&#xf196;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Coloque seu estado">
						<input class="input100" type="text" id="uf" name="uf" placeholder="Estado">
						<span class="focus-input100"data-placeholder="&#xf196;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Coloque o número da sua residência">
						<input class="input100" type="text" name="numeroresi" placeholder="Número Residência">
						<span class="focus-input100"data-placeholder="&#xf196;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Coloque a seu complemento">
						<input class="input100" type="text" name="complemento" placeholder="Complemento">
						<span class="focus-input100"data-placeholder="&#xf196;"></span>
					</div>
					
					<h4 style="color: #F8F8FF;">Função:</h4>
                    <div style="color: #F8F8FF;" class="wrap-input100 validate-input" data-validate="Funçaõ">
                    <input type="radio" name="função" value="Cliente">Cliente
					</div>

					<div style="color: #F8F8FF;" class="wrap-input100 validate-input" data-validate="Funçaõ">
                    <input type="radio" name="função" value="Médico">Médico
					</div>

					<div style="color: #F8F8FF;" class="wrap-input100 validate-input" data-validate="Funçaõ">
                    <input type="radio" name="função" value="Recepção">Recepção
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Lembre de mim
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Cadastrar
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="index.php">
							Já possi um cadastro? Então faça login
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