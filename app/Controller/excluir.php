<?php

include __DIR__ . '/../../vendor/autoload.php';

use \App\Model\Vaga;

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: ../../index.php?status=error');
    exit;
}

$objVaga = Vaga::getVaga($_GET['id']);

if (!$objVaga instanceof Vaga) {
    header('location: ../../index.php?status=error');
    exit;    
}

if (isset($_POST['excluir'])) {

   $objVaga->excluir();

   header('location: ../../index.php?status=success');
    
 exit;
}

include __DIR__ . '/../View/header.php';
include __DIR__ . '/../View/confirmar-exclusao.php';
include __DIR__ . '/../View/footer.php';
