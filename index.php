

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

        <div class="allposts">
            <h3>See All Posts:</h3>
            <ul>
                <li><a href="post.php">Post PHP</a></li>
                <li><a href="#">Filler Post</a></li>
            </ul>
        </div>

    </main>

<?php include 'footer.php';?>

</body>


</html>