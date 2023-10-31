<?php 

require_once '../model/model.php';

if (deleteproduct($_GET['id'])) {
    header('Location: ../view/show_all_product.php');
}

 ?>