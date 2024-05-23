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
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <h1 class="text-4xl">
        Library Management System
    </h1>
    <hr>
    <br>
    <section class="p-2">
        <h3 class="text-2xl">
            Create New Book
        </h3>
        <div>
            <form method="post">
                <input type="text" placeholder="Title" name="book_title" required class="p-2">
                <input type="text" placeholder="Author" name="book_author" required class="p-2">
                <input type="datetime" placeholder="Publication Year" name="book_pub_year" required class="p-2">
                <input type="text" placeholder="Genre" name="book_genre" required class="p-2">
                <br>
                <button type="submit" class="bg-slate-300 hover:bg-blue-300 p-1 rounded-lg">
                    Create
                </button>
            </form>
        </div>
    </section>
    <br>
    <section class="p-2">
        <h3 class="text-2xl">All Books</h3>
        <div class="t-head border-b-2 border-black">
            <div>ID</div>
            <div>Title</div>
            <div>Author</div>
            <div>Publication Year</div>
            <div>Genre</div>
        </div>
        <ul class="book-list">
            <li id="<?php echo $mock_book->getId();?>">
                <ul class="t-row">
                    <li> <?php echo $mock_book->getId();?></li>
                    <li> <?php echo $mock_book->getTitle();?></li>
                    <li> <?php echo $mock_book->getAuthor();?></li>
                    <li> <?php echo $mock_book->getPublicationYear()->format("d-m-Y");?></li>
                    <li> <?php echo $mock_book->getGenre();?></li>
                    <li>
                        <form method="get">
                            <input type="text" value="<?php echo $mock_book->getId();?>" hidden required>
                            <button type="submit" class="bg-slate-300 hover:bg-blue-300 p-1 rounded-lg" name="update">
                                Update
                            </button>
                        </form>
                    </li>
                    <li>
                        <form action="" method="post">
                            <input type="text" value="<?php echo $mock_book->getId();?>" hidden required>
                            <button type="submit" class="bg-slate-300 hover:bg-red-300 p-1 rounded-lg" name="delete">
                                Delete
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
            <li id="<?php echo $mock_book->getId();?>">
                <ul class="t-row">
                    <li> <?php echo $mock_book->getId();?></li>
                    <li> <?php echo $mock_book->getPublicationYear()->format("d-m-Y");?></li>
                    <li> <?php echo $mock_book->getGenre();?></li>
                    <li>
                        <form method="get">
                            <input type="text" value="<?php echo $mock_book->getId();?>" hidden required>
                            <input type="submit" value="Update">
                        </form>
                    </li>
                    <li>
                        <form action="" method="post">
                            <input type="text" value="<?php echo $mock_book->getId();?>" hidden required>
                            <input type="submit" value="Delete">
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</body>
</html>