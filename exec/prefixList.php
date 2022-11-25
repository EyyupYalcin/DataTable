<?php
/*
session_start();
ob_start();

$user_id = $_SESSION["mukellef_no"];
if ($user_id == "") {
    header("Location: index.html");
}
*/
include('../ayarlar.php');



$arama_kelime = isset($_POST["search"]["value"]) ? $_POST["search"]["value"] : ''; // Eğer boş değilse eklentinin arama kısmından yollanan değeri alıyoruz.
$siralama = isset($_POST["order"]) ? $_POST["order"] : ''; // Eğer boş değilse eklentinin sıralama kısmından yollanan değeri alıyoruz.
$length = isset($_POST["length"]) ? $_POST["length"] : ''; // Eğer boş değilse eklentinin sayfada kaç veri gösterileceği kısmından yollanan değeri alıyoruz.
$limit = isset($_POST["start"]) ? $_POST["start"] : '';
//var_dump($siralama);

//ana sorgu başlangıç
$sql = "SELECT * FROM paket_listesi";

$params = [];
//dataTable arama yapılırsa
if ($arama_kelime != "") {
    $sql .= ' WHERE paket_adi LIKE :arama1 OR hizmet_adi LIKE :arama2 OR kontor_adedi LIKE :arama3 OR birim_fiyati LIKE :arama4 OR toplam_fiyat LIKE :arama5';

    $params['arama1'] = "%" . $arama_kelime . "%";
    $params['arama2'] = "%" . $arama_kelime . "%";
    $params['arama3'] = "%" . $arama_kelime . "%";
    $params['arama4'] = "%" . $arama_kelime . "%";
    $params['arama5'] = "%" . $arama_kelime . "%";
}

$kolonlar = ['paket_liste_id', 'paket_adi', 'hizmet_adi', 'kontor_adedi', 'birim_fiyati', 'toplam_fiyat', 'olusturma_zamani'];
//limit ve sıralama

 $filter_sql =  $sql . ' ORDER BY '.$kolonlar[$siralama[0]["column"]].' '.strtoupper($siralama[0]["dir"]).' limit ' . $limit . ',' . $length;



//$filter_sql =  $sql . ' ORDER BY : order_column : order_type limit ' . $limit . ',' . $length;

    //$params['order_column'] =  $kolonlar[$siralama[0]["column"]];
    //$params['order_type'] =  strtoupper($siralama[0]["dir"]);


//sorgulatma
$prefix1 = $db->prepare($filter_sql);


$prefix1->execute($params);

$prefixs = $prefix1->fetchAll(PDO::FETCH_OBJ);

//echo $filter_sql;
//var_dump($prefixs);

unset($params['order_column']);
unset($params['order_type']);

//sorgudaki toplam sonuç sayısı
$prefix2 = $db->prepare($sql);
$prefix2->execute($params);
$sum_prefix = $prefix2->rowCount();

$data = [];
$limitx = $limit;
foreach ($prefixs as $prefix) { //sorgudan gelen ürünleri çevirerek tabloyu dolduruyoruz

    $veri = []; //dataTableye verileri göndereceğimiz dizi
    $limitx++;
    // sütun sütun sırayla diziye atarak tabloya yerleştiriyoruz
    $veri[] = $limitx;
    $veri[] = $prefix->paket_adi;
    $veri[] = $prefix->hizmet_adi;
    $veri[] = $prefix->kontor_adedi;
    $veri[] = $prefix->birim_fiyati;
    $veri[] = $prefix->toplam_fiyat;
    $veri[] = $prefix->olusturma_zamani;
    /*$veri[] = '<a type="button" title="Ön Ek Düzenle" onclick="prefixUpdate(' . $prefix->id . ')" class="btn btn-outline-success"><i class="fas fa-edit"></i></a>
  <a type="button" title="Ön Ek Sil" onclick="prefixDelete(' . $prefix->id . ')" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></a> 
  ';*/

    $data[] = $veri;
}

// sonucu döndürüyoruz
$json_data = array('draw' => intval($_POST["draw"]), 'recordsTotal' =>  $limit, 'recordsFiltered' =>  $sum_prefix, 'data' => $data);
echo json_encode($json_data);