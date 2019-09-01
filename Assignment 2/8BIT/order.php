

<h3 class="tit_group">ORDER</h3>
				<div class="group_detail group_order">
					<table class="tbl_comm">
						<caption class="ir_caption">
							order detail table
						</caption>
						<colgroup>
							<col style="width:280px">
							<col style="width:440px">
							<col style="width:200px">
							<col style="width:200px">
						</colgroup>
						<thead>
							<tr>
								<th scope="col">ITEM</th>
								<th scope="col">VERSION</th>
															
								<th scope="col">PRICE NZD</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<!--get from MySQL-->
								<td>
									<div class="item_thumb">
										<span style="display:block;width:148px;height:148px;border-radius:50%;background:url(img/zombieflyinghead.gif) 0 0 no-repeat;background-color:#f0f0f0;text-indent:-9999px;">Starter's Package</span>
									</div>
								
									
									<?php
										$dbConn = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
										$sql = "SELECT * FROM PRODUCT ORDER BY PRODUCT_ID";
										$dbrs = $dbConn->prepare($sql);
										$dbrs->execute();

										
										
										foreach ($dbrs as $dbrow) {
													
													echo '<strong class="tit_item">'. $dbrow['PRODUCT_Title'] . '</strong>';
										}
										?>
								</td>
								<td>
									<ul class="list_detail" style="margin-left:130px">
									


                                   <?php
										$dbConn = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
										$sql = "SELECT * FROM PRODUCT ORDER BY PRODUCT_ID";
										$dbrs = $dbConn->prepare($sql);
										$dbrs->execute();

										
										
										foreach ($dbrs as $dbrow) {
													
																										
													echo '<li>'. $dbrow['PRODUCT_Version'] . '</li>';
													
										}
										
										?>    	
                                
                                    </ul>
								</td>
								
								<td>
									
									<?php
										$dbConn = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
										$sql = "SELECT * FROM PRODUCT ORDER BY PRODUCT_ID";
										$dbrs = $dbConn->prepare($sql);
										$dbrs->execute();

										
										
										foreach ($dbrs as $dbrow) {
													
													
													echo '<span class="txt_price">'. $dbrow['PRODUCT_Price'] . '<span>';
													
													
										}
										
										?>
								</td>
							</tr>
						</tbody>
					</table>
				</div>