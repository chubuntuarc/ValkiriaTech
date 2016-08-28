<?php
include("back/db.php");

function headers(){
    $sql = "SHOW COLUMNS FROM ".$_SESSION["data"];
    $result = mysql_query($sql);
    while($record = mysql_fetch_array($result)){
     $fields[] = $record['0'];
    }
    foreach ($fields as $value){
        switch ($value) {
            case 'id_module': $value = 'ID'; break;
            case 'id_company': $value = 'ID'; break;
            case 'id_user': $value = 'ID'; break;
            case 'name': $value = 'Nombre'; break;
            case 'company': $value = 'Empresa'; break;
            case 'user': $value = 'Usuario'; break;
            case 'password': $value = 'Password'; break;
            case 'first_name': $value = 'Nombre'; break;
            case 'second_name': $value = 'Segundo Nombre'; break;
            case 'last_name': $value = 'Apellido'; break;
            case 'birthday': $value = 'Cumpleaños'; break;
            case 'description': $value = 'Descripción'; break;
            case 'new_element': $value = 'Flotante'; break;
            case 'list': $value = 'Lista'; break;
            case 'data': $value = 'Tabla'; break;
            case 'created_at': $value = 'Fecha de Creación'; break;
            case 'updated_at': $value = 'Fecha de Actualización'; break;
            case 'phone': $value = 'Teléfono'; break;
            case 'second_phone': $value = 'Segundo Teléfono'; break;
            case 'address': $value = 'Dirección'; break;
            case 'second_address': $value = 'Segunda Dirección'; break;
            case 'city': $value = 'Ciudad'; break;
            case 'state': $value = 'Estado'; break;
            case 'country': $value = 'País'; break;
            case 'email': $value = 'Correo'; break;
            case 'picture': $value = 'Imagen'; break;
            case 'logo': $value = 'Logo'; break;
            case 'lang': $value = 'Idioma'; break;
            case 'status': $value = 'Estado'; break;
        }
      echo '<th>'.$value.'</th>';
}
}

function rows(){
    $sql='select * from '.$_SESSION["data"];
    $result=mysql_query($sql);

    $col = 0;
    $total_cols = mysql_num_fields($result);
    while( $row = mysql_fetch_array($result) ) {
        print "<tr>";
        while ($col <= $total_cols){
            print "<td>".$row[$col]."</td>";
            $col++;
        }
        $col = 0;
        print "</tr>";
    }
}
headers();
print "</tr>";
print "</thead>";
print "<tbody>";
rows();
@mysql_close($conexion);
?>
