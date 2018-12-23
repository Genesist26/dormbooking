<link rel="stylesheet" href="<?= base_url("public/css/form_box.css"); ?>">
<div class="site-main">
    <h2 align="center">Repair</h2>
    <p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack
        on top of each other instead of next to each other.</p>
    <div class="form_box_container">
        <form action="repair" method="post">
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
                    <label for="room">Room</label>
                </div>
                <div class="col-75">
                    <input type="text" id="room" name="room" placeholder="room" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="object">Object</label>
                </div>
                <div class="col-75">
                    <input type="text" id="object" name="object" placeholder="object" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="detail">Detail</label>
                </div>
                <div class="col-75">
                    <input type="text" id="detail" name="detail" placeholder="detail" required>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</div>
</div>