<?php
session_start();
$_SESSION["module"]="Categorías";
$_SESSION["module_description"]="Administra las categorías según la clasificación de tus productos y/o servicios";
$_SESSION["new_element"]="Nueva categoría";
include_once("front/layout.php");?>

<div class="row">
    <div class="col s12 m12">
        <div class="card">
            <div class="card-content">
                <table class="striped responsive-table">
                    <thead>
                        <tr>
                            <th data-field="id">ID</th>
                            <th data-field="name">Categoría</th>
                            <th data-field="price">Descripción</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Cómputo</td>
                            <td>Equipo de computo especializado</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Software</td>
                            <td>Software a la medida</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Cursos</td>
                            <td>Desarrollo web</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>

<?php include_once("front/floating_button.php") ?>
<?php include_once("front/footer.php") ?>