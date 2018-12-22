<!-- CONTENT -->
<main class="site-main">

    <h2>Update post</h2>
    <?php echo validation_errors('<div class="error">', '</div>'); ?>

    <?= form_open("form/update/$post_id", 'class=""'); ?>
    <div>
        <?php
        echo form_label('Sticky: ', 'sticky');
        $sticky_checked = $sticky ? TRUE : FALSE;
        $data = ['name' => 'sticky', 'id' => 'sticky', 'value' => '1', 'checked' => $sticky_checked];
        echo form_checkbox($data);
        ?>
    </div>
    <div>
        <?php
        echo form_label('Status: ', 'status');
        $pubic_checked = $status == 'public' ? TRUE : FALSE;
        $data = ['name' => 'status', 'value' => 'public', 'checked' => $pubic_checked];
        echo form_radio($data) . 'Public ';
        $private_checked = $pubic_checked ? FALSE : TRUE;
        $data = ['name' => 'status', 'value' => 'private', 'checked' => $private_checked];
        echo form_radio($data) . 'Private ';
        ?>
    </div>
    <div>
        <?php
        echo form_label('Message: ','post') . '<br>';
        $data = ['name' => 'post', 'id' => 'post', 'cols' => '70', 'rows' => '5', 'value' => $post];
        echo form_textarea($data);
        ?>
    </div>
    <div>
        <?= form_submit('submit', 'Submit Post!'); ?>
        <?= form_reset('reset', 'Reset'); ?>
    </div>
    <?= form_close(); ?>

</main>
<!-- /CONTENT -->