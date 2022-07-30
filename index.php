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

    <div class="container d-flex pt-5 justify-content-center align-items-center w-100 h-100vh mt-3 ">
        <form class="w-50 border border-dark p-5 " action="action.php" method="POST">
            <div class="mb-3 ">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" require placeholder="Enter your name...">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" name="phone" require placeholder="Enter Your Phone Number...">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" require placeholder="Enter Your email...">
            </div>
            <div class="">

                <input class="mb-3 btn btn-primary" type="submit" name="submit" value="submit">
            </div>
        </form>
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