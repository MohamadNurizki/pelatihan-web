<?php
    session_start(); // Start session nya
    date_default_timezone_set('Asia/Jakarta');
    include "config/connection.php"; // Load file koneksi.php
    
    if(isset($_POST['proses_login'])){
        $user_name = $_POST['user_name']; // Ambil value username yang dikirim dari form
        $user_pass = $_POST['user_pass']; // Ambil value password yang dikirim dari form
        //$password = md5($password); // Kita enkripsi (encrypt) password tadi dengan md5
        
        // Buat query untuk mengecek apakah ada data user dengan username dan password yang dikirim dari form
        $sql = $db->prepare("SELECT * FROM tb_user WHERE BINARY user_name=:user_name AND BINARY user_pass=:user_pass ");
        $sql->bindParam(":user_name", $user_name);
        $sql->bindParam(":user_pass", $user_pass);
        $sql->execute(); // Eksekusi querynya
        
        $row = $sql->fetch(); // Ambil datanya dari hasil query tadi
        
        // Cek apakah variabel $data ada datanya atau tidak
        if(!empty($row) && $row['user_level']==0 ){ // Jika tidak sama dengan empty (kosong)
            $_SESSION['user_name'] = $row['user_name']; // Set session untuk username (simpan username di session)
            $_SESSION['user_level'] = $row['user_level']; // Set session untuk role (simpan role di session)
        
            header("location: admin/admin-home.php"); // Kita redirect ke halaman home
        }
        elseif(!empty($row) && $row['user_level']==1 ){ // Jika tidak sama dengan empty (kosong)
            $_SESSION['user_name'] = $row['user_name']; // Set session untuk username (simpan username di session)
            $_SESSION['user_level'] = $row['user_level']; // Set session untuk role (simpan role di session)
        
            header("location: user/user-home.php"); // Kita redirect ke halaman home
        }
        else{ // Jika $data nya kosong
            // Buat sebuah cookie untuk menampung data pesan kesalahan
        
            header("location: ./?auth=false"); // Redirect kembali ke halaman index.php
            //echo "2";
        }
    }
    else{ // Jika $data nya kosong
        // Buat sebuah cookie untuk menampung data pesan kesalahan
    
        header("location: ./?auth=false"); // Redirect kembali ke halaman index.php
        //echo "3";
    }
?>