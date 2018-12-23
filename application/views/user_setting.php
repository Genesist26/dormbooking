<!-- CONTENT -->
<link rel="stylesheet" href="<?= base_url("public/css/form_box.css"); ?>">
<div class="site-main">
    <h2 align="center">Setting</h2>
    <p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack
        on top of each other instead of next to each other.</p>
    <div class="form_box_container">
        <form action="setting" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="username">Username/Student ID</label>
                </div>
                <div class="col-75">
                    <input type="text" id="username" name="username" value="<?= $setting[0]['username'] ?>" readonly>
                </div>
            </div>
            <div class="row"><p align="center">Answer the question for set new password&nbsp</p></div>
            <div class="row">
                <div class="col-25">
                    <label for="question">Question</label>
                </div>
                <div class="col-75">
                    <input type="text" id="question" name="question" value="<?= $setting[0]['question'] ?>" readonly>
                </div>
            </div>
            <div class="answer">
                <div class="col-25">
                    <label for="name">Answer</label>
                </div>
                <div class="col-75">
                    <input type="text" id="answer" name="answer" placeholder="Answer of the question" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="password">New Password</label>
                </div>
                <div class="col-75">
                    <input type="password" id="password" name="password" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="Password" minlength="6" maxlength="16" size="16" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="password_two">Confirm New Password</label>
                </div>
                <div class="col-75">
                    <input type="password" id="password_two" name="password_two" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" placeholder="Verify Password" minlength="6" maxlength="16" size="16" required>
                </div>
            </div>


            <div class="row">
                <input type="submit" value="Submit">
                <input type="button" value="Go back!" onclick="history.back()">
            </div>
        </form>
    </div>
</div>
<p>&nbsp</p>

<!-- /CONTENT -->