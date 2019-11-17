<?php
	$con = mysqli_connect('localhost','root','','userregistration');  
	$q = "select * from feedback";
	$result = mysqli_query($con,$q);

	$data = mysqli_num_rows($result);
	
	if($data!=0){
		while($mydata = mysqli_fetch_assoc($result)){
			echo "<li>
				<p>".$mydata['message']."</p>
				<div class="cd-author">
					<img src="./img/sample_face.gif" alt="reviewer image">
					<ul class="cd-author-info">
						<li>".$mydata['name']."</li>
						<li>".$mydata['profession'].",".$mydata[location]."</li>
					</ul>
				</div>
			</li>"	
		}
		echo $mydata['name'],"<br>";
	}
	
	?>