<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Detail</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="icon" href="favicon.ico">
	<link rel="stylesheet" href="<?php echo base_url(); ?>elephant/css/vendor.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>elephant/css/elephant.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>elephant/css/application.min.css">
</head>
<body class="layout">
	<div class="layout-header">
		<div class="navbar navbar-default">
			<div class="navbar-header">
				<a class="navbar-brand navbar-brand-center">Jattiblee</a>
				<button class="navbar-toggler collapsed visible-xs-block" type="button" data-toggle="collapse" data-target="#sidenav">
					<span class="sr-only">Toggle navigation</span>
					<span class="bars">
						<span class="bar-line bar-line-1 out"></span>
						<span class="bar-line bar-line-2 out"></span>
						<span class="bar-line bar-line-3 out"></span>
					</span>
					<span class="bars bars-x">
						<span class="bar-line bar-line-4"></span>
						<span class="bar-line bar-line-5"></span>
					</span>
				</button>
				<button class="navbar-toggler collapsed visible-xs-block" type="button" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="arrow-up"></span>
					<span class="ellipsis ellipsis-vertical"></span>
				</button>
			</div>
			<div class="navbar-toggleable">
				<nav id="navbar" class="navbar-collapse collapse">
					<button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" type="button">
						<span class="sr-only">Toggle navigation</span>
						<span class="bars">
							<span class="bar-line bar-line-1 out"></span>
							<span class="bar-line bar-line-2 out"></span>
							<span class="bar-line bar-line-3 out"></span>
							<span class="bar-line bar-line-4 in"></span>
							<span class="bar-line bar-line-5 in"></span>
							<span class="bar-line bar-line-6 in"></span>
						</span>
					</button>
					<ul class="nav navbar-nav navbar-right">
						<li><a><?php echo ucwords($sess['firstname']); ?></a></li>
						<li><a href="<?php echo base_url().index_with(); ?>logout">Logout</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<div class="layout-main">
		<div class="layout-sidebar">
			<div class="layout-sidebar-backdrop"></div>
			<div class="layout-sidebar-body">
				<nav id="sidenav" class="sidenav-collapse collapse">
					<ul class="sidenav">
						<li class="sidenav-item">
							<a href="<?php echo base_url().index_with(); ?>dashboard">
								<span class="sidenav-icon icon icon-tachometer"></span>
								<span class="sidenav-label">Dashboard</span>
							</a>
						</li>

						<!-- <li class="sidenav-item">
							<a href="<?php echo base_url().index_with(); ?>addquestion">
								<span class="sidenav-icon icon icon-bars"></span>
								<span class="sidenav-label">Add Question</span>
							</a>
						</li> -->
					</ul>

				</nav>
			</div>
		</div>

		<div class="layout-content">
			<div class="layout-content-body">
				<!-- <div class="title-bar">
					<h1 class="title-bar-title">Basic template</h1>
				</div> -->


				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<?php $i = 0; ?>
								<?php if(isset($d)) { ?>
								<?php foreach($d as $key => $aa) { ?>
								<?php $i++; ?>
									<div class='col-md-12'>
										<?php echo "<b>". $i." . ".$key. "</b>" ; ?>
									</div>
									<?php $ab = -1; ?> 
									<?php $abjad = ['A', 'B', 'C', 'D', 'E']; ?>
									<?php foreach($aa as $keyy => $a){ ?>
									<?php $ab++; ?>
									<div class='col-md-12'>
										<div class="col-md-1"></div>
										<div class="col-md-11">
											<?php echo $abjad[$ab] . ". ". $keyy; ?>
										</div>
										
									</div>
								<?php  } } } ?>
							</div>
						</div>

					</div>
				</div>
				
			</div>
		</div>

		<div id="modalGridSystemLg" tabindex="-1" role="dialog" class="modal fade">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header bg-danger">
						<!-- <button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">×</span>
							<span class="sr-only">Close</span>
						</button> -->
						<h4 class="modal-title">Test</h4>
					</div>
					<div class="modal-body">
						<form id="form" class="form form-horizontal">
							<div class="form-group">
								<div class="col-md-12">
									<!-- <div id="dynamicQuestion"></div> -->

									<div class='form-group' style='margin-top:5px'> 
										<div class='col-md-12'> 
											<input id="questions" class='form-control' type='text' name='myQuestions' placeholder="Pertanyaan"> 
											<input type="hidden" name="generateid" id="haveid">
										</div> 
									</div>
								</div>

								<div class="col-md-12" style="margin-top: 5px">
									<div id="dynamicInput"></div>
									
								</div>
							</div>

							<div class="form-group">
								<input id="addinputbtn" type="button" class="btn btn-danger" value="Add Option" onClick="addInput('dynamicInput');">
							</div>

							<div class="form-group">
								<div class="col-md-12" style="margin-top: 5px;">
									<div class="col-md-6 col-md-push-5">
										<input type="button" class="btn btn-primary" value="Add Question" onClick="addQuestions();">
									</div>

								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12" style="margin-top: 5px;">
									<div id="questResult"></div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>


		<div class="layout-footer">
			<div class="layout-footer-body">
				<small>Jattiblee.</small>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>elephant/js/vendor.min.js"></script>
	<script src="<?php echo base_url(); ?>elephant/js/elephant.min.js"></script>
	<script src="<?php echo base_url(); ?>elephant/js/application.min.js"></script>

	<script type="text/javascript">
		$( document ).ready(function() {
			getId(function(id){})
			$("#form").trigger('reset');
		});

		$('#subjectField').keyup(function(){
			var ooo = $('#subjectField').val();

			if (ooo !== '') {
				$('#addquestionBtn').prop("disabled", false);	
			} else{
				$('#addquestionBtn').prop("disabled", true);
			}
			
		});

		function getId(callback){
			$.ajax({
				url : "<?php echo base_url().index_with(); ?>generateid",
				method : "GET",
				data : {},
				async : false,
				dataType : 'json',
				success: function(data){
					$('#haveid').val(data.questionId)
				}
			});
		}

		var counter = 0;
		var limit = 3;

		var abjad = ['A', 'B', 'C', 'D', 'E']

		function addInput(divName){
			var q = document.getElementById('questions').value;

			if (q !== '' && counter < 5) {
				
				var newdiv = document.createElement('div');

				newdiv.innerHTML = "<div class='col-md-12' style='margin-top:5px'> <div class='col-md-1'>" + (abjad[counter]) + " </div><div class='col-md-11'> <input autofocus id=jawaban"+ counter +" type ='text' name='jawaban[]' class='form-control' placeholder='Opsi jawaban'> </div> </div>";

				document.getElementById(divName).appendChild(newdiv);

				counter++;
			} else{
				alert("Question cannot empty");
			}

			// if (counter == limit)  {

			// 	alert("You have reached the limit of adding " + counter + " inputs");

			// }

			// else {

			// 	var newdiv = document.createElement('div');

			// 	newdiv.innerHTML = "<div class='col-md-12' style='margin-top:5px'> <div class='col-md-1'> A. " + (counter + 1) + " </div> <div class='col-md-1'> <input type='radio' name='myInputs[]'> </div> <div class='col-md-10'> <input type ='text' name='jawaban' class='form-control'> </div> </div>";

			// 	document.getElementById(divName).appendChild(newdiv);

			// 	counter++;

			// }

		}

		function addQuestions(){
			getId(function(id){})

			var q = $('#questions').val();
			var qId = $('#haveid').val();
			var subject_sess = $('#subject_sess').val();
			var subjectField = $('#subjectField').val();
			var qOpt = [];
			var dataTemporary = [];
			var start = 1;

			$("input[name='jawaban[]']").each(function() {
				qOpt.push($(this).val());
			});

			if (q !== '' && qOpt.length > 1) {
				
				$.ajax({
					url : "<?php echo base_url().index_with(); ?>createquestion",
					method : "POST",
					data : {questId: qId, quest: q, questOpt: qOpt,subjectSess: subject_sess, subject: subjectField},
					async : false,
					dataType : 'json',
					success: function(results){

						dataTemporary.push(results);

						var text = "<p><b>Question : "+results.numbering+" . "+results.question+"</b><br>";

						$.each(results.questionOption, function (i, v) {
							text += abjad[i] + ". "+ v + "<br>"; 
						});

						text += "</p>";

						$("#questResult").append(text);

						$("#form").trigger('reset');
						$('#dynamicInput').find('.col-md-12').remove()
						counter = 0;

					}
				});


			}  else {
				alert("Option answer of question cannot empty or more than 1");
			}


		}

		function addQuestion(divName){

			var elem = document.getElementsByTagName("jawaban");  
			var arr = new Array();
			var i = 0;
			var iarr = 0;
			var att;
			for(i; i < elem.length; i++) {
				att = elem[i].getAttribute("name");
				if(att == name) {
					arr[iarr] = elem[i];
					iarr++;
				}
			}



			console.log(elem.length);

			var newdiv = document.createElement('div');

			newdiv.innerHTML = "<div class='form-group' style='margin-top:5px'> <div class='col-md-12'> <input id=questions class='form-control' type='text' name='myQuestions[]'> </div> </div>";

			document.getElementById(divName).appendChild(newdiv);

			// start++;

			// if (counter == limit)  {

			// 	alert("You have reached the limit of adding " + counter + " inputs");

			// }

			// else {

			// 	var newdiv = document.createElement('div');

			// 	newdiv.innerHTML = "<div class='col-md-12' style='margin-top:5px'> <div class='col-md-1'> A. " + (counter + 1) + " </div> <div class='col-md-1'> <input type='radio' name='myInputs[]'> </div> <div class='col-md-10'> <input type ='text' name='jawaban' class='form-control'> </div> </div>";

			// 	document.getElementById(divName).appendChild(newdiv);

			// 	counter++;

			// }

		}
	</script>
</body>
</html>