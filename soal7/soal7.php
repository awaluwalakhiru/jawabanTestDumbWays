<?php
$conn = mysqli_connect('localhost', 'root', 'root', 'app_quick_count');
$query = "SELECT * FROM candidates";
$kueri = mysqli_query($conn, $query);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- styleku.css -->
    <link rel="stylesheet" href="css/style.css">

    <title>Aplikasi Quick Count</title>
</head>

<body>
    <div class="card text-center">
        <div class="card-header">
            Aplikasi Quick Count
        </div>
        <div class="card-body mb-sm-5">
            <?php while ($data = mysqli_fetch_assoc($kueri)) : ?>
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-8 col-sm-12">
                            <div class="card-body">
                                <div class="card">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><?= $data['name']; ?></li>
                                        <li class="list-group-item">Perolehan Suara : <?= $data['earned_vote']; ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 pt-md-5 pb-sm-3">
                            <button class="btn btn-primary" id="tambah" data-id="<?= $data['id']; ?>">Tombol Tambah</button>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="card-footer text-muted">
            Created By Awal Prasetyo @2019
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
        $(function() {
            $('button#tambah').click(function() {
                var id = $(this).data('id');
                $.ajax({
                    url: "http://localhost/testDumbWays/soal7/tambah.php",
                    method: 'POST',
                    data: {
                        id: id
                    },
                    success: function(data) {
                        alert(data);
                        window.location = 'http://localhost/testDumbWays/soal7/soal7.php';
                    }
                });
            });
        });
    </script>
</body>

</html>