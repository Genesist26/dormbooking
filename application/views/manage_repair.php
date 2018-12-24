<link rel="stylesheet" href="<?= base_url("public/css/form_box.css"); ?>">
<div class="site-main">
    <h2 align="center">Manage Repair</h2>
    <p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack
        on top of each other instead of next to each other.</p>
    <style>
        table, th, td {
            text-align: center;
            table-layout: fixed;
            border-collapse: collapse;
            border: 1px solid black;
            padding: 5px;
        }

        th {
            background-color: #9fcdff;
        }
    </style>
    <?php
    echo " <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Subject</th>
            <th>Room</th>
            <th>Object</th>
            <th>Detail</th>
            <th>Status</th>
            <th>Timestamp</th>
        </tr>"; ?>
    <?php if($queue!=FALSE): ?>
    <?php foreach ($queue as $item): ?>

            <?php
            $queue_id = $item['id'];
            ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['username'] ?></td>
                <td><?= $item['subject'] ?></td>
                <td><?= $item['room'] ?></td>
                <td><?= $item['object'] ?></td>
                <td><?= $item['detail'] ?></td>
                <td><?= $item['status'] ?></td>
                <td><?= $item['timestamp'] ?></td>
                <td><a href="<?= base_url("repair/update_queue_status/$queue_id"); ?>">complete</a><br></td>
            </tr>
        <?php endforeach;?>
    <?php endif;?>

    </table>
</div>
