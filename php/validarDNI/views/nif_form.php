<?php 
if (isset($message)): ?>
    <div class="alert alert-info" role="alert">
        <p><?= htmlspecialchars($message) ?></p>
    </div>
<?php endif; ?>

<form action="" method="post">
    <div class="form-group">
        <input type="text" name="nif" placeholder="Escribe un NIF" minlength="9" maxlength="9" required>
    </div>
    <button type="submit" class="btn btn-primary btn-block">VERIFICAR</button>
</form>