<?php
include '../cdn.php';
include '../navbar.php';
include '../connection.php';
// print_r($_POST);
?>
<?php
function recipePotato()
{
	$conn = mysqli_connect('localhost','root','','bcafood');

	$data=mysqli_fetch_all(mysqli_query($conn,"select recipe_id from recipeprocess where ingredient_id=$_POST[main]"),MYSQLI_ASSOC);
	// print_r($data);exit;
	foreach($data as $value){
		// echo "hello";
		$ingredient=mysqli_fetch_all(mysqli_query($conn,"select ingredient_id from recipeprocess where recipe_id=$value[recipe_id]"));
		// print_r($ingredient);
		$include_ing=[];
		foreach($ingredient as $ivalue){
			$include_ing[]=$ivalue[0];
		}
		// print_r($include_ing);

		foreach($_POST['vegitable'] as $vvalue){
			$not_included=2;
			if(!in_array($vvalue,$include_ing)){
				$not_included=1;

				// continue;
			}
		}
		// echo $not_included;
		if($not_included==2){
			// echo $value['recipe_id'];//exit;
			?>

			<div style="margin:60px auto; width: 700px;">
				<table class="table  table-primary">
					<thead>
						<tr>
							<th>Ingredients</th>
							<th>Amount</th>
							<th>Unit of measure</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$fingredient=mysqli_fetch_all(mysqli_query($conn,"select * from recipeprocess where recipe_id=$value[recipe_id] and type='ing'"),MYSQLI_ASSOC);
						foreach($fingredient as $fvalue){
							?>
							<tr>
								<td>
								<?php
									$idata=mysqli_fetch_assoc(mysqli_query($conn,"select name from ingredient where id=$fvalue[ingredient_id]"));
									echo $idata['name'];
								?>
								</td>
								<td><?php echo $fvalue['amount'];?></td>
								<td>
								<?php
									$mdata=mysqli_fetch_assoc(mysqli_query($conn,"select name from measure where id=$fvalue[measure_id]"));
									echo $mdata['name'];
								?>
								</td>
							</tr>
							<?php
						}
						?>
					</tbody>
				</table>
				<table class="table  table-primary">
					<thead>
						<tr>
							<th>Vegitables</th>
							<th>Amount</th>
							<th>Unit of measure</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$fingredient=mysqli_fetch_all(mysqli_query($conn,"select * from recipeprocess where recipe_id=$value[recipe_id] and type='veg'"),MYSQLI_ASSOC);
						foreach($fingredient as $fvalue){
							?>
							<tr>
								<td>
								<?php
									$idata=mysqli_fetch_assoc(mysqli_query($conn,"select name from ingredient where id=$fvalue[ingredient_id]"));
									echo $idata['name'];
								?>
								</td>
								<td><?php echo $fvalue['amount'];?></td>
								<td>
								<?php
									$mdata=mysqli_fetch_assoc(mysqli_query($conn,"select name from measure where id=$fvalue[measure_id]"));
									echo $mdata['name'];
								?>
								</td>
							</tr>
							<?php
						}
						?>
					</tbody>
				</table>
				<table class="table bg-primary"> 
					<thead>
						<tr>
							<th>Recipe</th>
							<th>Description</th>
							<th>Instructions</th>
							<th>Photo</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$rdata=mysqli_fetch_assoc(mysqli_query($conn,"select * from recipe where rec_id=$value[recipe_id]"));
						?>
						<tr>
							<td><?php echo $rdata['rec_name'];?></td>
							<td><?php echo $rdata['rec_desc'];?></td>
							<td><?php echo $rdata['rec_inst'];?></td>
							<td>
							<?php
							if($rdata['rec_photo'] && file_exists("../admin/upload/".$rdata['rec_photo'])){
								?>
								<img height="100" width="100" src="../admin/upload/<?php echo $rdata['rec_photo'];?>">
								<?php
							}else{
								echo "Photo Not Available";
							}
							?>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<?php
		}
	}
}
recipePotato();
?>