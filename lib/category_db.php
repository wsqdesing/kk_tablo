<?php
require_once "db.php";
if (isset($_POST['ekle'])) {
    if (isset($_POST["title"]) && isset($_POST["parent_id"])) {
        $prepare=$db->prepare("INSERT INTO category SET title=:title, parent_id=:parent_id");
        $insert=$prepare->execute(
            array(
                "title"     => $_POST["title"],
                "parent_id" => $_POST["parent_id"]
            )
        );
        if ($insert) {
           header("Location:../index.php");
        }
        else {
            echo "Ekleme sırasında sorun oluştu";
        }
     }
     else {
         echo "Aslında öyle bir yer yok olmadı";
     }
}
elseif (isset($_POST['sil'])) {
    if (isset($_POST["parent_id"])) {
        $prepare=$db->prepare("DELETE FROM category WHERE id=:id");
        $delete=$prepare->execute(
            array(
                "id"     => $_POST["parent_id"]
            )
        );
        if ($delete) {
           header("Location:../index.php");
        }
        else {
            echo "Silme sırasında sorun oluştu";
        }
     }
     else {
        echo "Aslında öyle bir yer yok olmadı";
    }
}
elseif (isset($_POST['guncelle'])) {
    if (isset($_POST["new_title"]) && isset($_POST["old_title"])) {

        $prepare=$db->prepare("UPDATE category SET title=:new_title WHERE id=:old_title");
        $update=$prepare->execute(
            array(
                "new_title"     => $_POST["new_title"],
                "old_title"     => $_POST["old_title"] 
            )
        );
        if ($update) {
           header("Location:../index.php");
        }
        else {
            echo "Güncelleme sırasında sorun oluştu";
        }
     }
     else {
        echo "Aslında öyle bir yer yok olmadı";
    }
}



?>