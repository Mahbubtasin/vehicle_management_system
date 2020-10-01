<?php
session_start();

include_once ('../../vendor/autoload.php');
use University\admin\category;

$add = new category();
$category = $add->addCategory();

if ($category)
{
    header('Location: ../../front/admin/pages/add_category.php');
}
else
{
    echo "<script>alert('Category Add Failed.....')</script>";
}