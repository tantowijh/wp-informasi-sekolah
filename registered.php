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
            <?php
            $fname = isset($_POST['fname']) ? $_POST['fname'] : '';
            $lname = isset($_POST['lname']) ? $_POST['lname'] : '';
            $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $address = isset($_POST['address']) ? $_POST['address'] : '';
            $second_address = isset($_POST['second-address']) ? $_POST['second-address'] : '';
            $state = isset($_POST['state']) ? $_POST['state'] : '';
            $city = isset($_POST['city']) ? $_POST['city'] : '';
            $zip = isset($_POST['zip-code']) ? $_POST['zip-code'] : '';
            ?>
            <div class="container-fluid py-5">
                <?php if ($fname) : ?>
                    <h2 class="fw-bold">Congratulations!</h2>
                    <p class="col lead-zuledu">
                        Your registration has been successful! We welcome you, aka Sir/Madam <?= $fname; ?>, to our beloved, extraordinary school.
                    </p>

                    <h5>Your Details: </h5>
                    <table class="registered-details">
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Zip</th>
                        </tr>
                        <tr>
                            <td><?php echo $fname; ?></td>
                            <td><?php echo $lname; ?></td>
                            <td><?php echo $phone; ?></td>
                            <td><?php echo $email; ?></td>
                            <td>
                                <?php echo $address; ?>
                                <?php
                                if ($second_address) {
                                    echo "($second_address)";
                                }
                                ?>
                            </td>
                            <td><?php echo $state; ?></td>
                            <td><?php echo $city; ?></td>
                            <td><?php echo $zip; ?></td>
                        </tr>
                    </table>
                <?php else : ?>
                    <h2 class="fw-bold">Sorry!</h2>
                    <p class="col lead-zuledu">
                        Your registration has failed! Please try again.
                    </p>
                <?php endif; ?>
                <div class="back-to-home">
                    <a href="index.php" class="btn btn-primary">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require('footer.php');
?>