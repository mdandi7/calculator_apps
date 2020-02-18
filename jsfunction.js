$(document).ready(function(){
	
	$(document).on("click",".btn-op",function(e){

		var hasil = 0;
		var CheckReady = 0;
		var op = $(this).attr("data-op");

		var operators = {
		    '+': function(a, b) { return a + b },
		    '-': function(a, b) { return a - b },
		    '*': function(a, b) { return a * b },
		    '/': function(a, b) { return a / b },
		};


		$(".all-input").find("input[type=checkbox]").each(function(e){
			if($(this).prop("checked")){
				var num = $(this).closest(".row-input").find("input[type=number]").val();
				num = parseInt(num)
				
				if(CheckReady == 0){
					hasil = num;
				}else{
					hasil = operators[op](hasil, num);	
				}

				CheckReady += 1;

			}
		});

		if(CheckReady > 1){
			$("#hasil").html(hasil);

		}else{
			$("#hasil").html("Error! Check box harus lebih dari 1");

		}
		
	});
});