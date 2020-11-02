<?php
 global $wpdb;
 $table_name=$wpdb->prefix.'my_book_list';
 $result=$wpdb->get_results("SELECT * FROM $table_name");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <div id="container">
	<input type="text" name="" id="my_input" placeholder="Search By Author Name" onkeyup="searchFun()">
	<input type="text" name="" id="my_category" placeholder="Search By Category" onkeyup="searchFun2()">
	<div class="table">
		<table cellspacing="0" id="content-table">
			<thead>
				
				<tr>
				<th>ID</th>
				<th>Book Name</th>
				<th>Author</th>
				<th>Category</th>
				<th>Image</th>
				<th>Date</th>
			</tr>
 
			</thead>
			<tbody class="border">
				<?php foreach($result as $row){
                      $id=$row->id;
                      $book_name=$row->book_name;
                      $author=$row->author;
                      $category=$row->category;
                      $created_at=$row->created_at;

					?>
				<tr>
					<td><?php echo $id; ?></td>
					<td><?php echo $book_name; ?></td>
					<td><?php echo $author; ?></td>
					<td><?php echo $category; ?></td>
					<td></td>
					<td><?php echo $created_at; ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>
