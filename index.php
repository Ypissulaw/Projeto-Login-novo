<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulário de Entrar & Inscrever-se</title>
  <link rel="stylesheet" href="src/css/style.css" />
</head>

<body>
  <main>
    <div class="box">
      <div class="inner-box">
        <div class="forms-wrap">
          <form action="src/php/verificarLogin.php" method="post" autocomplete="off" class="sign-in-form">
            <div class="logo">
              <img src="src/img/logo.png" alt="easyclass" />
              <h4>easyclass</h4>
            </div>

            <div class="heading">
              <h2>Bem-vindo</h2>
              <h6>Não está registrado ainda?</h6>
              <!--Criar nova conta-->
              <a href="#" class="toggle">Sign up</a>
            </div>

            <div class="actual-form">
              <div class="input-wrap">
                <input type="email" name="username" minlength="4" class="input-field" autocomplete="off" required />
                <label>Email</label>
              </div>

              <div class="input-wrap">
                <input type="password" name="password" minlength="4" class="input-field" autocomplete="off" required />
                <label>Senha</label>
              </div>

              <input type="submit" name="action" value="login" class="sign-btn" />

              <p class="text">
                Esqueceu sua senha ou seus dados de login?
                <a href="./src/php/senha/esqueci.php">Obtenha ajuda</a> para entrar
              </p>
            </div>
          </form>

          <form method="post" action="src/php/cadastrar/verificar.php" autocomplete="off" class="sign-up-form">
            <div class="logo">
              <img src="./src/img/logo.png" alt="easyclass" />
              <h4>easyclass</h4>
            </div>

            <div class="heading">
              <h2>Comece Agora</h2>
              <h6>Já tem uma conta?</h6>
              <a href="#" class="toggle">Entrar</a>
            </div>

            <div class="actual-form">
              <div class="input-wrap">
                <input type="text" minlength="4" class="input-field" autocomplete="off" required />
                <label>Nome</label>
              </div>

              <div class="input-wrap">
                <input type="email" name="username" class="input-field" autocomplete="off" required />
                <label>Email</label>
              </div>

              <div class="input-wrap">
                <input type="password" name="password" minlength="4" class="input-field" autocomplete="off" required />
                <label>Senha</label>
              </div>

              <input type="submit" name="criar" value="Inscrever-se" class="sign-btn" />

              <p class="text">
                Ao se inscrever, concordo com os
                <a href="#">Termos de Serviço</a> e
                <a href="#">Política de Privacidade</a>
              </p>
            </div>
          </form>
        </div>

        <div class="carousel">
          <div class="images-wrapper">
            <img src="./src/img/image1.png" class="image img-1 show" alt="" />
            <img src="./src/img/image2.png" class="image img-2" alt="" />
            <img src="./src/img/image3.png" class="image img-3" alt="" />
          </div>

          <div class="text-slider">
            <div class="text-wrap">
              <div class="text-group">
                <h2>Crie seus próprios cursos</h2>
                <h2>Personalize como quiser</h2>
                <h2>Convide alunos para sua turma</h2>
              </div>
            </div>

            <div class="bullets">
              <span class="active" data-value="1"></span>
              <span data-value="2"></span>
              <span data-value="3"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Arquivo Javascript -->

  <script src="src/js/app.js"></script>
</body>

</html>