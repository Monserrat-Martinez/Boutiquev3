<?php

	require_once 'functions.php';
	require_once 'header.php';
	
echo <<<_END
	<script>
		function checkUser(user){
			if (user.value == ''){
				$('#used').html('&nbsp;')
				return
			}
			$.post ( 'checkuser.php', { user: user.value },
		    	function(data) {
		  			$('#used').html(data)
				}
	    	)
		}
	</script>
_END;	

    $error = $user = $pass = "";
	if (isset($_SESSION ['user'])) destroySession();
    if (isset($_POST ['user'])) {
       $user = sanitizeString($_POST ['user']);
       $pass = sanitizeString($_POST ['pass']);

       if ($user == "" || $pass == "")
	  		$error = 'No se ingresaron todos los campos
			  <br><br>';
       else {
			$result = queryMysql("SELECT * FROM members WHERE user='$user'");
	
			if ($result->num_rows)
	  			 $error = 'That username already exists<br><br>';
			else {
	  			queryMysql("INSERT INTO members VALUES('$user', '$pass')");
	  			die('<h4>Account created</h4>Please log in.</div></body></html>');
			}
      	}
    }

echo <<<_END

	<form method='post' action='signup.php'>$error
		<div data-role='fieldcontain'>
	    	<label></label>
	    	Por favor ingrese sus datos para registrarse
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
        	<button class="button is-primary" data-transition='slide' value='Sign up'>Submit</button>
		</div>
  </body>
</html>
_END;
?>