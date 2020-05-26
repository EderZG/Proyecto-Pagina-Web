<HTML XMLNS="http://www.w3.org/1999/xhtml">
<HEAD>
    <META HTTP-EQUIV="content-Type" CONTENT="text/html;
            CHARSET=utf-8"/>
    <TITLE>Formulario de Altas</TITLE>
    <LINK HREF="../Estilo/Estilo.css" 
                REL="stylesheet" TYPE="text/css"/>
</HEAD>
<BODY>
    <FORM ID="form1" NAME="form1" METHOD="post"
                ACTION="actBase.php">
        <P CLASS="titulo">Formulario de Registro</P>
        <BR/><BR/>
        <LABEL FOR="clave">Correo:</LABEL>
        <INPUT NAME="cveEspecialidad" TYPE="text"
                ID="claveEspecialidad" SIZE="100px"
                MAXLENGHT="6"/><BR/>
        <LABEL FOR="nombre">Nombre:</LABEL>
        <INPUT NAME="nomEspecialidad" TYPE="text"
                ID="nombreEspecialidad" SIZE="100"
                MAXLENGHT="25"/><BR/>
        <LABEL FOR="area">Genero:</LABEL>
        <SELECT NAME="nombreArea" ID="nombreArea">
        <?php
            include "conectar.php";
            $resConectar= conecta();
            $sqlAreas="SELECT * FROM AREA";
            $tablaArea=mysql_query($sqlAreas);
            $numfilasAreas= mysql_num_rows($tablaArea);
            for ($i=0; $i<$numfilasAreas;$i++){
                    $filaArea=mysql_fetch_array($tablaArea);
                    echo'<OPTION>'.$filaArea['nomArea'].'</OPTION>';
            }
        ?>
        </SELECT><BR/><BR/>
        <INPUT TYPE="submit" NAME="boton"
                ID="botonGuardar" VALUE="Guardar"/>
        <INPUT TYPE="reset" NAME="botonNuevo"
                ID="botonNuevo" VALUE="Nuevo"/><BR/>
        </FORM>
        <IMG SRC="../Imagenes/regresar.gif"
                WIDTH="60" HEIGHT="40" ONCLICK="history.back()"/>
</BODY>
</HTML>