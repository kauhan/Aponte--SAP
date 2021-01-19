<html>
    <head>  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro Usuario</title>
        <link rel="stylesheet" type="text/css" href="/css/estilo.css">
    </head>
    <body>
        <div id="main-container">
            <h1>Cadastre-se para acessar o sistema</h1>
            <form id="register-form" action="">
                <div class="half-box">
                    <label for="name">Nome Completo</label>
                    <input type="text" name="name" id="name" placeholder="Digite seu nome" data-required data-min-length="3" data-max-length="16">
                </div>
                <div class="half-box">
                    <label for="lastname">Cpf</label>
                    <input type="tel" name="Cpf" id="Cpf" placeholder="Digite seu cpf" data-required data-only-letters>
                </div>
                <div class="half-box">
                    <label for="lastname">Rua</label>
                    <input type="text" name="rua" id="rua" placeholder="Digite sua rua" data-required data-only-letters>
                </div>
                <div class="half-box">
                    <label for="lastname">Bairro</label>
                    <input type="text" name="bairro" id="bairro" placeholder="Digite seu bairro" data-required data-only-letters>
                </div>
                <div class="half-box">
                    <label for="lastname">Estado</label>
                    <input type="text" name="estado" id="estado" placeholder="Digite seu estado" data-required data-only-letters>
                </div>
                <div class="half-box">
                    <label for="lastname">Telefone</label>
                    <input type="number" name="telefone" id="telefone" placeholder="Digite seu telefone" data-required data-only-letters>
                </div>
                <div class="full-box">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
                </div>
                <div class="half-box spacing">
                    <label for="passowrd">Senha</label>
                    <input type="password" name="password" id="password" placeholder="Digite sua senha" data-password-validate data-required>
                </div>
                <div class="half-box">
                    <label for="passconfirmation">Confirmação de senha</label>
                    <input type="password" name="passconfirmation" id="passwordconfirmation" placeholder="Digite novamente sua senha" data-equal="password">
                </div>
                <div>
                    <input type="checkbox" name="agreement" id="agreement">
                    <label for="agreement" id="agreement-label">Eu li e aceito os <a href="#">termos de uso</a></label>
                </div>
                <div class="full-box">
                    <input id="btn-submit" type="submit" value="Registrar">
                </div>
            </form>
            </div>
        </div>
    </body>
</html>