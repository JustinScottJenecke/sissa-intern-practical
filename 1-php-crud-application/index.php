<?php
    include __DIR__ ."/src/model/Book.php";
    include __DIR__ ."/src/util/error_logger.php";
   
    $mock_book = new Book("#429134932", "dummy book", "the author", new DateTime(), "default");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1 class="text-4xl">
        Library Management System
    </h1>
    <hr>
    <section>
        <h3 class="text-2xl">
            Create New Book
        </h3>
        <div>
            <form method="post">
                <input type="text" placeholder="Title" name="book_title" required>
                <input type="text" placeholder="Author" name="book_author" required>
                <input type="datetime" placeholder="Publication Year" name="book_pub_year" required>
                <input type="text" placeholder="Genre" name="book_genre" required>
            </form>
        </div>
    </section>
    <section>
        <h3 class="text-2xl">All Books</h3>
        <ul>
            <li id="<?php echo $mock_book->getId();?>">
                <h4 class="text-lg">
                    <?php echo $mock_book->getTitle();?>
                </h4>
                <ul>
                    <li>Author: <?php echo $mock_book->getId();?></li>
                    <li>Publication Year: <?php echo $mock_book->getPublicationYear()->format("d-m-Y");?></li>
                    <li>Genre: <?php echo $mock_book->getGenre();?></li>
                </ul>
                <div>
                    <form method="get">
                        <input type="text" value="<?php echo $mock_book->getId();?>" hidden required>
                        <input type="submit" value="Update">
                    </form>
                    <form action="" method="post">
                        <input type="text" value="<?php echo $mock_book->getId();?>" hidden required>
                        <input type="submit" value="Delete">
                    </form>
                </div>
            </li>
        </ul>
    </section>
</body>
</html>