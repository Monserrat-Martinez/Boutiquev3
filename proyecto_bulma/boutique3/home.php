
<?php 
    require_once 'header.php';
echo <<<_MAIN
        <div class="card-group">
            <div class="card" >
                <div class="mx-auto">
                    <img class='vestido' src='F.jpg' width='400px' height='300px'>
                </div>
                <div class='card-body'>
                    <h5 class='card-title'>VESTIDOS DE GRADUACION</h5>
                    <p class='card-text'>PRECIO.</p>
                    <a href='purchases.php' class="btn btn-primary">COMPRAR</a>
                </div>
            </div>
            <div class="card">
                <div class="mx-auto">
                    <img class='vestido' src='F1.jpg' width='400px' height='300px'>
                </div>
                <div class="card-body">
                    <h5 class='titulo'>VESTIDOS DE GRADUACION</h5>
                    <p class="card-text">PRECIO.</p>
                    <a href="purchases.php" class="btn btn-primary">COMPRAR</a>
                </div>
            </div>
            <div class="card">
                <div class="mx-auto">
                    <img class='vestido' src='F2.jpg' width='400px' height='300px'>
                </div>
                <div class="card-body">
                    <h5 class="card-title">VESTIDOS DE GRADUACION</h5>
                    <p class="card-text">PRECIO.</p>
                    <a href="purchases.php" class="btn btn-primary">COMPRAR</a>
                </div>
            </div>
        </div>
  
        <div class="card-group">
            <div class="card" >
                <div class="mx-auto">
                    <img class='vestido' src='F3.jpg' width='400px' height='300px'>
                </div>
                <div class='card-body'>
                    <h5 class='card-title'>VESTIDOS DE GRADUACION</h5>
                    <p class='card-text'>PRECIO.</p>
                    <a href="purchases.php" class="btn btn-primary">COMPRAR</a>
                </div>
            </div>
            <div class="card">
                <div class="mx-auto">
                    <img class='vestido' src='F4.jpg' width='400px' height='300px'>
                </div>
                <div class="card-body">
                    <h5 class='titulo'>VESTIDOS DE GRADUACION</h5>
                    <p class="card-text">PRECIO.</p>
                    <a href="purchases.php" class="btn btn-primary">COMPRAR</a>
                </div>
            </div>
            <div class="card">
                <div class="mx-auto">
                    <img class='vestido' src='F5.jpg' width='400px' height='300px'>
                </div>
                <div class="card-body">
                    <h5 class="card-title">VESTIDOS DE GRADUACION</h5>
                    <p class="card-text">PRECIO.</p>
                    <a href="purchases.php" class="btn btn-primary">COMPRAR</a>
                </div>
            </div>
        </div>
_MAIN;

echo <<<_END

      </div><br>
    </div>
    <div id='derechos' data-role="footer" style= "text-align: center">
      <div class="w-100 p-3" style="background-color: #eee;">
        <h4>Web App from <i><a href= 'http://localhost/proyecto_bulma'
        target='_blank'>Web develomped</a></i></h4>
        <h4>Hecho en Mexico. CBTIS 253 todos los derechos reservados 11/octubre/2020</h4>
        <h4>Esta pagina puede ser reproducida con fines no lucrativos siempre</h4>
        <h4>y cuando no se mutile, se cite la fuente completa y su direccion electronica</h4>
      </div><br>
    </div> 
    <script src='bootstrap4/bootstrap.min.css'</script> 
    <script src='bootstrap4/bootstrap.min.js'</script> 
    <script src="bootstrap4/jquery-3.2.4.slim.min.js"></script>
    <script src="bootstrap4/popper.min.js"></script>
  </body>
_END;
?>