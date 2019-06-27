
<?php
    // echo "<pre>";
    // print_r($_FILES);

    if(isset($_FILES['arquivo'])){
        $files = $_FILES['arquivo'];

        if(count($files['tmp_name']) > 0){

            for ($i=0; $i < count($files['tmp_name']); $i++) { 

                $ext = explode(".",$files['name'][$i]);
                //print_r($ext); exit;
                $new_name = md5(time().rand(0,999)).".".$ext[1];
                
                if($ext != 'php'){
                    move_uploaded_file($files['tmp_name'][$i],'arquivos/'.$new_name);
                }
            }
            echo "Arquivos enviados com sucesso.";            
        }
    }
?>

<form method="POST" enctype="multipart/form-data">
    
    Arquivo: <br>
    <input type="file" name="arquivo[]" multiple><br/><br/>
    <button type="submit">Adicionar</button>
</form>

