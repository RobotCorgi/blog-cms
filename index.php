

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css" />
<title>Hello World</title>

</head>

<body>
  <!-- remove to test PHP include header and nav   
    <header>
        <h1>Hello World</h1>
        <div class="headerArea flex-center">
            <p>Header area</p>
        </div>
    </header>
        

    <nav>
        <ul>
            <li><a href="index.php">Index PHP</a></li>
            <li><a href="post-submission.php">Post Submission PHP</a></li>
            <li><a href="post.php">Post PHP</a></li>
        </ul>
    </nav>
-->
<?php include 'header.php';?>
<?php include 'nav.php';?>

    <main>

<?php
    function getPostTitlesFromDatabase() {
        $postTitles = array("Blog Post 1", "Blog Post 2", "Blog Post 3");
        return $postTitles;
    }
?>

        <div class="allposts">
            <h3>See All Posts:</h3>
            <ul>
                <?php
                    $postTitles = getPostTitlesFromDatabase();

                        foreach($postTitles as $postTitle) {
                            echo "<li><a href='post.php?title='" . $postTitle . "'>" . $postTitle . "</a></li>";
                    }
                ?>

</ul>
        </div>

    </main>

<?php include 'footer.php';?>

</body>


</html>