<link rel="stylesheet" href="<?= base_url("public/css/form_box.css"); ?>">
<div class="site-main">
    <h2 align="center">Track</h2>
    <p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack
        on top of each other instead of next to each other.</p>
    id, username, subject, room, object, detail, timestamp<br>
    <?php
    foreach ($repairs as $item) {
        echo $item['id'] . "\t" . $item['username'] . "\t" . $item['subject'] . "\t" . $item['room'] . "\t" . $item['object'] . "\t" . $item['detail']. "\t" . $item['timestamp']. "<br>";
    }
    ?>
</div>