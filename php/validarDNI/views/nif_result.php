<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Verificación</title>
</head>
<body>
    <?php if ($isValid): ?>
        <p>El NIF ingresado es válido: <?= htmlspecialchars($nif) ?></p>
    <?php else: ?>
        <p>El NIF ingresado no es válido: <?= htmlspecialchars($nif) ?></p>
    <?php endif; ?>
</body>
</html>