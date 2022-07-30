<?php
$con = mysqli_connect('localhost', 'root', '', 'login');
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>

    <div class="container d-flex justify-content-center pt-5 mt-3 ">
        <div class="row">
            <div class="col">
                <?php
                $sql = "SELECT * FROM student";
                $query =  mysqli_query($con, $sql);

                echo "<table class='table table-dark text-light '>
                <tr class='text-danger text-center'>
                    <th>id</th>
                    <th>Name</th>
                    <th>phone</th>
                    <th>Email</th>
                </tr>
                ";
                while ($data = mysqli_fetch_assoc($query)) {
                    $id = $data['id'];
                    $name = $data['name'];
                    $phone = $data['phone'];
                    $email = $data['email'];

                    echo "<tr >
                            <td>$id</td>
                            <td>$name</td>
                            <td>$phone</td>
                            <td>$email</td>
                        </tr>";
                };
                ?>
            </div>
        </div>






        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
            integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
            integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
        </script>
</body>

</html>