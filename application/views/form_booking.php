<link rel="stylesheet" href="<?= base_url("public/css/form_box.css"); ?>">
<div class="site-main">
    <h2 align="center">Booking/Move</h2>
    <p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack
        on top of each other instead of next to each other.</p>
    <div class="form_box_container">
<!--        <p align="center">Form</p>-->
        <form action="booking" method="post">
            <div class="row">
                <div class="col-25">

                    <label for="dorm">Dorm</label>
                </div>
                <div class="col-75">
                    <select id="dorm">


                    <?php foreach ($dorm_list as $list) : ?>
                        <?php foreach ($list as $item) : ?>
                            <option value="<?=$item ?>"><?=$item ?></option>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                    </select>
<!--                    <input type="text" id="dorm" name="dorm" placeholder="dorm" required>-->
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="checkin_due">Checkin date</label>
                </div>
                <div class="col-75">
                    <input type="date" id="checkin_due" name="checkin_due" placeholder="Choose a Date" onfocus="(this.type='date')" onblur="(this.type='text')" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="mate-1">Mate-1</label>
                </div>
                <div class="col-75">
                    <input type="text" id="mate-1" name="mate_1" placeholder="student_id, fullname">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="mate-2">Mate-2</label>
                </div>
                <div class="col-75">
                    <input type="text" id="mate-2" name="mate_2" placeholder="student_id, fullname">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="mate-3">Mate-3</label>
                </div>
                <div class="col-75">
                    <input type="text" id="mate-3" name="mate_3" placeholder="student_id, fullname">
                </div>
            <div class="row"></div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</div>
</div>