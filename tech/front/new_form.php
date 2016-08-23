<div id="new_form_modal" class="modal">
    <div class="modal-content">
      <h4><?php echo $_SESSION["new_element"]; ?></h4>
      <p>Completa los campos indicados a continuación</p>
      <?php include_once("back/new_form.php") ?>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Guardar</a>
    </div>
  </div>
