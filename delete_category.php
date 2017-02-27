<?php
require_once('database.php');

// Get IDs
$category_name = filter_input(INPUT_POST, 'category_name');

// Delete the category from the database
if ($category_name != false) {
    $query = 'DELETE FROM categories_guitar1
              WHERE categoryName = :category_name';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_name', $category_name);
    $statement->execute();
    $statement->closeCursor();    
}else {
	$error= ' syntax error';
	include('error.php');
}	
// Display the Category List page
include('category_list.php');
?>
