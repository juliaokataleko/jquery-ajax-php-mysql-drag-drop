
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery Drag and Drop</title>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-ui.js"></script>    
    <script src="assets/js/app.js"></script>
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
</head>
<body>
    <div id="container">
    <?php require_once('db.php'); ?>
        <div class="list">
            <div id="response">
            </div>
            <ul id="taskList">
                <?php 
                    while($row = $tasks->fetch_assoc()):
                        $id = $row['id'];
                        $task = $row['task']; ?>

                        <li id="arrayorder_<?=$id;?>">
                            <?=$task;?>
                            <div class="clear"></div>
                        </li>
                    
                    <?php endwhile; ?>
            </ul>
        </div>
    </div>
</body>
</html>