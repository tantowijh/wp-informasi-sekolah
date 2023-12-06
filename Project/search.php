<?php
require('header.php');
include('breadcrumb.php');
?>

<div class="container pb-4">

    <?php
    if (isset($_POST['search'])) {
        $searchTerm = $_POST['search'];

        // Replace this array with your actual data
        $data = array(
            "Item 1",
            "Item 2",
            "Item 3",
            // Add more items as needed
        );

        $results = array();

        foreach ($data as $item) {
            if (stripos($item, $searchTerm) !== false) {
                $results[] = $item;
            }
        }

        if (!empty($results)) {
            echo "<h2>Search Results</h2>";
            echo "<ul>";
            foreach ($results as $result) {
                echo "<li>{$result}</li>";
            }
            echo "</ul>";
        } else {
            echo "No results found.";
        }
    }
    ?>

</div>

<?php
require('footer.php');
?>