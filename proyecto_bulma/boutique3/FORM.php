

<form id="pago">
<fieldset>
<legend>Datos del comprador</legend>
<ol>
<li>
<label for="nombre">Nombre</label>
<input id="nombre" name="nombre" type="text" placeholder="Escribe tu nombre completo" required autofocus>
</li>
<li>
<label for="email">Email</label>
<input id="email" name="email" type="email" placeholder="ejemplo@um.es" required>
</li>
<li>
<label for="telefono">Teléfono</label>
<input id="telefono" name="telefono" type="tel" placeholder="Ej. +34668899999" required>
</li>
<li>
<label for="pais">País</label>
<input id="pais" name="pais" type="text" required>
</li>
</ol>
</fieldset>
<fieldset>
<legend>Datos de tarjeta de crédito o débito</legend>
<ol>
<li>
<label for="numtarjeta">Número</label>
<input id="numtarjeta" name="numtarjeta" type="number" placeholder="Ej. 5555-4444-3333-2222" required>
</li>
<li>
<label for="nomtarjeta">Nombre</label>
<input id="nomtarjeta" name="nomtarjeta" type="text" placeholder="Nombre que figura en la tarjeta" required>
</li>
</ol>
</fieldset>
-------------------------------------------------
<fieldset>
<button type="submit">Confirmar pedido</button>
</fieldset>
</form>