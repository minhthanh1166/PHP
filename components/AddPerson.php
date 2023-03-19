<?php
require_once "../database/connect.php";

if (!empty($_POST)) {
    $hoten = $_POST['hoten'];
    $tuoi = $_POST['tuoi'];
    $gioitinh = $_POST['gioitinh'];
    $quequan = $_POST['quequan'];
    $sql = "INSERT INTO person_table (hoten, tuoi, gioitinh, quequan) VALUES ('{$hoten}', {$tuoi}, {$gioitinh}, '{$quequan}')";

    $result = $connect->query($sql);
    if ($result) {
        header("Location: ../index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error();
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
            <h1 class="text-center fw-bold">Nhập danh sách nhân viên</h1>
        </div>
        <form action="AddPerson.php" method="post">
            <div class="mb-3">
                <label for="hoten" class="form-label">Họssss và tên</label>
                <input type="text" class="form-control" name="hoten">
                <input type="hidden" class="form-control" name="id">
            </div>
            <div class="mb-3">
                <label for="tuoi" class="form-label">Tuổi</label>
                <input type="text" class="form-control" name="tuoi">
            </div>
            <div class="d-flex">
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" id="nam" name="gioitinh" checked>
                    <label class="form-check-label" for="nam">
                        Nam
                    </label>
                </div>
                <div class="form-check mx-3">
                    <input class="form-check-input" type="radio" value="1" id="nu" name="gioitinh">
                    <label class="form-check-label" for="nu">
                        Nữ
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="quequan" class="form-label">Quê quán</label>
                <input type="text" name="quequan" class="form-control" id="quequan">
            </div>
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