<?php
session_start();

include_once ('../../vendor/autoload.php');
use University\admin\category;
$id = $_GET['id'];
$del = new category();
$delete = $del->delete_category($id);

if ($delete)
{
    header('Location: ../../front/admin/pages/add_category.php');
}
else
{
    echo "<script>alert('Category delete failed.....')</script>";
}
