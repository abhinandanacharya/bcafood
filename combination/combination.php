<?php include 'cdn.php';?>

<?php

function potatoCombination()
{
	?>
	

	<form action="recipeprocess/function.php" method="post">
		<div class="list-potato">
			<div class="form-control">
				<label>Potato</label> 
				<input type="checkbox" name="vegitable[]"  class="pull-right"  checked  title="Default Select"  disabled>
				<input type="hidden" name="main" value="11">
				<input type="hidden" name="vegitable[]" value="11">
			</div>

			<div class="form-control">
				<label>Pea</label>
				<input type="checkbox" name="vegitable[]" value="15" class="pull-right">
			</div>

			<div class="form-control">
				<label>Tomato</label>
				<input type="checkbox" name="vegitable[]" value="12" class="pull-right">
			</div>

			<div class="form-control">
				<label>Cauliflower</label>
				<input type="checkbox" name="vegitable[]" value="20" class="pull-right">
			</div>

			<div class="form-control">
				<label>Cabbage</label>
				<input type="checkbox" name="vegitable[]" value="17" class="pull-right">
			</div>

			<div class="form-control">
				<label>Capsicum</label>
				<input type="checkbox" name="vegitable[]" value="16" class="pull-right">
			</div>

			<div class="form-control">
				<label>Chilli</label>
				<input type="checkbox" name="vegitable[]" value="18" class="pull-right">
			</div>
		</div>
		<div class="list-potato-btn">
			<div class="form-row">
				<label>Submit</label>
				<input type="submit" name="submit" value="submit" class=" btn btn-success pull-right " >
			</div>
		</div>

	</form>



	<?php
}

function tomatoCombination()
{
	?>
	

	<form action="recipeprocess/function.php" method="post">
		<div class="list-potato">
			<div class="form-control">
				<label>Tomato</label> 
				<input type="checkbox" name="vegitable[]" value="tomato" checked title="Default checked" class="pull-right">
				<input type="hidden" name="main" value="12">
				<input type="hidden" name="vegitable[]" value="12">
			</div>
			
			<div class="form-control">
				<label>Potato</label> 
				<input type="checkbox" name="vegitable[]"  class="pull-right"    title="Default Select" value="11">
			</div>

			<div class="form-control">
				<label>Pea</label>
				<input type="checkbox" name="vegitable[]" value="15" class="pull-right">
			</div>

			<div class="form-control">
				<label>Cauliflower</label>
				<input type="checkbox" name="vegitable[]" value="20" class="pull-right">
			</div>

			<div class="form-control">
				<label>Cabbage</label>
				<input type="checkbox" name="vegitable[]" value="17" class="pull-right">
			</div>

			<div class="form-control">
				<label>Capsicum</label>
				<input type="checkbox" name="vegitable[]" value="16" class="pull-right">
			</div>

			<div class="form-control">
				<label>Chilli</label>
				<input type="checkbox" name="vegitable[]" value="18" class="pull-right">
			</div>
		</div>
		<div class="list-potato-btn">
			<div class="form-row">
				<label>Submit</label>
				<input type="submit" name="submit" value="submit" class=" btn btn-success pull-right " >
			</div>
		</div>

	</form>



	<?php
}

