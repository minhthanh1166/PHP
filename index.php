<?php
require_once("./database/connect.php");
// Select data from table
$sql = "SELECT * FROM person_table";
$result = $connect->query($sql);
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

    <style>
        html,
        body {
            font-family: Arial;
        }
    </style>
</head>

<body>
<header>
    <div class="container-fluid">
        <div class="content">
            <h1 class="text-center fw-bold">
                Danh sách nhân viên
            </h1>
        </div>
        <div class="container">
            <table class="table mt-5 table-hover">
                <thead class="bg-success text-light">
                <tr>
                    <th scope="col">#Id</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Tuổi</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Quê quán</th>
                    <th scope="col" colspan="2">Option</th>
                </tr>
                </thead>
                <tbody class="bg-secondary text-light">
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <th scope="row"><?php echo $row["id"]; ?></th>
                        <td><?php echo $row["hoten"]; ?></td>
                        <td><?php echo $row["tuoi"]; ?></td>
                        <td>
                            <?php
                            if ($row["gioitinh"] == 0) {
                                echo "Nam";
                            } else {
                                echo "Nữ";
                            }
                            ?>
                        </td>
                        <td><?php echo $row["quequan"]; ?></td>
                        <td>
                            <a class="btn btn-warning" href="./components/EditPerson.php?id=<?=$row["id"] ?>">Sửa</a>
                            <a class="btn btn-danger" href="./components/DeletePerson.php?id=<?=$row["id"] ?>">Xoá</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <div class="d-flex">
                <a href="./components/AddPerson.php" class="btn btn-primary">Add</a>
            </div>
        </div>
    </div>
</header>
<main>
</main>
<footer>
    <!-- place footer here -->
</footer>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
</body>

</html>