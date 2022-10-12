<!DOCKTYPE html>
<head>
    <meta charset="UTF-8">
    <title>kartkówka</title>
</head>
<body>
    <?php
        $con = new mysqli("51.123.43.245", "admin", "123456", "quiz");
        $res = $con->query("SELECT content FROM questions");
        $rows = $res->fetch_array();
            for($i=0; $i<count[$rows]; $i++){
                echo $rows[$i]["content"];
            }
    
        $con = new mysqli("51.123.43.245", "admin", "123456", "quiz");
        $res = $con->query("SELECT content FROM answers");
        $rows = $res->fetch_array();
            for($i=0; $i<count[$rows]; $i++){
                echo $rows[$i]["content"];
            }
    ?>
</body>