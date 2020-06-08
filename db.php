<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=blog_veritabani", "root", "");
     
     
} catch ( PDOException $e ){
     echo "Bir Hata Oluştu: ".$e->getMessage();
}
?>