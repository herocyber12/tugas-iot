<?php include_once "partials/_header.php"; ?>
   <div class="wrapper">
       <div class="container">
		   <div class="row justify-content-around mt-5">
			   <h2 class="text-center">MONITORING DATA SENSOR ULTRASONIK <br> KETINGGIAN AIR BENDUNGAN</h2>
		   	<div class="table mt-5" data-wow-delay="0.5s">
                   <table class="table table-bordered">
                       <thead class="bg bg-success text-white">
                            <tr>
                               <th>No</th>
                               <th>Tanggal</th>
                               <th>Pesan</th>
                               <th>Jarak</th>
                            </tr>
                       </thead>
                       <tbody class="table-striped">
                        <?php $no = 1; ?>
                       <?php while($asd = mysqli_fetch_assoc($select_data)): ?>

                           <tr>
                               <td><?=$no++; ?></td>
                               <td><?=$asd['tanggal']; ?></td>
                               <td><?=$asd['data_sensor']; ?></td>
                               <td><?=$asd['jarak']; ?> cm</td>
                           </tr>
                        <?php endwhile;?>
                       </tbody>
                   </table>
               </div>
		   </div>
		   <div class="row justify-content-around">
                <div class="col" style="height: 100;width: 100%; ">
                    <div class="card">
						<div class="card-header">
							<span>Meta Data</span>
						</div>
							<div id="divgraf1" style="height: 100 ;width: 100%"></div>
                    		<br>
						</div>
					</div>
            </div>
           </div>
       </div>
<?php include_once "partials/_footer.php"; ?>