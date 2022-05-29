<?php
if ($_FILES['audioFile']['type']=="audio/mpeg")
{


$uploaded_name = ($_FILES['audioFile']['name']);
$uploaded_ext = substr($uploaded_name, strrpos($uploaded_name, '.') + 1);
if(isset($_POST['save_audio']) && $_POST['save_audio']=="Subir audio" && $uploaded_ext == "mp3")
{
    $ext_type = array('mpeg');
    $dir='uploads/';
    $audio_path=$dir.basename($_FILES['audioFile']['name']);

    if(move_uploaded_file($_FILES['audioFile']['tmp_name'],$audio_path))
    {
        echo 'Subido correctamente. ';

        saveAudio($audio_path);

        displayAudios();
    }
}

}else 
header("Location: https://nimbotune.es/error.html");
function displayAudios()
{
    $conn=mysqli_connect("rdbms.strato.de", "dbu2863925", "NimbotuneCESF", "dbs5530728");
    if(!$conn)
    {
        die('Servidor no conectado');
    }

    $query="select * from audios";

    $r=mysqli_query($conn,$query);

    while($row=mysqli_fetch_array($r))
    {
        echo '<a href="play.php?name='.$row['filename'].'">'.$row['filename'].'</a>';
        echo "<br/>";
    }
    
}
function saveAudio($fileName)
{
    $conn=mysqli_connect("rdbms.strato.de", "dbu2863925", "NimbotuneCESF", "dbs5530728");
    if(!$conn)
    {
        die('Servidor no conectado');
    }

    $query="insert into audios(filename)values('{$fileName}')";

    mysqli_query($conn,$query);

    if(mysqli_affected_rows($conn)>0)
    {
        echo "El archivo de audio se ha subido correctamente en la base de datos. ";
    }

    mysqli_close($conn);
}
?>

