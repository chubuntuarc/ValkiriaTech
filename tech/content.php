<?php session_start(); $_SESSION["module_id"]=$_GET['m']; include_once("front/layout.php");?>

<div class="row">
    <div class="col s12 m7">
        <div class="card horizontal">
            <div class="card-image">
                <img src="http://lorempixel.com/100/190/nature/10">
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.</p>
                </div>
                <div class="card-action">
                    <a href="#">This is a link <?php echo 'select * from '.$_SESSION["data"];?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m5">
        <div class="card horizontal">
            <div class="card-image">
                <img src="http://lorempixel.com/100/190/nature/10">
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.</p>
                </div>
                <div class="card-action">
                    <a href="#">This is a link</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if($_SESSION["list"]){ include_once("front/list.php"); } ?>

</div>
</div>
</div>
<?php
if($_SESSION["new_element"]){
        include_once("front/floating_button.php");
}
include_once("front/footer.php")
?>
