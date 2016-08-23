<?php
switch ($_SESSION["module_id"]) {
    case '1':
    $_SESSION["module"]="Usuarios del Sistema";
    $_SESSION["module_description"]="Listado de usuarios régistrados en el sistema.";
    $_SESSION["new_element"]="Nuevo usuario";
    break;
    case '2':
    $_SESSION["module"]="Empresas del Sistema";
    $_SESSION["module_description"]="Listado de empresas régistradas en el sistema.";
    $_SESSION["new_element"]="Nueva empresa";
    break;
    case '3':
    $_SESSION["module"]="Almacén";
    $_SESSION["module_description"]="Panel de vista general de inventario de productos.";
    $_SESSION["new_element"]="Nuevo conteo";
    break;
    case '4':
    $_SESSION["module"]="Productos";
    $_SESSION["module_description"]="Administra los productos que se van a manejar en tu negocio";
    $_SESSION["new_element"]="Nuevo producto";
    break;
    case '5':
    $_SESSION["module"]="Categorías";
    $_SESSION["module_description"]="Administra las categorías según la clasificación de tus productos y/o servicios";
    $_SESSION["new_element"]="Nueva categoría";
    break;
    default:
    $_SESSION["module"]="Bienvenido";
    break;
}
?>
