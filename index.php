<?php
if (isset($_FILES['fileUpload'])) {
    try {
        $extension = strtolower(substr($_FILES['fileUpload']['name'], -4)); //Pegando extensão
        $name = date("d.m.Y-H.i.s") . $extension; //Renomeando o arquivo
        $dir = 'uploads/';
        move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir . $name); //Fazer upload
    } catch (Exception $e) {
        echo $e;
    }
}

?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Upload</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/site.css" />
</head>

<body>
    <form class="form-login" method="post" enctype="multipart/form-data">
        <input type="file" name="fileUpload" />
        <button style="margin-top:20px;">Enviar</button>
    </form>
</body>

</html>
