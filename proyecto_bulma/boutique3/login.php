<?php
  //require_once 'index2.php';
  require_once 'functions.php';
  require_once "header.php";
  
  $error = $user = $pass = "";

  if (isset($_POST['user']))
  {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);

    if ($user == "" || $pass == "")
      $error = 'No se ingresaron todos los campos';
    else
    {
      $result = queryMySQL("SELECT user,pass FROM members
        WHERE user='$user' AND pass='$pass'");

      if ($result->num_rows == 0)
      {
        $error= "Intento de inicio de sesión no válido";
      }
      else
      { 
        
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        


      /*$result1=queryMysql("SELECT usuario FROM members WHERE user='{$_SESSION['user']}'");
      $row = $result1->fetch_array(MYSQLI_ASSOC);
      if ($result1->num_rows > 0){
        if ($row['usuario'] == 'Administrador'){
            echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
		        echo "<script>location.href='index3.php'</script>";
        }
        else if($row['usuario'] == 'usuario'){
            echo '<script>alert("BIENVENIDO")</script> ';
            echo "<script>location.href='header.php'</script>";
        }
        else{
            echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
			      echo "<script>location.href='login.php'</script>";
        }
      }
      else{
            echo '<script>alert("USUARIO NO ENCONTRADO")</script> ';
			      echo "<script>location.href='login.php'</script>";
      }*/
        
		     
      $_SESSION['user'] = $user;
      $_SESSION['pass'] = $pass;
        die("<div class= 'center'>ya ha iniciado sesión. Porfavor aprete Home
              //<a data-transition='slide' href='header.php?view=$
              //to continue.</div></div></body></html>");
      }
    }
  }    

echo <<<_END
      <form method='post' action='login.php'>
        <div class="form-group">
          <div data-role='fieldcotain'>
            <label></label>
            <span class='error'>$error</span>
          </div>
          <div data-role='fieldcontain'>
            <label></label>
            Please enter your details to log in
          </div> 
          <div class="field">
            <p class="control has-icons-left has-icons-right">
              <input class="input" type="email" placeholder="Email" name='user' value='$user'>
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
              <span class="icon is-small is-right">
                <i class="fas fa-check"></i>
              </span>
            </p>
          </div>
          <div class="field">
            <p class="control has-icons-left">
              <input class="input" type="password" placeholder="Password" name='pass' value='$pass'>
              <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
              </span>
            </p>
          </div>
          <div class="control">
            <button class="button is-primary" data-transition='slide' value='login'>Submit</button>
          </div>





    </div>
  </body>
</html>
_END;
?>