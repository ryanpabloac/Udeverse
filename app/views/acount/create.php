<?php
    require __DIR__ . '/../../extra/errors.php';
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Udeverse | Cadastre-se</title>
    <link rel="stylesheet" href="./../../assets/css/acount.css">
    <link rel="shortcut icon" href="./../../assets/imgs/logo.png" type="image/x-png">
</head>
<body>
    <div id="container">
        <div class="box">
            <div id="logo"> < U<span>dev</span>erse /> </div>
            <span id="slogan">Junte-se, descubra, transforme.</span>
        </div>
        <div class="box form-area">
            <h2>Cadastro de Usuário</h2>
            <form action="./../../controllers/acountController.php?type=subscription" method="POST">
                <div class="field">
                    <label for="username">NOME DE USUÁRIO</label>
                    <input type="text" name="username" id="username" placeholder="usuario" required maxlength="40">
                </div>
                <div class="field">
                    <label for="email">EMAIL</label>
                    <input type="email" name="email" id="email" placeholder="usuario@email.com" required maxlength="256">
                </div>
                <div class="field">
                    <label for="password">SENHA</label>
                    <input type="password" name="password" id="password" placeholder="********" required maxlength="30">
                </div>
                <div class="field">
                    <label for="confirm-password">CONFIRMAÇÃO DE SENHA</label>
                    <input type="password" name="confirm-password" id="confirm-password" placeholder="********" required minlength="8" maxlength="30">
                </div>
                <div class="field buttons">
                    <button type="submit">Cadastrar</button>

                    <?php if (isset($_GET['error'])):?>
                        <div id="error">
                            <img src="./../../assets/svg/info-icon.svg">
                            <span> <?= $errors[$_GET['error']]?> </span>
                        </div>
                    <?php endif; ?>

                    <span>Já cadastrado? <a href="./login.php">Faça Login!</a></span>
                </div>
            </form>
        </div>
    </div>
</body>
</html>