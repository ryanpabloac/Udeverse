<?php
    require __DIR__ . '/../../extra/errors.php'; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Udeverse | Conecte-se</title>
    <link rel="stylesheet" href="./../../assets/css/acount.css">
</head>
<body>
    <div id="container">
        <div class="box">
            <div id="logo"> < U<span>dev</span>erse /> </div>
            <span id="slogan">Conecte-se, explore, compartilhe.</span>
        </div>
        <div class="box form-area">
            <h2>Entre em sua conta</h2>
            <form action="./../../controllers/acountController.php?type=auth" method="POST">
                <div class="field">
                    <label for="email">EMAIL</label>
                    <input type="email" name="email" id="email" placeholder="usuario@email.com" required maxlength="256">
                </div>
                <div class="field">
                    <label for="password">SENHA</label>
                    <input type="password" name="password" id="password" placeholder="********" required minlength="8" maxlength="30">
                </div>
                <div class="field buttons">
                    <button type="submit">Entrar</button>

                    <?php if (isset($_GET['msg'])):?>
                        <div id="error">
                            <img src="./../../assets/svg/info-icon.svg">
                            <span> <?= $errors[$_GET['msg']]?> </span>
                        </div>
                    <?php endif; ?>

                    <span>Novo usuário? <a href="./create.php">Cadastre-se!</a></span>
                </div>
            </form>
        </div>
    </div>
</body>
</html>