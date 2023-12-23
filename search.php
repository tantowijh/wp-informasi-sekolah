<?php
require('header.php');
include('breadcrumb.php');
?>

<div class="container pb-4 zuledu-search">

    <div class="col-md-12 my-2">
        <h1 class="pb-2 text-uppercase border-bottom">Search Results for ZulEdu</h1>
        <p>
            Explore educational wonders and discoveries related to ZulEdu. Each search result opens a door to knowledge and enlightenment.
        </p>
    </div>


    <?php
    if (isset($_POST['search'])) {
        $searchTerm = $_POST['search'];

        $data = [
            "ZulEdu Home Page" => [
                "page" => "index.php",
                "description" => "The heart of ZulEdu's online presence, the home page is designed to welcome visitors and provide an intuitive starting point for navigating the site. It showcases key features, latest updates, and essential information to engage and guide users effectively."
            ],
            "About Us" => [
                "page" => "about.php",
                "description" => "Delve into the rich history and ethos of ZulEdu with the 'About Us' section. Here, visitors can explore the institution's founding principles, its journey, and the dedicated individuals shaping its vision. It's a narrative that fosters connection and understanding."
            ],
            "Admission Information" => [
                "page" => "admission.php",
                "description" => "Navigating the educational journey begins with understanding the admission process. The 'Admission Information' section provides a comprehensive guide, outlining requirements, procedures, and timelines. Prospective students and parents can find everything they need to embark on their ZulEdu experience."
            ],
            "Academics Overview" => [
                "page" => "academics.php",
                "description" => "The academic hub of ZulEdu, the 'Academics Overview' is a treasure trove of information about courses, faculty, research, and extracurricular opportunities. It serves as a compass for students, guiding them through the diverse academic landscape and fostering a passion for knowledge."
            ],
            "Photo Galleries" => [
                "page" => "galleries.php",
                "description" => "Immerse yourself in the vibrant tapestry of ZulEdu's culture and community through the captivating 'Photo Galleries'. Here, snapshots of events, celebrations, and student life come together to form a visual narrative that transcends words, offering a glimpse into the spirit of ZulEdu."
            ],
        ];

        $results = array();

        if (!empty($searchTerm)) {

            foreach ($data as $title => $info) {
                // Check if the search term is present in either the title or the description
                if (stripos($title, $searchTerm) !== false || stripos($info['description'], $searchTerm) !== false) {
                    $results[$title] = $info;
                }
            }

            if (!empty($results)) {
                echo "<div style='margin-top: 20px;'>";
                echo "<ul>";
                foreach ($results as $title => $info) {
                    echo "<li>";
                    echo "<a href='{$info['page']}'><strong>$title</strong></a>";
                    echo "<p>{$info['description']}</p>";
                    echo "</li>";
                }
                echo "</ul>";
                echo "</div>";
            } else {
                echo "<p>No results found.</p>";
            }
        } else {
            echo "<p>Please enter a search term.</p>";
        }
    }
    ?>


</div>

<?php
require('footer.php');
?>