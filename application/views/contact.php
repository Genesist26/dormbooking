<link rel="stylesheet" href="<?= base_url("public/css/form_box.css"); ?>">
<div class="site-main">
    <h2 align="center">Contact Us</h2>
    <p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack
        on top of each other instead of next to each other.</p>
    <div class="form_box_container">
<!--        <p align="center">Form</p>-->
        <form action="contact" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="subject">Subject</label>
                </div>
                <div class="col-75">
                    <input type="text" id="subject" name="subject" placeholder="subject" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Detail</label>
                </div>
                <div class="col-75">
                    <textarea id="detail" name="detail" placeholder="Write something.." style="height:200px"></textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</div>
</div>