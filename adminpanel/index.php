<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>
<style>
    .kotak {
        border: solid;
    }
    .summary-kategori{
        background-color: #0a6b4a;
    }
    .no-decoration{
        text-decoration:none ;
    }

</style>
<body>
        <?php require "navbar.php"; ?>
        <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Home</li>
            </ol>
        </nav>

        <div class = "container mt-5">
            <div class = "row">
                <div class = "col-lg-4 kotak summary-kategori">
                    <div class ="row">
                        <div class= "col-6"></div>
                        <div class="col-6 text-white">
                            <h3 class="fs-2">kategori</h3>
                            <p class="fs-4">kategori</p>
                            <a href="kategori.php" class="text-white no-decoration">Lihat Detail</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>


        <script src="../css/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>