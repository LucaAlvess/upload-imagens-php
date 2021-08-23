<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de arquivos</title>
</head>
<body>
    <!-- Quando trabalhamos com arquivos, utilizamos o atributoo enctype -->
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label>Arquivo: </label>
        <input type="file" name="arquivo" required>
        <input type="submit" value="Upload">
    </form>


</body>
</html>