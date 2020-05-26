<HTML XMLNS="http://www.w3.org/1999/xhtml">
<HEAD>
    <META HTTP-EQUIV="content-Type" CONTENT="text/html;
            CHARSET=utf-8"/>
    <TITLE>Formulario de Gestion</TITLE>
    <LINK HREF="../Estilo/Estilo.css" 
                REL="stylesheet" TYPE="text/css"/>
    <SCRIPT LANGUAGE="Javascript" TYPE="text/Javascript">
    function eliminar(){
            if(confirm('¿Confirma la baja?'))
                document.formGestionEsp.submit()
    }
    </SCRIPT>
</HEAD>
<BODY>
    <FORM ID="formGestionEsp" NAME="formGestionEsp" METHOD="post"
                ACTION="gestionBase.php" ENCTYPE="multipart/form-data">
        <P CLASS="titulo">Gestion de Especialidades</P>
        <BR/><BR/>
        <?php
            include "conectar.php";
            $vCveEsp=$_POST['cveEspe'];
            $resConectar= conecta();
            $sqlEspe="SELECT cveEsp, nomEsp,nomArea 
                FROM ESPECIALIDAD, AREA
                WHERE cveEsp='$vCveEsp'
                AND ESPECIALIDAD.cveArea= AREA.cveArea;";
            $tablaEspe=mysql_query($sqlEspe);
            $numfilasEspe=mysql_num_rows($tablaEspe);
            if($numfilasEspe>0){
                    $filaEspe=mysql_fetch_array($tablaEspe);
                    echo'<LABEL FOR="clave">'."Correo:".'</LABEL>';
                    echo'<INPUT NAME="cveEspecialidad" TYPE="text"
                        ID="claveEspecialidad" READONLY="readonly"
                        VALUE='.$filaEspe['cveEsp'].'><BR/>';
                    echo'<LABEL FOR="nombre">'."Nombre:".'</LABEL>';
                    echo'<INPUT NAME="nomEspecialidad" TYPE="text"
                        ID="nombreEspecialidad" READONLY="readonly"
                        VALUE='.$filaEspe['nomEsp'].'><BR/>';
                    echo'<LABEL FOR="area">'."Genero:".'</LABEL>';
                    echo'<INPUT NAME="nomArea" TYPE="text"
                        ID="nombreArea" READONLY="readonly"
                        VALUE='.$filaEspe['nomArea'].'><BR/>';
            }
                    echo'<INPUT TYPE="button" NAME="botonG"
                        ID="botonG" VALUE="Eliminar" ONCLICK="eliminar();"/>';
                    echo'<INPUT TYPE="submit" NAME="botonG"
                        ID="botonModificar" VALUE="Modificar"/><BR/>';
        ?>
        </FORM>
        <BR/>
        <IMG SRC="../Imagenes/regresar.gif"
                WIDTH="60" HEIGHT="40" ONCLICK="history.back()"/>
</BODY>
</HTML>