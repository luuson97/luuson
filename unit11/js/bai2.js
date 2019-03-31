$(function(){
	$('button').click(function(){
		var check = $(this).html();
		if (check == '<i class="fa fa-plus fa-2x"></i>') {
			$(this).html('<i class="fa fa-minus fa-2x"></i>');
			$(this).parent().next().show(500);	
		}else{
			$(this).html('<i class="fa fa-plus fa-2x"></i>');
			$(this).parent().next().hide(500);	
		}
	})
})