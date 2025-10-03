<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Selection Summary</title>
    <style>
        html {
            background-color: floralwhite;
        }
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: #213638;
            background-color: white;
            border: 5px solid, #cfe7e5;
            width: 70%;
            padding: 2em;
            margin: 40px auto;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 3px solid lightgrey;
            text-align: left;
            padding: 7px;
        }
    </style>
</head>
<body>
    <h1>Travel Selection Summary</h1>
    <?php
    if($_GET) {
        echo "<h2>Name-Value pairs:</h2>";
        //print_r($_GET);
    }
    if($_POST) {
        echo "<h2>POST Array:</h2>";
    }
    ?>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            <!-- for $_GET -->
            <?php
            foreach($_GET as $key => $value) { ?>
                <?php if(is_array($value)) {?>
                    <!-- makes a new row with the name and values in a new line -->

                        <tr>
                            <td><?php echo $key; ?></td>
                            <td><?php foreach ($value as $v) { 
                                        echo $v . "<br>"; 
                                } ?></td>
                        </tr>
                <?php }?>
                <tr>
                    <td><?php echo $key; ?></td>
                    <td><?php echo $value; ?></td>
                </tr>
            <?php unset($_GET[$key]); ?>
            <?php } ?>

            <!-- for $_POST -->
             <?php foreach($_POST as $keyP => $valueP) { ?>
                <?php if(is_array($valueP)) {?>
                        <tr>
                            <td><?php echo $keyP; ?></td>
                            <td><?php foreach ($valueP as $v) { 
                                        echo $v . "<br>"; 
                                } ?></td>
                        </tr>
                <?php }?>
                <tr>
                    <td><?php echo $keyP; ?></td>
                    <td><?php echo $valueP; ?></td>
                </tr>
             <?php } ?>
        </tbody>
    </table>
</body>
</html>