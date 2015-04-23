<html>
    <head>
        <title>Laravel - Using Eloquent</title>
        <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
        <style>
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <table>
                    <thead>
                        <td>SL No</td>
                        <td>Title</td>
                        <td>Author Name</td>
                        <td>Published On</td>
                    </thead>

                    <?php foreach($books as $key => $book) { ?>
                    <tr>
                        <td><?php echo $key+1 ?></td>
                        <td><?php echo $book['title'] ?></td>
                        <td><?php echo $book['author'] ?></td>
                        <td>
                            <?php
                                  echo date('jS F Y', strtotime($book['created_at']))
                            ?>
                        </td>
                    </tr>
                <?php  } ?>
                </table>
            </div>
        </div>
    </body>
</html>
