<div class="container my-5">
    <div class="form-container" style="background: black; padding: 40px; opacity: 0.8">
        <form>
            <!-- Pickup and Return Location Row -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="pickupLocation" class="form-label">Pickup Location</label> <br>
                        <select class="form-select form-select-lg" id="pickupLocation" required
                            style="width: 100%; height: 40px; border-radius: 5px; background: white;">
                            <option selected disabled value="">Select Pickup Location</option>
                            <option value=" location1">Location 1</option>
                            <option value="location2">Location 2</option>
                            <option value="location3">Location 3</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="returnLocation" class="form-label">Return Location</label> <br>
                        <select class="form-select form-select-lg" id="pickupLocation" required
                            style="width: 100%; height: 40px; border-radius: 5px;">
                            <option selected disabled value="">Select Return Location</option>
                            <option value="location1">Location 1</option>
                            <option value="location2">Location 2</option>
                            <option value="location3">Location 3</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Pickup Date and Time Row -->
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <label for="pickupDate" class="form-label">Pickup Date</label>
                    <input type="date" class="form-control" id="pickupDate" required>
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="pickupTime" class="form-label">Pickup Time</label>
                    <input type="time" class="form-control" id="pickupTime" required>
                </div>
            </div>

            <!-- Return Date and Time Row -->
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <label for="returnDate" class="form-label">Return Date</label>
                    <input type="date" class="form-control" id="returnDate" required>
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="returnTime" class="form-label">Return Time</label>
                    <input type="time" class="form-control" id="returnTime" required>
                </div>
            </div>

            <!-- Search Button Row -->
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#0" class="butn butn-light mt-30">
                        <span>Search</span>
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>