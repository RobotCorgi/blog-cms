<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css" />
<title>Hello World</title>

</head>

<body>
     
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


    <main>
        <h3 class="form-title">Form:</h3>
        <div class="flex-center formbg">
                       
            <form action="#" method="get">

                <label for="title">Title:</label>
                <input type="text" id="title" name="title">

                <label for="author">Author:</label>
                <input type="text" id="author" name="author">
            
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" class="dates">

                <label for="textArea">Textarea Entry Area:</label>
            
                <textarea name="textArea" rows="7" cols="50" class="textArea">Textarea fill in this content later.</textarea>

            <div class="buttons">
                <button type="submit" value="Submit"class="submits">Submit</button>

                <button type="reset" value="Reset" class="resets">Reset</button>
            </div>

            </form>
        </div>
        <div class="allposts">
           
            <h3>See All Posts:</h3>
            <ul>
                <li><a href="post.php">Post PHP</a></li>
                
                <li><a href="#">Filler Post</a></li>
            </ul>
            
        </div>

       


    </main>  
    
    <footer>
        <div>
            <p>Footer area</p>
        </div>
        <div class="attribution">
            <p><a href="https://storyset.com/work">Work illustrations by Storyset</a></p>
        </div>
    </footer>


</body>


</html>