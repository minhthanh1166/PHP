<?php
require_once("../database/connect.php");

$id = $_GET["id"];
$sql = "SELECT * FROM person_table WHERE id = {$id}";
$result = $connect->query($sql);

if(!empty($_POST)) {
    $hoten = $_POST['hoten'];
    $tuoi = $_POST['tuoi'];
    $gioitinh = $_POST['gioitinh'];
    $quequan = $_POST['quequan'];
    $sql1 = "UPDATE person_table SET hoten = '{$hoten}', gioitinh={$gioitinh}, tuoi={$tuoi}, quequan='{$quequan}' Where id={$id}";

    $result1 = $connect->query($sql1);
    if ($result1) {
        header("Location: ../index.php");
        exit();
    } else {
        echo "Error: " . $connect->error;
    }

}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

<div class="container my-5 w-50">
    <div class="content mb-5">
        <h1 class="text-center fw-bold">Sửa danh sách nhân viên</h1>
    </div>
    <form action="" method="post">
        <?php if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            ?>
        <div class="mb-3">
            <label for="hoten" class="form-label">Họ và tên</label>
            <input type="text" class="form-control" name="hoten" value="<?= $row["hoten"] ?>">
            <input type="hidden" class="form-control" name="id">
        </div>
        <div class="mb-3">
            <label for="tuoi" class="form-label">Tuổi</label>
            <input type="text" class="form-control" name="tuoi" value="<?= $row["tuoi"] ?>">
        </div>
        <div class="d-flex">
            <div class="form-check">
                <input class="form-check-input" type="radio" id="nam" name="gioitinh" value="0"
                <?php

                if($row["gioitinh"] == 0){
                    echo "checked";
                }
                ?>
                <label class="form-check-label" for="nam">
                    Nam
                </label>
            </div>
            <div class="form-check mx-3">
                <input class="form-check-input" type="radio"  id="nu" name="gioitinh" value="1"
                    <?php
                    if($row["gioitinh"] == 1){
                        echo "checked";
                    }
                    ?>
                >
                <label class="form-check-label" for="nu">
                    Nữ
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label for="quequan" class="form-label">Quê quán</label>
            <input type="text" name="quequan" class="form-control" id="quequan"  value="<?= $row["quequan"] ?>">
        </div>
        <?php } ?>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script>
</script>


<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
</body>

</html>