<!DOCTYPE html>
<html>
<head>
	<title>To do list</title>

	<!-- Bulma -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">

	<!-- font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

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
			<form id="task_form">
				<div class="field has-addons">
					<div id="task" class="control">
						<input id="task_input" class="input" type="text" placeholder="Add a task..." name="task_input">
					</div>
					<div class="control">
						<button id="add_task" class="button">Add task</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="level">
		<div class="level-item">

			<div id="the_list" class="panel">
				<div class="panel-heading has-addons">
					<div class="level">
						<div class="level-item">
							<h2 id="list_name">Your list</h2> 
							<!-- <a id="edit_name" class="button"><span class="icon"><i class="far fa-edit"></i></span></a> -->
						</div>
					</div>
				</div>
				<p class="panel-tabs">
					<a id="unfin_tab" class="is-active">Unfinished</a>
					<a id="fin_tab">Finished</a>
				</p>
				<div id="actual_list">

				</div>

				<div id="finished_list" class="is-hidden">
					
				</div>
			</div>

		</div>
	</div>

	<script type="text/javascript" src="app/controllers/clickables.js"></script>

</body>
</html>