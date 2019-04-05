
$(function(){
	$('#add').on('click',function(){
		var input = $('#input').val();
		
			if (input.trim()!= "") {
				$('#content').append(
				`<tr>
					<td class="checkbox"></td>
					<td class="ip">`+input+`</td>
					<td class="btn"><i class="fa fa-times"></i></td>
				</tr>`
				);
			};
			
		$('#input').val("");
	});
	$('body').on('click','.btn',function(){
		$(this).parent().remove();
	});
	$('body').on('click','tr',function(){
		var check = $(this).children('.checkbox').html()
		if (check =="") {
			$(this).children('.checkbox').append(`<i class="fa fa-check" aria-hidden="true"></i>`)
			$('#input').css("text-decoration","line-through");
		}
		else{
			$(this).children('.checkbox').text('')
		}
	});
		
});