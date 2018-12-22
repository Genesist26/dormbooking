<!-- CONTENT -->
<link rel="stylesheet" href="<?= base_url("public/css/form_box.css"); ?>">
<div class="site-main">
    <h2 align="center">Sign up and Booking</h2>
    <p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack
        on top of each other instead of next to each other.</p>
    <div class="form_box_container">
        <p align="center">Sign up</p>
        <form action="booking" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="username">Username</label>
                </div>
                <div class="col-75">
                    <input type="text" id="username" name="username" placeholder="student id">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="password">Password</label>
                </div>
                <div class="col-75">
                    <input type="text" id="password" name="password" placeholder="0-8 character">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="confirm_password">Confirm Password</label>
                </div>
                <div class="col-75">
                    <input type="text" id="confirm_password" name="confirm_password" placeholder="0-8 character">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="name">Full name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="name" name="name" placeholder="Full name">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="question">Question</label>
                </div>
                <div class="col-75">
                    <input type="text" id="question" name="question" placeholder="Question for reset you password">
                </div>
            </div>
            <div class="answer">
                <div class="col-25">
                    <label for="name">Answer</label>
                </div>
                <div class="col-75">
                    <input type="text" id="answer" name="answer" placeholder="Answer of the question">
                </div>
            </div>
            <div class="row"><p>&nbsp</p></div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</div>
<p>&nbsp</p>

<!-- /CONTENT -->