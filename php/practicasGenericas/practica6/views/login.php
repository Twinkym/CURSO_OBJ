<h4>Formuliario de Acceso</h4>
<form class="form-control" method="post" action="controller/controller.php">
<input class="form-control" type="email" name="user" placeholder="Nombre de usuario:" minlength="4" maxlength="15" required />
<br>
<input class="form-control" type="password" name="pass" placeholder="Contraseña" minlength="4" maxlength="15" required/>
<br>
<input type="hidden" name="accion" value="FORM_LOGIN" />
<br>
<input class="btn btn-primary" type="submit" value="LOGIN" />
<input class="btn btn-danger" type="reset" value="RESET" />
</form>