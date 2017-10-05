    <header class="header">
           <?php
           #topo
           require('topo.php'); 
           ?>
    </header>
    <div class="container">
    <div class="row">
    <div class="span12" style="margin-top:20px">
        <legend class="title">
            <h3>Lista de Clientes</h3>
        </legend>
        <div class="btn-toolbar">
            <a href="incluirCliente.php">
                <button class="btn btn-primary">Novo Cliente</button>
            </a>
        </div>
        <div class="well">
            <table width="100%" class="table">
                <col style="width:10%">
                <thead>
                    <tr class="bold">
                        <td>#</td>
                        <td>Nome/Razão</td>
                        <td>Cpf/CNPJ</td>
                        <td>Email</td>
                        <td>Telefone</td>
                        <td>Celular</td>
                        <td style="width: 36px;">Ações</td>
                    </tr>
                    <?php //inicio do codigo

							#inicio do laço para exibir os registros

						?>
					     <tr class="bold">
                        <!-- Exibição dos registros na tabela -->
                        <td style="width: 36px;">
			<a href="#>"><i class="icon-pencil"> </i></a>
			<a href="#"><i class="icon-remove"> </i></a>
								</td>
                    </tr>
					  <?php //fim do codigo
					    #Fim do laço
						?>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>

    </div>
</div>
</div>

</body>

</html>
