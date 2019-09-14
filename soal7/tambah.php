<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'app_quick_count');
$id = $_POST['id'];
$query = "UPDATE candidates SET earned_vote= earned_vote+1 WHERE id='$id'";
$kueri = mysqli_query($conn, $query);

if ($kueri) {
    echo "Data berhasil diupdate";
} else {
    echo "Data gagal diupdate";
}
