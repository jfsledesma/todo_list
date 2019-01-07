<!DOCTYPE html>
<html>
<head>
	<title>To do list</title>

	<!-- Bulma -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">

	<!-- font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>



	<div class="level">
		<div class="level-item">
			<h1>To Do List</h1>
		</div>
	</div>

	<div class="level">
		<div class="level-item">
			<form>
				<div class="field has-addons">
					<div class="control">
						<input class="input" type="text" placeholder="Add a task..." name="task">
					</div>
					<div class="control">
						<button class="button">Add</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="level">
		<div class="level-item">

			<div class="panel">
				<div class="panel-heading has-addons">
					<h2>Your list <a class="button is-light"><span class="icon"><i class="far fa-edit"></i></span></a></h2>
				</div>
				<p class="panel-tabs">
					<a class="is-active">Unfinished</a>
					<a>Finished</a>
				</p>
				<p id="is-empty" class="panel-block">
					Your list is currently empty
				</p>
			</div>

		</div>
	</div>
</body>
</html>