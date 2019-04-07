<?php
    $page_title = "Dashboard";
    $auth_check = true;
    $page = "dashboard";

    require __DIR__ . "./includes/config.php"; 
    require __DIR__ . "./layouts/header.php";
?>
<div class="container">
    <form class="mt-4 mb-4">
        <div class="form-row">
            <div class="form-group col">
                <label for="admission">Search Student</label>
                <select name="admission" id="admission" class="form-control select2">
                    <option disabled selected>None</option>
                    <option value="1">Muhammad Abdullah</option>
                    <option value="2">Khizar Khan</option>
                    <option value="3">Aon Raza</option>
                    <option value="4">Malik Abdullah</option>
                    <option value="5">Haris Gul</option>
                </select>
            </div>
            <div class="form-group col">
                <label for="sort_by">Sort By</label>
                <select name="sort_by" id="sort_by" class="form-control select2">
                    <option disabled selected>None</option>
                    <option value="1">Room No</option>
                    <option value="2">Floor No</option>
                    <option value="3">Room Capacity</option>
                    <option value="4">Student Name</option>=
                </select>
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group col">
                <label for="room_capacity">Room Capacity</label>
                <select name="room_capacity" id="room_capacity" class="form-control select2">
                    <option disabled selected>None</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                </select>
            </div>
            <div class="form-group col">
                <label for="floor_no">Floor No</label>
                <select name="floor_no" id="floor_no" class="form-control select2">
                    <option disabled selected>None</option>
                    <option value="0">Ground</option>
                    <option value="1">1st</option>
                    <option value="2">2nd</option>
                    <option value="3">3rd</option>
                    <option value="4">4th</option>
                </select>
            </div>
        </div>
    </form>

    <a href="<?php echo $dir . "/rooms/create.php"; ?>" class="btn btn-primary mb-4 float-right">Create Room</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Room No.</th>
                <th scope="col">Floor</th>
                <th scope="col">Capacity</th>
                <th scope="col">Admissions</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>1st</td>
                <td>2</td>
                <td>
                    Muhammad Abdullah <br>
                    Malik Abdullah
                </td>
                <td><a class="btn btn-primary" href="<?php echo $dir . "/rooms/edit.php"; ?>">Edit</a></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>1st</td>
                <td>1</td>
                <td>
                    Aon Raza
                </td>
                <td><a class="btn btn-primary" href="<?php echo $dir . "/rooms/edit.php"; ?>">Edit</a></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>2nd</td>
                <td>3</td>
                <td>
                    Khizar Khan <br>
                    Haris Gul <br>
                    Muhammad Shahzaib
                </td>
                <td><a class="btn btn-primary" href="<?php echo $dir . "/rooms/edit.php"; ?>">Edit</a></td>
            </tr>
        </tbody>
    </table>
</div>
<?php
    require __DIR__ . "./layouts/footer.php";
?>