<?php
    $page_title = "Create Room";
    $page = "room.create";

    require __DIR__ . "/../includes/config.php"; 
    require __DIR__ . "/../layouts/header.php";
?>
    <div class="container mt-5 mb-5">
        <div class="row">
            <form action="" method="POST" class="col-md-6 offset-md-3">
                <h3>Create Room</h3>
                <hr>

                <div class="form-group">
                    <label for="room_no">Room No</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Room No" aria-label="Room No" min="1" max="10000" required>
                    </div>
                </div>

                <div class="form-group">
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
                
                <div class="form-group">
                    <label for="room_capacity">Room Capacity</label>
                    <select name="room_capacity" id="room_capacity" class="form-control select2">
                        <option disabled selected>None</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="capacity">Capacity</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Capacity" aria-label="Capacity" min="1" max="4" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="admission">Admissions</label>
                    <select name="admission" id="admission" class="form-control select2" multiple>
                        <option value="1">Muhammad Abdullah</option>
                        <option value="2">Khizar Khan</option>
                        <option value="3">Aon Raza</option>
                        <option value="4">Malik Abdullah</option>
                        <option value="5">Haris Gul</option>
                    </select>
                </div>
                
                <div class="clearfix"></div>

                <button class="btn btn-dark" style="width: 100%;" type="submit">Create</button>

            </form>
        </div>
    </div>

<?php require __DIR__ . "/../layouts/footer.php"; ?>
