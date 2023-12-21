<?php
require('header.php');
?>

<!-- Main content -->
<main>
    <?php
    include('breadcrumb.php');
    ?>
    <div class="container py-4 mb-4">
        <div class="p-5 mb-4 zd-main-opacity border rounded-3">
            <div class="container-fluid py-5">
                <h2 class="fw-bold">Admission</h2>
                <p class="col lead-zuledu">
                    What is important to you when choosing a school for your children?
                    Is it a challenging, rigorous and internationally recognized curriculum? Opportunities to engage in sports, creative arts and community service? Supported learning in an environment that embraces diversity? Or perhaps it is something else that’s unique to your particular situation.
                </p>

                <form id="custom-message" class="row g-3 pt-5" action="registered.php" onsubmit="return submitForm()" method="POST">
                    <h2>Registration: </h2>
                    <div class="col-md-6">
                        <label class="form-label">First name</label>
                        <input name="fname" type="text" class="form-control" placeholder="First name" aria-label="First name" required 
                        oninvalid="validateInput(this, 'Sorry, ZulEdu needs your first name.')" oninput="clearCustomValidity(this)">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Last name</label>
                        <input name="lname" type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="inputEmail4" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required
                        placeholder="thowiestudio@gmail.com" oninvalid="validateInput(this, 'Sorry, ZulEdu needs your email.')" oninput="clearCustomValidity(this)"> 
                    </div>
                    <div class="col-12">
                        <label class="form-label">Address</label>
                        <input name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required
                        oninvalid="validateInput(this, 'Sorry, ZulEdu needs your address.')" oninput="clearCustomValidity(this)">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Address 2</label>
                        <input name="second-address" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">State</label>
                        <select name="state" id="inputState" class="form-select" required onchange="handleStateChange()">
                            <option selected>Choose...</option>
                            <?php
                            foreach ($provinsi_per_region as $region => $provinces) {
                                echo "<optgroup label='$region'>";
                                foreach ($provinces as $nama_provinsi) {
                                    echo "<option value='$nama_provinsi'>$nama_provinsi</option>";
                                }
                                echo "</optgroup>";
                            }
                            ?>
                        </select>
                        <small id="stateError" class="form-text text-danger">Please select a state.</small>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">City</label>
                        <select name="city" id="inputCity" class="form-select" required onchange="handleCityChange()">
                            <option selected>Choose...</option>
                        </select>
                        <small id="cityError" class="form-text text-danger">Please select a city.</small>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Zip Code</label>
                        <input name="zip-code" type="text" class="form-control" id="inputZip" pattern="\d{5}" required placeholder="5 digits"
                        oninvalid="validateInput(this, 'Sorry, ZulEdu needs your zip code.')" oninput="clearCustomValidity(this)">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-register">Register</button>
                    </div>
                </form>
                <script src="assets/js/validateform.js"></script>
            </div>
        </div>
    </div>
</main>

<?php
require('footer.php');
?>