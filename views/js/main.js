jQuery(document).ready(function($) {
	$("#save-category").on("click", function() {
		let cat_name = $("#category_name").val();
		$.ajax({
			url:"../../controllers/CategoryController.php",
			method:"post",
			data:{cat_name, action:"new"},
			success:function(msg) {
				if(msg == 1) {
					alert("Inserted");
				} else {
					alert("Faild");
				}
			}
		})
	});

		$.ajax({
			url:"../../controllers/CategoryController.php",
			method:"get",
			dataType:"json",
			data:{action:"all"},
			success:function(data) {
				console.log(data);
			}
		})

})