<?php
session_start();
require 'koneksi.php';

if(isset($_POST['hapus_data_siswa']))
{
    $id_siswa = mysqli_real_escape_string($con, $_POST['hapus_data_siswa']);

    $query = "DELETE FROM siswa WHERE id='$id_siswa' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Data Siswa Berhasil Di Hapus";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Siswa Gagal Di Hapus";
        header("Location: index.php");
        exit(0);
    }
}


if(isset($_POST['ubah_data_siswa']))
{
    $id_siswa = mysqli_real_escape_string($con, $_POST['id_siswa']);
    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $no_hp = mysqli_real_escape_string($con, $_POST['no_hp']);
    $jurusan = mysqli_real_escape_string($con, $_POST['jurusan']);
    $kelas = mysqli_real_escape_string($con, $_POST['kelas']);
    $alamat = mysqli_real_escape_string($con, $_POST['alamat']);
    
   
    $query ="UPDATE siswa  SET nama='$nama', email='$email', no_hp='$no_hp', jurusan='$jurusan', kelas='$kelas', alamat='$alamat' WHERE id='$id_siswa' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Data Siswa Berhasil DiUbah";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Siswa Gagal DiUbah";
        header("Location: index.php");
        exit(0);
    }
}


if(isset($_POST['simpan']))
{
    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $no_hp = mysqli_real_escape_string($con, $_POST['no_hp']);
    $jurusan = mysqli_real_escape_string($con, $_POST['jurusan']);
    $kelas = mysqli_real_escape_string($con, $_POST['kelas']);
    $alamat = mysqli_real_escape_string($con, $_POST['alamat']);

    $query = "INSERT INTO siswa (nama,email,no_hp,jurusan,kelas,alamat) VALUES 
    ('$nama','$email','$no_hp','$jurusan','$kelas','$alamat')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Data Siswa Berhasil Disimpan";
        header("Location: tambah_siswa.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Data Siswa Gagal Disimpan";
        header("Location: tambah_siswa.php");
        exit(0);
    }
   
}