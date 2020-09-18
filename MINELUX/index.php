<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <main>
        <section class="gallery-links">
            <div class="wrapper">
                <div class="gallery-container">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "myminette";

                $conn = mysqli_connect("$servername", $username, $password, $dbname);
                $sql = "SELECT username, photos, (YEAR(CURDATE())-date_format(datenaiss, '%Y')) as datenaiss, ville FROM membres ORDER BY orderGallery DESC";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "SQL statement failed!";
                } else {
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<a href="profilesminette.php?username='.$row["username"].'">
                        <div style="background-image: url(images/gallery/'.$row["photos"].');"></div>
                        <h3>'.$row["username"].'</h3>
                        <h4>'.$row["ville"].'</h4>
                        <h3>'.$row["datenaiss"].'</h3>
                    </a>';
                    }
                }
                ?>
                </div>
            </div>

        </section>
    </main>
</body>
</html>