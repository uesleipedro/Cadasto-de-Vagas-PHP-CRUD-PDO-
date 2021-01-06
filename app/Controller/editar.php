<?php

include __DIR__ . '/../../vendor/autoload.php';

define('TITLE', 'Editar vaga');

use \App\Model\Vaga;

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
}

$objVaga = Vaga::getVaga($_GET['id']);

if (!$objVaga instanceof Vaga) {
    header('location: index.php?status=error');
    exit;    
}

if (isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])) {

    $objVaga->titulo = $_POST['titulo'];
    $objVaga->descricao = $_POST['descricao'];
    $objVaga->ativo = $_POST['ativo'];
    $objVaga->atualizar();

    header('location: ../../index.php?status=success');
    exit;
}

include __DIR__ . '/../View/header.php';
include __DIR__ . '/../View/formulario.php';
include __DIR__ . '/../View/footer.php';
