<link rel="stylesheet" href="<?= base_url("public/css/form_box.css"); ?>">
<div class="site-main">
    <h2 align="center">Information</h2>
    <p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack
        on top of each other instead of next to each other.</p>
<!--    Dorm: M1<br>-->
<!--    Room: 322<br>-->
<!--    checkin: 15/8/2018<br>-->
<!--    checkout: 1/1/2019<br>-->
<!--    mate-1: 58xxxxxxxx firstname lastname<br>-->
<!--    mate-2: 58xxxxxxxx firstname lastname<br>-->
<!--    mate-3: 58xxxxxxxx firstname lastname<br>-->
<!--    --><?php //echo $information[0]['username']; ?>

    <?php if(!is_null($information))  : ?>
        <?php foreach ($information as $item) : ?>
            Dorm: <?= $item['dorm']; ?><br>
            Room: <?= $item['room']; ?><br>
            Check in: <?= $item['checkin']; ?><br>
            Due to check out: <?= $item['checkout_due']; ?><br>
            <p align="center"> waiting for implement</p>
            mate-1: 58xxxxxxxx firstname lastname<br>
            mate-2: 58xxxxxxxx firstname lastname<br>
            mate-3: 58xxxxxxxx firstname lastname<br>
        <?php endforeach; ?>


    <?php endif; ?>


</div>
</div>