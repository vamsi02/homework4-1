<?php
// Get the category data
$category_name = filter_input(INPUT_POST, 'category_name');


// Validate inputs
if ($category_name == null || $category_name == false ){
    $error = "Invalid category name. Check all fields and try again.";
    include('error.php');
} else {
	require_once('database.php');

	// Add the category to the database  
	$query = 'INSERT INTO categories_guitar1
                     (categoryName)
                  VALUES
                    (:category_name)';
	$statement = $db->prepare($query);
	$statement->bindValue(':category_name',$category_name);
	$statement->execute();
	$statement->closeCursor();
    //  Display the Product List page
	include('category_list.php');
}
?>
