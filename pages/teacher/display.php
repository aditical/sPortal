<html>
<head><title>Download </title></head>
<body>
    <table>
        <thead>
            <tr>
			    <th>S.No</th>
				<th>Note</th>
                <th>Author</th>
				<th>Download</th>
            <tr>
        </thead>
        <tbody>
        <?php 
								$connect = mysqli_connect("localhost", "root", "", "sagarmatha");
								$i=1;
								$query = "SELECT * FROM notes ORDER BY 1 DESC";
								$result = mysqli_query($connect,$query);

								while ($row = mysqli_fetch_array($result)) {
									$id = $row['id'];									
									$file = $row['files'];	
									$filePath = $row['filePath'];								
									$author = $row['author'];								
							?>
							<tr align="center">
								<td><?php echo $i++; ?></td>
								<td><?php echo $file; ?></td>								
								<td><?php echo $author; ?></td>		
								<td><a href="download.php?id=<?php echo $id;?>" onclick="return confirm('Do you want to download this file?')">Download</a></td>
							</tr>
							<?php 
								}
							?>	    
        </tbody>
    </table>   
</body>
</html>