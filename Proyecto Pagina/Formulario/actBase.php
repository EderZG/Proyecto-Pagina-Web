<?php
    include "conectar.php";
    $vCveEsp=$_POST['cveEspecialidad'];
    $vNomEsp=$_POST['nomEspecialidad'];
    $vNomArea=$_POST['nombreArea'];
    $vBoton=$_POST['boton'];
    $resConectar=conecta();
    $sqlArea="SELECT cveArea FROM AREA
            WHERE nomArea='$vNomArea';";
    $sqlCveArea=mysql_query($sqlArea,$resConectar);
    $resulCveArea=mysql_fetch_array($sqlCveArea);
    $vCveArea=$resulCveArea["cveArea"];
    if($vBoton=="Guardar"){
        $sqlAltaEsp="INSERT INTO ESPECIALIDAD
            VALUES('$vCveEsp','$vNomEsp','$vCveArea');";
            $guarda=mysql_query($sqlAltaEsp,$resConectar);
            if(!$guarda){
                echo "<SCRIPT LANGUAGE='Javascript' TYPE='text/Javascript'>
                alert('Ocurrio un error... Correo Repetido')
                Javascript:history.back(1)
                </SCRIPT>";
            }
            else{
                echo "<SCRIPT LANGUAGE='Javascript' TYPE='text/Javascript'>
                alert('Correo Registrado')
                window.location='../index.html'
                </SCRIPT>";
            }
    }
    else{
        $sqlModEsp="UPDATE ESPECIALIDAD
            SET nomEsp='$vNomEsp',cveArea='$vCveArea'
            WHERE cveEsp='$vCveEsp';";
        $modificar=mysql_query($sqlModEsp,$resConectar);
        if(!$modificar){
            echo "<SCRIPT LANGUAGE='Javascript' TYPE='text/Javascript'>
                alert('Ocurrio un error... No se guardo el registro')
                Javascript:history.back(1)
                </SCRIPT>";
        }
        else{
            echo"<SCRIPT LANGUAGE='Javascript' TYPE='text/Javascript'>
                alert('Especialidad modificada')
                window.location='consultaEspecialidad.php'
                </SCRIPT>";
        }
    }
?>
