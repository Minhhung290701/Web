
 <div id="danhmucsp">
					<div class="center">
					<h4>SẢN PHẨM</h4>
					<?php 
					   $sql="select * from danhmuc where dequi=1";
					   $result=mysqli_query($connect,$sql);
					?>
						<ul>
						<?php 
						   while($row=mysqli_fetch_array($result))
						   {
						?>
							<li><a href="index.php?madm=<?php echo $row['madm'] ?>"><?php echo $row["tendm"];?></a></li>
							<?php } ?>
							
							
						</ul>
					</div><!-- End .center -->
				</div>	<!-- End .menu-left -->
				
				<div id="phukien">
					<div class="center">
						<h4> PHỤ KIỆN</h4>
						<?php 
					   $sql="select * from danhmuc where dequi=2";
					   $result=mysqli_query($connect,$sql);
					?>
						<ul>
						<?php 
						   while($row=mysqli_fetch_array($result))
						   {
						?>
							<li><a href="index.php?madm=<?php echo $row['madm'] ?>"><?php echo $row["tendm"];?></a></li>
							<?php } ?>
							
						</ul>
					</div><!-- End .center -->
				</div><!-- End .phukien -->	
				
				<div id="quangcao1">
					<div class="center">
						<a href="#"> <img src="img/air.jpg" alt="quangcao" title="quangcao"> </a>
						<a href="#"> <img src="img/samsungpc.jpg" alt="quangcao" title="quangcao"> </a>
					</div><!-- End .center -->
				</div><!-- End .quangcao1 -->