<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container mt-5">
            <h1>แสดงเลขคู่-คี่ที่กำหนด</h1>
            <form method="post" class="mb-4">
                <div class="row mb-3">
                    <div class="col">
                        <label for="start" class="form-label">ค่าเริ่มต้น</label>
                        <input type="number" id="start" name="start" class="form-control" placeholder="ใส่ค่าเริ่มต้น" required>
                    </div>
                    <div class="col">
                        <label for="end" class="form-label">ค่าจบ</label>
                        <input type="number" id="end" name="end" class="form-control" placeholder="ใส่ค่าจบ" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-info">แสดงผล</button>
            </form>

            <?php 
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $start = intval($_POST['start']);
                $end = intval($_POST['end']);

                if ($start <= $end) {
                    echo '<h2>ผลลัพธ์</h2>';
                    for ($i = $start; $i <= $end; $i++) {
                        if($i % 2 == 0) {
                            $result = "เลขคู่" ;
                        } else{
                            $result = "เลขคี่" ;
                        }
                        ?>
                        <div class="row">
                            <div class="col h5 text-end">
                                <?php echo $i; ?>
                            </div>
                            <div class="col h5 text-start">
                                <?php echo $result; ?>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo '<div class="alert alert-danger">กรุณาใส่ค่าเริ่มต้นให้น้อยกว่าหรือเท่ากับค่าจบ</div>';
                }
            }
            ?>
        </div>
    </body>   
</html>
