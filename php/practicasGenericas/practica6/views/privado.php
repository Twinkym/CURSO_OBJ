<h3>Zona Privada</h3>
<a href="index.php?action=cerrar">CERRAR</a>
<p <?php echo 'style="color:'.$_SESSION['color'].'"'?>>
<?php echo "Hola SR. ".$_SESSION['user']; ?>
</p>

<?php echo '<div style="color:'.$_SESSION['color'].'">'.$_SESSION['color'].'</div>';
    