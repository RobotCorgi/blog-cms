
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css" />
<title>Post Submission Page</title>

</head>

<body>
     
<?php include 'header.php';?>
<?php include 'nav.php';?>


    <main>

    
        <?php
            function getPostDetailsFromDatabase() {

                $postDetails = array('title' => 'Blog Post #1',
                                    'content' => 'My first blog post. Lorem ipsum dark chocolate avacado ice cream is really great, especially Cado. Did you know that cats are crepuscular? That means they are most active during dawn and dusk.',
                                    'date' => '04/01/2022',
                                    'author' => 'stephiecarson');

                return $postDetails;
            }
        ?>

<?php

    $postDetails = getPostDetailsFromDatabase();

?>

        <div class="fullPost">
            <h2 class="postTitle"><?php echo $postDetails["title"]; ?></h2>
                <div class="postInfo">
                    <div class="contrastPostBG">
                        <div class="postAuthor">Author: <?php echo $postDetails["author"]; ?></div>
                        <div class="postDatePublished">Date Published: <?php echo $postDetails["date"]; ?></div>
                        <div class="postContents">Post Content: <p class="postContentsParagraph"><?php echo $postDetails["content"]; ?></p> 
                            <p class="postContentsParagraph">Paragraph within Contents. Violet is the complement of yellow.</p>
                            <p class="postContentsParagraph"><img src="images/PublishArticleGraphicImageInBroStyleByStorysetColorD5AFCBLightPurple.png" alt="Woman publishing an article online using her laptop" class="postFeaturedImage"></p>
                            <p class="postContentsParagraph">Paragraph within Contents. Red is the complement of green.</p>
                            <p class="postContentsParagraph">Paragraph after image. Within the post contents area. When complementary colors are combined, they often make neutral colors. This neutral is very useful for artists when color mixing.</p>
                            
                    </div>
                </div>
                </div>
        </div>
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