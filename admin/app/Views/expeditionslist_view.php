<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Expeditions List</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	</head>
	
	<body>	
		<table class="table">
			<thead>
				<tr>
					<th>S.No</th>
					<th>Expedition Name</th>
					<th>Faqs</th>
					<th>Detail Itinerary</th>
					<th>Edit</th>
					<th>Gallery</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($expeditions->allexpeditions AS $k=>$value) {  ?>
				<tr>
					<td><?php echo $k+1; ?></td>
					<td><?php echo $value->name; ?></td>
					<td><a class="btn btn-primary" href="getexpeditionitinerary/<?php echo $value->id; ?>">Itinerary</a></td>					
					<td><a class="btn btn-secondary" href="getexpedition/<?php echo $value->id; ?>">Edit</a></td>
					<td><a class="btn btn-info" href="expeditionsFaq/<?php echo $value->id; ?>"> Faq</a></td>
					<td><a class="btn btn-dark" href="expeditionGallery/<?php echo $value->id; ?>"> Gallery</a></td>

				</tr>
				<?php } ?>
			</tbody>
			
			
		</table>
		</form>
	</body>
	
</html>