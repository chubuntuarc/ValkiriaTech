<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <?php echo '<a  href="#new_form_modal" class="btn-floating btn-large blue tooltipped modal-trigger" data-position="left" data-delay="50" data-tooltip="'.$_SESSION["new_element"].'">'; ?>
     <i class="large material-icons">mode_edit</i>
   </a>
   <!-- <ul>
     <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
     <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
     <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
     <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
   </ul> -->
 </div>
<?php include_once("front/new_form.php") ?>
