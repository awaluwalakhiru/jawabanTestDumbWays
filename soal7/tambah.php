<?php

$conn = mysqli_connect('localhost', 'root', '', 'app_quick_count');
$id = $_POST['id'];
$query = "UPDATE candidates SET earned_vote= earned_vote+1 WHERE id='$id'";
$kueri = mysqli_query($conn, $query);

switch ($id) {
	case 1:
		echo "data".$id."berhasil ditambah";
		break;
		case 2:
		echo "data".$id."berhasil ditambah";
		break;
			case 3:
		echo "data".$id."berhasil ditambah";
		break;	
		case 4:
		echo "data".$id."berhasil ditambah";
		break;	
		case 5:
		echo "data".$id."berhasil ditambah";
		break;

	default:
		echo "data gagal ditambah";
				break;
}