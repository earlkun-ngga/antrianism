<?php include "template/header_unlogin.php"; ?>


	<div class="container">
	<div class="row mt-5 ">

		<div class="col-lg-8 col-md-8 col-12 justify-content-center mb-3" >
		<div style="background-color: white; border-radius: 10px; box-shadow: 5px 10px 20px 5px rgba(0, 0, 0, 0.1); width: 100%;" class="pt-3 py-3">
		<center>
			<img src="http://localhost/antrianism/node_module/assets/gmb2.png" class="mb-2 img-thumbnail" style="width: 60%;" />
			<img src="http://localhost/antrianism/node_module/assets/gmb2.png" class="mb-2 img-thumbnail" style="width: 60%;" />
			<img src="http://localhost/antrianism/node_module/assets/gmb2.png" class="mb-2 img-thumbnail" style="width: 60%;" />
		</center>
		</div>
		</div>

		<div class="col-lg-4 col-md-4 col-12 mb-3">
			
			<div class="card px-5 py-5" style="width: 100%; height: 100%; background-color: white; box-shadow: 5px 10px 20px 5px rgba(0, 0, 0, 0.1); color: #123545;" >

			<center><b><font size="+4">Antrianism</font></b><br> | Admin Access |

			<hr style="width: 60%; background-color: white;">

			</center>

			<br>
			<form action="proses_login.php" method="post">

			<input type="text" name="username" placeholder="Username" class="form-control" />
			<br>
			<input type="password" name="password" placeholder="Password" class="form-control" />
			<br>
			<center>
			<b><input type="submit" value=">>>" class="btn btn-primary" style="width: 60px; height: 60px;"></b>
			</center>
			</form>	

		</div>
		
		

		</div>
		</div>





<?php include "template/footer.php"; ?>