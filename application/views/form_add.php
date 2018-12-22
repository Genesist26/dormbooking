<!-- CONTENT -->
<main class="site-main">

    <h2>Add new post</h2>
    <?php echo validation_errors('<div class="error">', '</div>'); ?>

    <?= form_open('form', 'class=""'); ?>
    <div>
        <?php
        echo form_label('Sticky: ', 'sticky');
        $data = ['name' => 'sticky', 'id' => 'sticky', 'value' => '1','checked' => set_checkbox('sticky', '1')];
        echo form_checkbox($data);
        ?>
    </div>
    <div>
        <?php
        echo form_label('Status: ', 'status');
        $data = ['name' => 'status', 'value' => 'public', 'checked' => set_radio('status','public',TRUE)];
        echo form_radio($data) . 'Public ';
        $data = ['name' => 'status', 'value' => 'private', 'checked' => set_radio('status','private')];
        echo form_radio($data) . 'Private ';
        ?>
    </div>
    <div>
        <?php
        echo form_label('Message: ','post') . '<br>';
        $data = ['name' => 'post', 'id' => 'post', 'cols' => '70', 'rows' => '5'];
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