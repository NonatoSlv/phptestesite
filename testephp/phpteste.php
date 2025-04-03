<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mudar Cor de Fundo</title>
<style>
        body {
            transition: background-color 0.5s;
        }
</style>
</head>
<body>
 
<?php

if (isset($_POST['cor'])) {
    $cor = $_POST['cor'];
} else {
    $cor = 'white'; 
}
?>
 

<form method="post">
<label for="cor">Escolha uma cor:</label>
<select name="cor" id="cor">
<option value="white" <?php if ($cor == 'white') echo 'selected'; ?>>Branco</option>
<option value="lightblue" <?php if ($cor == 'lightblue') echo 'selected'; ?>>Azul Claro</option>
<option value="lightgreen" <?php if ($cor == 'lightgreen') echo 'selected'; ?>>Verde Claro</option>
<option value="lightcoral" <?php if ($cor == 'lightcoral') echo 'selected'; ?>>Coral Claro</option>
<option value="lightyellow" <?php if ($cor == 'lightyellow') echo 'selected'; ?>>Amarelo Claro</option>
</select>
<button type="submit">Mudar Cor</button>
</form>
 
<script>
    
    document.body.style.backgroundColor = "<?php echo $cor; ?>";
</script>
 
</body>
</html>