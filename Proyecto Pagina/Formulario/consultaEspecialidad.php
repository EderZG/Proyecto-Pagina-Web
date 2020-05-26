<HTML XMLNS="http://www.w3.org/1999/xhtml">
<HEAD>
    <META HTTP-EQUIV="content-Type" CONTENT="text/html;
            CHARSET=utf-8"/>
    <TITLE>Formulario de consulta</TITLE>
    <LINK HREF="../Estilo/Estilo.css" 
                REL="stylesheet" TYPE="text/css"/>
</HEAD>
<BODY>
    <FORM ID="form1" NAME="form1" METHOD="post"
                ACTION="gestionEspecialidad.php">
        <P CLASS="titulo">Selecciona el Correo</P>
        <BR/><BR/>
        <LABEL FOR="clave">Correro:</LABEL>
        <SELECT NAME="cveEspe" ID="cveEspecialidad">
        <?php
            include "conectar.php";
            $resConectar= conecta();
            $sqlEspe="SELECT * FROM ESPECIALIDAD";
            $tablaEspe=mysql_query($sqlEspe);
            $numfilasEspe= mysql_num_rows($tablaEspe);
            for ($i=0; $i<$numfilasEspe;$i++){
                    $filaEspe=mysql_fetch_array($tablaEspe);
                    echo'<option>'.$filaEspe['cveEsp'].'</option>';
            }
        ?>
        </SELECT><BR/><BR/>
        <INPUT TYPE="submit" NAME="btnConsultar"
                ID="botonConsultar" VALUE="Consultar"/><BR/><BR/>
        </FORM>
        <a href="../index.html"><IMG SRC="../Imagenes/regresar.gif"
                WIDTH="60" HEIGHT="40"/></a>
</BODY>