	<div id="background"></div>
	<script src="js/lingbox_js/jquery.js"></script>
	<script src="js/lingbox_js/lithbox.js"></script>

	<script>

		$('.clickici').click(function(){
			var id = this.id;
			$('input[type=text] ').attr({value : id});
			affiche_plat();
		});



		function affiche_plat(){
			$.ajax({
				type: "post",
				url:  "control.php",
				data: {
					'nom_recuperer' : $("#id_recuperer").val()
				},
				success: function(data){
					if(data != "success"){
						$(".aff").css("color", "green").html(data);
						return true;
					} else {
						$(".aff").css("color", "red").html(data);
					}
				}
			});
		}
		$('.fa-trash').click(function(){
				var id_pr = this.id;
					$.ajax({
				type: "post",
				url:  "delete.php",
				data: {
					'id_prod' : id_pr
				},
				success: function(data){
					if(data != "success"){
						$(".del").css("color", "green").html(data);
						return true;
					} else {
						$(".del").css("color", "red").html(data);
					}
				}
			});

			});

		


			



	</script>

