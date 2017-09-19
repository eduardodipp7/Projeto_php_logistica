<!doctype html>
<html dir="ltr" lang="pt-BR">
<head>
<meta charset="utf-8">
<title>Dexter Courier | Cadastre-se</title>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,700'
	rel='stylesheet' type='text/css'>
<link
	href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700'
	rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header class="header">
        <?php
				#topo
				require('template/topo.php');
				?>
    </header>

	<div class="container content">
		<div class="title center">
			<h1>Cadastre-se</h1>
		</div>

		<div class="banner-fixed">
			<img src="img/banner-cadastro.jpg" alt="Banner Sobre">
		</div>

		<?php
		if($_POST){
			foreach($_POST as $campo){
				if(empty($campo)){
					$check = FALSE;
				}else{
					$check = TRUE;
				}
			}
			if($check){
				echo "<div class = 'alert alert - sucess'>
				     <button type= 'button' class='close' data - dismiss = 'alert' aria - hidden = 'true'>
						 & times;
						 </button>
						 Formulario enviado com sucesso!
						 </div>";
			}else{
				echo "<div class = 'alert alert - danger alert - dismissable'>
						 <button type= 'button' class='close' data - dismiss = 'alert' aria - hidden = 'true'>
						 & times;
						 </button>
						 Erro: Todos os campos devem ser preenchidos
						 </div>";
			}
		}
		 ?>

		<form action="" method="post" class="form">
			<p>
				<label for="nome">Nome/Razao</label> <input type="text" name="nome" value="<?php echo $_POST['nome']?>"
					id="nome_razao" >
			</p>
			<p>
				<label for="email">Email</label> <input type="email" name="email"
					id="email" value="<?php echo $_POST['email']?>" >
			</p>
			<p>
				<label for="tel">Telefone</label> <input type="tel" name="telefone"
					id="telefone" value="<?php echo $_POST['telefone']?>">
			</p>
			<p>
				<label for="cel">Celular</label> <input type="tel" name="celular"
					id="celular"  value="<?php echo $_POST['celular']?>">
			</p>
			<p>
				<label for="cep">Cep</label> <input type="tel" name="cep" id="cep"
					 value="<?php echo $_POST['cep']?>">
			</p>
			<p>
				<label for="endereco">Endereço</label> <input type="tel"
					name="end" id="end" value="<?php echo $_POST['end']?>" >
			</p>
			<p>
				<label for="bairro">Bairro</label> <input type="tel" name="bairro"
					id="bairro" value="<?php echo $_POST['bairro']?>" >
			</p>
			<p>
				<label for="cidade">Cidade</label> <input type="tel" name="cidade"
					id="cidade" value="<?php echo $_POST['cidade']?>">
			</p>
			<p>
				<label for="Estado">Estado</label>
				 <select name="estado" id="estado">
					<option value="">Selecione</option>
					<option value="AC">AC</option>
					<option value="AL">AL</option>
					<option value="AP">AP</option>
					<option value="AM">AM</option>
					<option value="BA">BA</option>
					<option value="CE">CE</option>
					<option value="DF">DF</option>
					<option value="ES">ES</option>
					<option value="GO">GO</option>
					<option value="MA">MA</option>
					<option value="MT">MT</option>
					<option value="MS">MS</option>
					<option value="MG">MG</option>
					<option value="PA">PA</option>
					<option value="PB">PB</option>
					<option value="PR">PR</option>
					<option value="PE">PE</option>
					<option value="PI">PI</option>
					<option value="RJ">RJ</option>
					<option value="RN">RN</option>
					<option value="RS">RS</option>
					<option value="RO">RO</option>
					<option value="RR">RR</option>
					<option value="SC">SC</option>
					<option value="SP">SP</option>
					<option value="SE">SE</option>
					<option value="TO">TO</option>
				</select>
			</p>
			<p>
				<button class="btn">Enviar</button>
			</p>
		</form>
	</div>

	<footer class="footer">
        <?php
				#rodape
				require('template/rodape.php');
				 ?>
    </footer>

</body>

</html>
