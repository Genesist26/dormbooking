<link rel="stylesheet" href="<?= base_url("public/css/form_box.css"); ?>">
<div class="site-main">
    <h2 align="center">Manage Dorm and Resident</h2>
    <p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack
        on top of each other instead of next to each other.</p>
    <div class="form_box_container">
        <p align="center">Add a dorm</p>
        <form action="dorm" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="new_dorm">Dormitory name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="new_dorm" name="new_dorm" placeholder="example C10, M1, F5" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="max_floor">Maximum floor</label>
                </div>
                <div class="col-75">
                    <input type="text" id="max_floor" name="max_floor" placeholder="exclude 1st floor" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="max_room">Maximum room per floor</label>
                </div>
                <div class="col-75">
                    <input type="text" id="max_room" name="max_room" placeholder="example 15, 22, 30" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="max_resident">Maximum resident per room</label>
                </div>
                <div class="col-75">
                    <input type="text" id="max_resident" name="max_resident" placeholder="example 2, 3, 4" required>
                </div>
            </div>
            <div class="row">
                <input type="checkbox" id="exclude_1st" name="exclude_1st" value="Submit" checked>
                <label for="exclude_1st">Exclude 1st floor</label>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    &nbsp
    <div class="form_box_container">
        <p align="center">Remove a dorm</p>
        <form action="dorm" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="remv_dorm">Dormitory name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="remv_dorm" name="remv_dorm" placeholder="example C10, M1, F5" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="remv_room">Room</label>
                </div>
                <div class="col-75">
                    <input type="text" id="remv_room" name="remv_room" placeholder="example 4, 8, 10">
                </div>
            </div>
            <div class="row">
                <input type="checkbox" id="all_room" name="all_room" value="Submit" checked>
                <label for="all_room">Remove all(Dormitory)</label>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    &nbsp
    <div class="form_box_container">
        <p align="center">View of M1-322</p>
        <form action="#" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="member1">Member 1</label>
                </div>
                <div class="col-75">
                    <input type="text" id="member1" name="member1" value="5810520188 XXXXX XXXXX" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="member1">Member 2</label>
                </div>
                <div class="col-75">
                    <input type="text" id="member1" name="member1" value="5810520188 XXXXX XXXXX" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="member1">Member 3</label>
                </div>
                <div class="col-75">
                    <input type="text" id="member1" name="member1" value="5810520188 XXXXX XXXXX" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="member1">Member 4</label>
                </div>
                <div class="col-75">
                    <input type="text" id="member1" name="member1" value="5810520188 XXXXX XXXXX" readonly>
                </div>
            </div>
        </form>
    </div>
    &nbsp
    <div class="form_box_container">
        <p align="center">M1</p>
        <table style="width:100%">
            <tr>
                <th>Room</th>
                <th>Resident</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>207</td>
                <td>3/4</td>
                <td><a href="#">view</a></td>
                <td><a href="#">remove</a></td>
            </tr>
            <tr>
                <td>322</td>
                <td>4/4</td>
                <td><a href="#">view</a></td>
                <td><a href="#">remove</a></td>
            </tr>
        </table>
    </div>

    &nbsp
    <div class="form_box_container">
        <p align="center">F5</p>
        <table style="width:100%">
            <tr>
                <th>Room</th>
                <th>Resident</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>407</td>
                <td>3/4</td>
                <td><a href="#">view</a></td>
                <td><a href="#">remove</a></td>
            </tr>
            <tr>
                <td>222</td>
                <td>4/4</td>
                <td><a href="#">view</a></td>
                <td><a href="#">remove</a></td>
            </tr>
        </table>
    </div>

</div>
</div>