<?php
// Conex達o
include 'info.php';
require_once '../DB.php';

// Sess達o
session_start();

// Bot達o enviar
if(isset($_POST['btn-entrar'])):
    $erros = array();
    $login = mysqli_escape_string($conn, $_POST['login']);
    $senha = mysqli_escape_string($conn, $_POST['senha']);

    if(isset($_POST['lembrar-senha'])):

        setcookie('login', $login, time()+3600);
        setcookie('senha', md5($senha), time()+3600);
    endif;

    if(empty($login) or empty($senha)):
        $erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
            ?> <script type="text/javascript">
    alert("Preencha todos os campos!");
    
</script><?php
    else:
        // 105 OR 1=1 
        // 1; DROP TABLE teste

        $sql = "SELECT login FROM $tabela3 WHERE $static = '$login'";
        $resultado = mysqli_query($conn, $sql);     

        if(mysqli_num_rows($resultado) > 0):
        $senha = md5($senha);       
        $sql = "SELECT * FROM $tabela3 WHERE $static = '$login' AND senha = '$senha'";



        $resultado = mysqli_query($conn, $sql);

            if(mysqli_num_rows($resultado) == 1):
                $dados = mysqli_fetch_array($resultado);
                mysqli_close($conn);
                $_SESSION[$sessao] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                $name = '../logsite.txt';
                $StartDate= date('Y-m-d H:i');
$text = "$StartDate - Usuario: $login\n";
$file = fopen($name, 'a');
fwrite($file, $text);
fclose($file);
                    ?> <script type="text/javascript">
    alert("Logado com Sucesso!");
        window.location.href='index.php';
    
</script><?php
            else:
                ?> <script type="text/javascript">
    alert("Usuario ou Senha Incorretos!");
    
</script><?php
            endif;

        else:
            ?> <script type="text/javascript">
    alert("Usuario não existe no banco de dados!");
    
</script><?php
        endif;

    endif;

endif;
?>

<html>
  <head>
    <title>Login - Vendedores</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../style2.css">
<!--===============================================================================================-->
<style>
    .button {
        
        border-color: transparent;
        background-color: transparent;
       position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: #03e9f4;
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    margin-top: 40px;
    letter-spacing: 4px
    }
    
     .button:hover {
    background: #03e9f4;
    color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px #03e9f4,
                0 0 25px #03e9f4,
                0 0 50px #03e9f4,
                0 0 100px #03e9f4;
  }
  
  .button span {
    position: absolute;
    display: block;
  }
  
  .button span:nth-child(1) {
    top: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #03e9f4);
    animation: btn-anim1 1s linear infinite;
  }
  
  @keyframes btn-anim1 {
    0% {
      left: -100%;
    }
    50%,100% {
      left: 100%;
    }
  }
  
  .button span:nth-child(2) {
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, #03e9f4);
    animation: btn-anim2 1s linear infinite;
    animation-delay: .25s
  }
  
  @keyframes btn-anim2 {
    0% {
      top: -100%;
    }
    50%,100% {
      top: 100%;
    }
  }
  
  .button span:nth-child(3) {
    bottom: 0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent, #03e9f4);
    animation: btn-anim3 1s linear infinite;
    animation-delay: .5s
  }
  
  @keyframes btn-anim3 {
    0% {
      right: -100%;
    }
    50%,100% {
      right: 100%;
    }
  }
  
  .button span:nth-child(4) {
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg, transparent, #03e9f4);
    animation: btn-anim4 1s linear infinite;
    animation-delay: .75s
  }
  
  @keyframes btn-anim4 {
    0% {
      bottom: -100%;
    }
    50%,100% {
      bottom: 100%;
    }
  }
    
</style>
    <body>
<div class="login-box">
    <h2>Login - Vendedores</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <div class="user-box">
        <input type="text" name="login" placeholder="Usuario" value="<?php echo isset($_COOKIE['login']) ? $_COOKIE['login'] : '' ?>">
        <label></label>
      </div>
      <div class="user-box">
        <input type="password" name="senha" placeholder="Senha" value="<?php echo isset($_COOKIE['senha']) ? $_COOKIE['senha'] : '' ?>" >
        <label></label>
    
        
    </div>
     <button class="button" type="submit" name="btn-entrar"> <span></span>
        <span></span>
        <span></span>
        <span></span> 
                            Entrar
                        </button>
    </form>
  </div> 
  </body>
  </html>