function cauliflowerCombination()
{
	?>
	

	<form action="recipeprocess/function.php" method="post">
		<div class="list-potato">
			<div class="form-control">
				<label>Cauliflower</label> 
				<input type="checkbox" name="vegitable[]" value="cauliflower" class="pull-right">
				<input type="hidden" name="main" value="20">
				<input type="hidden" name="vegitable[]" value="20">
			</div>						
			<div class="form-control">
				<label>Potato</label> 
				<input type="checkbox" name="vegitable[]"  class="pull-right"    title="Default Select" value="11">
			</div>
			<div class="form-control">
				<label>Pea</label>
				<input type="checkbox" name="vegitable[]" value="15" class="pull-right">
			</div>

			<div class="form-control">
				<label>Tomato</label>
				<input type="checkbox" name="vegitable[]" value="12" class="pull-right">
			</div>


			<div class="form-control">
				<label>Cabbage</label>
				<input type="checkbox" name="vegitable[]" value="17" class="pull-right">
			</div>

			<div class="form-control">
				<label>Capsicum</label>
				<input type="checkbox" name="vegitable[]" value="16" class="pull-right">
			</div>

			<div class="form-control">
				<label>Carrot</label>
				<input type="checkbox" name="vegitable[]" value="19" class="pull-right">
			</div>

			<div class="form-control">
				<label>Chilli</label>
				<input type="checkbox" name="vegitable[]" value="18" class="pull-right">
			</div>
			<div class="list-potato-btn">
				<div class="form-row">
					<label>Submit</label>
					<input type="submit" name="submit" value="submit" class=" btn btn-success pull-right " >
				</div>
			</div>

		</form>



		<?php
	}



	function cabbageCombination()
	{
		?>


		<form action="recipeprocess/function.php" method="post">
			<div class="list-potato">
				<div class="form-control">
					<label>Cabbage</label> 
					<input type="checkbox" name="vegitable[]" value="cabbage" class="pull-right">
					<input type="hidden" name="main" value="17">
					<input type="hidden" name="vegitable[]" value="17">

				</div>

				<div class="form-control">
					<label>Cabbage</label>
					<input type="checkbox" name="vegitable[]" value="17" class="pull-right">
				</div>
				<div class="form-control">
					<label>Cauliflower</label>
					<input type="checkbox" name="vegitable[]" value="20" class="pull-right">
				</div>					
				<div class="form-control">
					<label>Potato</label> 
					<input type="checkbox" name="vegitable[]"  class="pull-right"    title="Default Select" value="11">
				</div>
				<div class="form-control">
					<label>Pea</label>
					<input type="checkbox" name="vegitable[]" value="15" class="pull-right">
				</div>

				<div class="form-control">
					<label>Tomato</label>
					<input type="checkbox" name="vegitable[]" value="12" class="pull-right">
				</div>



				<div class="form-control">
					<label>Capsicum</label>
					<input type="checkbox" name="vegitable[]" value="16" class="pull-right">
				</div>

				<div class="form-control">
					<label>Carrot</label>
					<input type="checkbox" name="vegitable[]" value="19" class="pull-right">
				</div>

				<div class="form-control">
					<label>Chilli</label>
					<input type="checkbox" name="vegitable[]" value="18" class="pull-right">
				</div>
			</div>
			<div class="list-potato-btn">
				<div class="form-row">
					<label>Submit</label>
					<input type="submit" name="submit" value="submit" class=" btn btn-success pull-right " >
				</div>
			</div>

		</form>



		<?php
	}



	function capsicumcombination()
	{
		?>


		<form action="recipeprocess/function.php" method="post">
			<div class="list-potato">
				<div class="form-control">
					<label>Capsicum</label> 
					<input type="checkbox" name="vegitable[]" value="capsicum" checked class="pull-right">
					<input type="hidden" name="main" value="16">
					<input type="hidden" name="vegitable[]" value="16">

				</div>

				<div class="form-control">
					<label>Cauliflower</label>
					<input type="checkbox" name="vegitable[]" value="20" class="pull-right">
				</div>					
				<div class="form-control">
					<label>Potato</label> 
					<input type="checkbox" name="vegitable[]"  class="pull-right"    title="Default Select" value="11">
				</div>
				<div class="form-control">
					<label>Pea</label>
					<input type="checkbox" name="vegitable[]" value="15" class="pull-right">
				</div>

				<div class="form-control">
					<label>Tomato</label>
					<input type="checkbox" name="vegitable[]" value="12" class="pull-right">
				</div>


				<div class="form-control">
					<label>Carrot</label>
					<input type="checkbox" name="vegitable[]" value="19" class="pull-right">
				</div>

				<div class="form-control">
					<label>Chilli</label>
					<input type="checkbox" name="vegitable[]" value="18" class="pull-right">
				</div>
			</div>
			<div class="list-potato-btn">
				<div class="form-row">
					<label>Submit</label>
					<input type="submit" name="submit" value="submit" class=" btn btn-success pull-right " >
				</div>
			</div>

		</form>



		<?php
	}


	?>