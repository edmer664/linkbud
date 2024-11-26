<?php

require_once '../models/Link.php';
session_start();

$mode = isset($_GET['mode']) ? $_GET['mode'] : '';
$link = new Link();

switch ($mode) {
    case 'read':
        if (isset($_GET['id'])) {
            $result = $link->read(['id' => $_GET['id']]);
        } else {
            $result = $link->read();
        }
        $_SESSION['result'] = $result;
        header('Location: /path/to/your/read/page');
        break;

    case 'create':
        $data = $_POST;
        $link->create($data);
        $_SESSION['message'] = 'Link created successfully';
        header('Location: /path/to/your/create/page');
        break;

    case 'update':
        if (isset($_GET['id'])) {
            $data = $_POST;
            $link->update(['id' => $_GET['id']], $data);
            $_SESSION['message'] = 'Link updated successfully';
            header('Location: /path/to/your/update/page');
        } else {
            $_SESSION['message'] = 'ID is required for updating';
            header('Location: /path/to/your/update/page');
        }
        break;

    case 'delete':
        if (isset($_GET['id'])) {
            $link->delete(['id' => $_GET['id']]);
            $_SESSION['message'] = 'Link deleted successfully';
            header('Location: /path/to/your/delete/page');
        } else {
            $_SESSION['message'] = 'ID is required for deleting';
            header('Location: /path/to/your/delete/page');
        }
        break;

    default:
        $_SESSION['message'] = 'Invalid mode';
        header('Location: /path/to/your/error/page');
        break;
}
?>
