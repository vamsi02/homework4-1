<?php
require_once('database.php');

// Get all categories
$query = 'SELECT * FROM categories_guitar1
                       ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<header><h1>Product Manager</h1></header>
<main>
    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
        <td>
	<?php
	foreach($categories as $category){
	?>
	 <tr>
	      <td><?php echo $category['categoryName'];?></td>
	      <td><form action='delete_category.php' method='post'>
	      	<input type='hidden' name='category_name' value='<?php echo $category['categoryName']; ?>'>
		<input type ="submit" value = 'delete'> </form> </td>
	 </tr>
	<?php
	} 
	?>

        <!-- add code for the rest of the table here -->
    
    </table>

    <h2>Add Category</h2>
    <form action= 'add_category.php' method='post' id='categoory_list'>
    <p><label>Name:</label> <input type='text' name='category_name'> <input
    type='submit' value = 'add'> </p> 
    </form>
    
    <!-- add code for the form here -->
    
    <br>
    <p><a href="index.php">List Products</a></p>

    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </footer>
</body>
</html>
