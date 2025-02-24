<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="login__content">
            <div class="login__form">
                <h2 class="login__title">Cadastro <span>de Usuário</span></h2>
                <p class="login__description">Preencha os campos abaixo para criar sua conta.</p>

                <form action="#" method="POST">
                    <div class="login__inputs">
                        <div class="login__column">
                            <div>
                                <label for="nome" class="login__label">Nome Completo</label>
                                <input type="text" id="nome" class="login__input" placeholder="Digite seu nome" required>
                            </div>
                            <div>
                                <label for="email" class="login__label">E-mail</label>
                                <input type="email" id="email" class="login__input" placeholder="Digite seu e-mail" required>
                            </div>
                        </div>
                        <div class="login__column">
                            <div>
                                <label for="senha" class="login__label">Senha</label>
                                <input type="password" id="senha" class="login__input" placeholder="Digite sua senha" required>
                            </div>
                            <div>
                                <label for="confirmar_senha" class="login__label">Confirmar Senha</label>
                                <input type="password" id="confirmar_senha" class="login__input" placeholder="Confirme sua senha" required>
                            </div>
                        </div>
                    </div>

                    <div class="login__check">
                        <input type="checkbox" class="login__check-input" id="termos">
                        <label for="termos" class="login__check-label">Eu aceito os <a href="#">termos e condições</a></label>
                    </div>

                    <div class="login__buttons">
                        <button type="submit" class="login__button">Cadastrar</button>
                        <button type="button" class="login__button login__button-ghost">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
