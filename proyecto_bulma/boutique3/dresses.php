<?php
    require_once "header.php";
echo <<<_END
<div class="card-group">
<div class="card" >
    <div class="mx-auto">
        <img class='vestido' src='V.jpg' width='400px' height='300px'>
    </div>
    <div class='card-body'>
        <h5 class='card-title'>VESTIDOS DE GRADUACION</h5>
        <p class='card-text'>PRECIO: $1000</p>
        <a href='purchases.php' class="btn btn-primary">COMPRAR</a>
    </div>
</div>
<div class="card">
    <div class="mx-auto">
        <img class='vestido' src='V1.jpg' width='400px' height='300px'>
    </div>
    <div class="card-body">
        <h5 class='titulo'>VESTIDOS DE GRADUACION</h5>
        <p class="card-text">PRECIO: $1500</p>
        <a href="purchases.php" class="btn btn-primary">COMPRAR</a>
    </div>
</div>
<div class="card">
    <div class="mx-auto">
        <img class='vestido' src='V2.jpg' width='400px' height='300px'>
    </div>
    <div class="card-body">
        <h5 class="card-title">VESTIDOS CASUALES</h5>
        <p class="card-text">PRECIO: $300</p>
        <a href="purchases.php" class="btn btn-primary">COMPRAR</a>
    </div>
    </div>
</div>

<div class="card-group">
    <div class="card" >
        <div class="mx-auto">
            <img class='vestido' src='F7.jpg' width='400px' height='300px'>
        </div>
        <div class='card-body'>
            <h5 class='card-title'>VESTIDOS DE NOCHE</h5>
            <p class='card-text'>PRECIO: $500</p>
            <a href="purchases.php" class="btn btn-primary">COMPRAR</a>
        </div>
    </div>
    <div class="card">
        <div class="mx-auto">
            <img class='vestido' src='V4.jpg' width='400px' height='300px'>
        </div>
        <div class="card-body">
            <h5 class='titulo'>VESTIDOS DE GRADUACION</h5>
            <p class="card-text">PRECIO: $1200</p>
            <a href="purchases.php" class="btn btn-primary">COMPRAR</a>
        </div>
    </div>
    <div class="card">
        <div class="mx-auto">
            <img class='vestido' src='V5.jpg' width='400px' height='300px'>
        </div>
        <div class="card-body">
            <h5 class="card-title">VESTIDOS CASUALES</h5>
            <p class="card-text">PRECIO: $300</p>
            <a href="purchases.php" class="btn btn-primary">COMPRAR</a>
        </div>
    </div>
</div>
</div>
_END;
?>