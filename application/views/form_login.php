<!-- CONTENT -->
<main>
    <div id="login_container">
        <center><h2>Login</h2></center>
        <?php echo validation_errors('<div class="error">', '</div>'); ?>

        <?= form_open('login', 'class=""'); ?>
        <div>
            <?php
            echo form_label('Username: ', 'username');
            $data = ['name' => 'username', 'id' => 'username'];
            echo form_input($data);
            ?>
        </div>
        <div>
            <?php
            echo form_label('Password: ', 'password');
            $data = ['name' => 'password', 'id' => 'password'];
            echo form_password($data);
            ?>
            <p><a href="#">Forgot your password?</a></p>

        </div>
        <div id="lower">
            <?= form_submit('submit', 'Login'); ?>
        </div>
        <?= form_close(); ?>
    </div>
</main>
<!-- /CONTENT -->