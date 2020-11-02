<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <div id="container">
   	<div class="main-heading"><h2>Add books to the page</h2></div>
   	<div class="sub-heading"><h4>Add New Book</h4></div>
   	 <div class="form-wrap">
   	 	<form action="" role="form" method="post">
   	 		<div class="form-group">
   	 			<label for="name">Name:</label>
   	 		    <input type="name" name="book_name" placeholder="Enter Book Name">
   	 		</div>
   	 		<div class="form-group">
   	 			<label for="name" class="lead">Author:</label>
   	 		    <input type="name" name="author" placeholder="Enter Author Name">
   	 		</div>
            <div class="form-group">
               <label for="name" class="lead">Category:</label>
                <input type="name" name="category" placeholder="Enter Category">
            </div>
   	 		<div class="form-group">
   	 			<label for="about">About:</label>
   	 		    <textarea name="about" placeholder="Enter About"></textarea>
   	 		</div>
   	 		<div class="form-group">
   	 			<label for="about">Upload Book Image:</label>
   	 		    <input type="file" name="file" value="Upload Image">
   	 		</div>
   	 		<button type="submit" name="submit">Submit</button>	
   	 	</form>
   	 </div>

   </div>
</body>
</html>

<?php
function insert_data(){
   global $wpdb;
   $table_name=$wpdb->prefix.'my_book_list';
   $book_name=$_POST['book_name'];
   $author=$_POST['author'];
   $category=$_POST['category'];
   $about=$_POST['about'];
   if(isset($_POST['submit'])){
       $wpdb->insert($table_name,
                  array(
                        'book_name'=>$book_name,
                        'author'=>$author,
                        'category'=>$category,
                        'about'=>$about,),
                  array(
                         '%s',
                          '%s',
                          '%s',
                          '%s',)
               );
   }
}
   //insert query
?>