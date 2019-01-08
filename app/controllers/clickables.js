function print_list(){
	$.ajax({
		method: "POST",
		url: "app/controllers/make_list.php",
		data: {},
	}).done(jsondata => {
		let content = jsondata;
		$("#actual_list").html(content);
	});

	$.ajax({
		method: "POST",
		url: "app/controllers/make_flist.php",
		data: {},
	}).done(jsondata => {
		let content = jsondata;
		$("#finished_list").html(content);
	});
};

print_list();

$("#fin_tab").click(function(){
	$("#unfin_tab").removeClass("is-active");
	$("#fin_tab").addClass("is-active");

	$("#actual_list").addClass("is-hidden");
	$("#finished_list").removeClass("is-hidden");
});

$("#unfin_tab").click(function(){
	$("#fin_tab").removeClass("is-active");
	$("#unfin_tab").addClass("is-active");

	$("#actual_list").removeClass("is-hidden");
	$("#finished_list").addClass("is-hidden");
});

$("#add_task").click(function(){
	event.preventDefault();
	const added_task = $("#task_input").val();
	$.ajax({
				method: "GET",
				url: "app/controllers/add_task.php",
				data: {task: added_task},
			}).done(data => {
				print_list();
			});
	$("#task_input").val("");
});

$(document).on('click', '.trasher',function(){
	let idnum = $(this).parent().attr("id");
	// console.log(idnum);
	$.ajax({
		method: "GET",
		url: "app/controllers/remove_task.php",
		data: {idnum: idnum},
	}).done(data => {
			print_list();
		});
});

$(document).on('click', '.trasherf',function(){
	let idnum = $(this).parent().attr("id");
	// console.log(idnum);
	$.ajax({
		method: "GET",
		url: "app/controllers/remove_taskf.php",
		data: {idnum: idnum},
	}).done(data => {
			print_list();
		});
});

$(document).on('click', '.checker', function(){
	let idnum = $(this).parent().attr("id");
	// console.log(idnum);
	$.ajax({
		method: "GET",
		url: "app/controllers/finish_task.php",
		data: {idnum: idnum},
	}).done(data => {
			print_list();
		});
});