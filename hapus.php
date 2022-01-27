<?php
    include 'koneksi.php';
    if (isset($_GET['idp'])) {
        $produk =mysqli_query($conn,"SELECT gambar FROM tb_mobil WHERE id_kamar= '".$_GET['idp']."' ");
        $p = mysqli_fetch_object($produk);
        unlink('./produk/'.$p->gambar);

        $delete =mysqli_query($conn, "DELETE FROM tb_mobil WHERE id_kamar ='".$_GET['idp']."' ");
        echo '<script>window.location="data.php"</script>';
    }
?>