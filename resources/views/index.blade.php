<!DOCTYPE HTML>
<html lang="pt-br">
  <head>
    <title>Grupo Lions - Patrimônio Monitorado</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/login.css">

  </head>

<body>

  <div class="login-page">
    <div class="form">

      <form class="register-form">
        <input type="text" placeholder="name"/>
        <input type="password" placeholder="password"/>
        <input type="text" placeholder="email address"/>
        <button>create</button>
        <p class="message">Already registered? <a href="#">Sign In</a></p>
      </form>

      <form class="login-form" action="dashboard.php">
        <div>
            <img src="img/logo-lions2.png" width="240px">
        </div>
        <input type="text" placeholder="Nome"/>
        <input type="password" id="senha" placeholder="Senha"/>
        <span class="material-icons" onclick="mostrarsenha();" style="position: absolute;top: 200px;
        right: 60px;cursor: pointer;">remove_red_eye</span>

        <script>
        function mostrarsenha() {
          var tipo = document.getElementById("senha");
          if(tipo.type === "password") {
            tipo.type = "text";
          }
          else {
            tipo.type = "password"
          }
        }

        </script>

        
        <button>login</button>
      </form>
      
    </div>
  </div>

</body>

<html>
