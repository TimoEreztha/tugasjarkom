<?php
    $conn = mysqli_connect("localhost","root","","data_guru");
    function query ($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }
    function tambah ($data) {
        global $conn;
        $nama = htmlspecialchars($data['nama']);
        $jeniskelamin = htmlspecialchars($data['jenis_kelamin']);
        $tambah = "INSERT INTO guru VALUES (
                '','$nama','$jeniskelamin')
        ";
         mysqli_query($conn, $tambah);
         return mysqli_affected_rows($conn);
    }
    function hapus($id) {
        global $conn;
        mysqli_query($conn, "DELETE  FROM guru  WHERE id_guru= $id");
        return mysqli_affected_rows($conn);
    }
function ubah ($data) {
    global $conn;
    $id = $data['id_guru'];
    $nama = htmlspecialchars($data['nama']);
    $jeniskelamin = htmlspecialchars($data['jenis_kelamin']);
    $tambah = "UPDATE guru SET 
                nama = '$nama',
                jenis_kelamin = '$jeniskelamin'
                WHERE id_guru = $id
    ";
     mysqli_query($conn, $tambah);
     return mysqli_affected_rows($conn);
}
$koneksi = mysqli_connect("localhost","root","","login");

?>