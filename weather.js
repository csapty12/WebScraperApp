$(document).ready(function(){
	$('#search').on("click",function(event){
		event.preventDefault();

		var cityVal=$("#city").val();

		if(cityVal!=""){
    		$.get("scraper.php?city="+cityVal,function(data){
    			if (/<br \/>/i.test(data)){
    				$("#success").css("display","none");
    				$("#warn").css("display","none");
    				$("#fail").fadeIn();

    			}
    			else{
    				$("#fail").css("display","none");
    				$("#warn").css("display","none");
    				$("#success").html(data).fadeIn();
    			}   		
    		});
		}
		else{
			$("#success").css("display","none");
			$("#fail").css("display","none");
			$("#warn").fadeIn();
		}

	});
})