<html>
	<head>
		<title>Home</title>
	</head>
	<body>
		<h1 align="center">Library Mangement System</h1>
		<p align="center">
			<a href="new.php"> Add new book</a> | 
			<a href="list.php"> Book List</a> | 
			<a href="issue.php"> Issue book</a> | 
			<a href="issue_list.php"> Issued book List</a> | 
			<a href="return.php"> Return book</a>  
			<a href="return_list.php"> Returned book List</a>
		</p>
		<form method="post" action="save.php">
			<table>
		

			<tr>
			<form class="" method="post">
				<td>Book Name: </td>
				<td><input type="text" name="book_name" value=""></td>
			</tr>
			
			<tr>
				<td>Publisher Name: </td>
				<td><input type="text" name="publisher_name" value=""></td>
			</tr>
			<tr>
				<td>Publisher Age: </td>
				<td> <input type="text" name="publisher_name" value=""></td>
			</tr>
			<tr>
				<td>Page Number: </td>
				<td><input type="text" name="page_number" value=""></td>
			</tr>
			<tr>
				<td>Publish Date : </td>
				<td> <input type="text" name="publish_date" value=""></td>
			</tr> 
			<tr>
				<td>Book Type : </td>
				<td><input type="checkbox" name="Book_type">Sci-Fi
		<input type="checkbox" name="Book_type">Document
		<input type="checkbox" name="Book_type">Novel
			</td>
			</tr>
			
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit" /></td>
			</tr>  
			
		</form>

	</body>
</html>