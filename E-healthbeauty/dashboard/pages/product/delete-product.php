<?php

require_once "../../../db.php";

function delete($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM product WHERE id = $id");

    return mysqli_affected_rows($conn);
};


$id = $_GET['id'];

if (delete($id) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'product.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = 'product.php';
        </script>
    ";
}
