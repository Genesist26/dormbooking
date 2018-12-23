<link rel="stylesheet" href="<?= base_url("public/css/form_box.css"); ?>">
<div class="site-main">
    <h2 align="center">Manage Contact Us</h2>
    <p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack
        on top of each other instead of next to each other.</p>

    id, username, subject, room, object, detail, status timestamp<br>
    <?php if($queue){
        foreach ($queue as $item) {
            foreach ($item as $key => $value){
                echo $value."\t";
            }
            echo "<br>";
        }
    }
    ?>

</div>
</div>