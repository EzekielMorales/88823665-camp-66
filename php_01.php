<?php
//แสดงตารางสูตรคูณ ตามแม่สูตรคูณที่ระบุในตัวแปร
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <?php
            $my_var = 2; // ตัวแปรแม่สูตรคูณ
            ?>
            <h1>ตารางสูตรคูณแม่ <?php echo $my_var; ?></h1>
            <?php 
            // เริ่มลูปแสดงผล
            for($i = 1 ; $i <= 12 ; $i++) { 
            ?>
            <div class="row">
                <div class="col h2 text-end">
                    <?php echo $my_var . " x " . $i . " = "; ?>
                </div>
                <div class="col h2 text-start">
                    <?php echo $my_var * $i; ?>
                </div>
            </div>
            <?php 
            } // ปิดลูป
            ?>
        </div>
    </body>   
</html>
