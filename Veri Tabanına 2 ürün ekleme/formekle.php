<h3>Telefon Tablosuna</h3>
<?php
     include('dbaglan.php');
if(isset($_POST['telefon'])){
    $marka=$_POST['marka'];
    $model=$_POST['model'];
    $renk=$_POST['renk'];
    $özellik=$_POST['özellik'];
    $fiyat=$_POST['fiyat'];

    $query=$conn->query("INSERT INTO telefon(marka,model,renk,özellik,fiyat) VALUES ('$marka','$model','$renk','$özellik','$fiyat')", PDO::FETCH_ASSOC); //Veri tabanına veri ekleme sorgusu
    if ($query) {
        echo 'Ekleme Başarılı Bir Şekilde Gerçekleşti';
    }
    else {
        echo 'Mallesef veri tabanına ekleme şuanda gerçekleşmiyor';
    }
}
?>
<h3>Ayakkabı Tablosuna</h3>
<?php
if (isset($_POST['ayakkabı'])) {
   

    $marka=$_POST['marka'];
    $sayı=$_POST['sayı'];
    $renk=$_POST['renk'];
    $fiyat=$_POST['fiyat'];

    $query=$conn->query("INSERT INTO ayakkabı(marka,sayı,renk,fiyat) VALUES ('$marka','$sayı','$renk','$fiyat')", PDO::FETCH_ASSOC); //Veri tabanına veri ekleme sorgusu
    if ($query) {
        echo 'Ekleme Başarılı Bir Şekilde Gerçekleşti';
    }
    else {
        echo 'Mallesef veri tabanına ekleme şuanda gerçekleşmiyor';
    }
}
else {
    echo 'Mallesef veri tabanına ekleme şuanda gerçekleşmiyor';

}
?>