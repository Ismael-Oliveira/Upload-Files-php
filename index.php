<?php

    if(isset($_FILES['arquivo'])){
        $file = $_FILES['arquivo'];
        if(isset($file['tmp_name']) && !empty($file['tmp_name'])){
            $namefile = md5(time().rand(0,999)).".png";
            // echo $namefile; exit;
            move_uploaded_file($file['tmp_name'], 'arquivos/'.$namefile);
            echo "Arquivo enviado com sucesso.";
        }
    }

    // echo "<pre>";
    // var_dump($file);

?>
<form method="POST" enctype="multipart/form-data">

    <input type="file" name="arquivo"><br/><br/>
    <button type="submit">Adicionar</button>
</form>

