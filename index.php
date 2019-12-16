<?php session_start() ?>
<?php include_once 'includes/header.inc.php' ?>    
<?php include_once 'includes/menu.inc.php' ?>

<!-- FORMULARIO DE CADASTRO -->
<div class="row container">
    <br>
    <form action="banco_de_dados/create.php" method="post" class="col s12">
        <fieldset class="formulario espacopadding">
            <legend><img src="imagens/avatar-icon.jpg" alt="[imagem]" width="100px"></legend>
            <h5 class="light center">Cadastro de Clientes</h5>

            <?php
                if(isset($_SESSION['msg'])):
                    echo $_SESSION['msg'];
                    session_unset();
                endif;
            ?>
                
            <!-- COMPO NOME -->
            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="nome" id="nome" maxlenght="40" required autofocus>
                <label for="nome">Nome do Cliente</label>
            </div>

            <!-- COMPO EMAIL -->
            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="email" name="email" id="email" maxlenght="50" required>
                <label for="email">E-mail do Cliente</label>
            </div>

            <!-- COMPO TELEFONE -->
            <div class="input-field col s12">
                <i class="material-icons prefix">phone</i>
                <input type="tel" name="telefone" id="telefone" maxlenght="15" required>
                <label for="telefone">Telefone do Cliente</label>
            </div>

            <!-- BOTÔES -->
            <div class="input-field col s12">
                <input type="submit" value="cadastrar" class="btn blue">
                <input type="submit" value="limpar" class="btn red">
            </div>

        </fieldset>
    </form>
</div>
    
<?php include_once 'includes/footer.inc.php' ?>

   