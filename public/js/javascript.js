
$('#deleteBook').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget) 
	var rowidData = button.data('idfield') 
	$('#deleteForm').attr('action', "/catalogues/" + rowidData)
	var modal = $(this)
	modal.find('.modal-title').text('Delete Book Entry no.' + rowidData + "?")
});

$(document).ready(function() {

	var selected = $('#library_section').data('selected') 
	$("#library_section").val(selected);
    
});

$( "#search" ).keyup(function() {
	$value=$(this).val();

	if($('.filter').val() == 'Book Title'){
		$filter = 'title'
	}else if($('.filter').val() == 'Library Section'){
		$filter = 'library_section'
	}else{
		$filter=$('.filter').val();
	}
	
	$.ajax({
		type : "get",
		 url : '/searchdata',
		 data : {'search':$value,
		 		 'filter':$filter
		},
		
		success:function(data){
			if(data.no!==""){
				$('tbody').html(data);
			}
		}
	});

});

$( "#filter" ).change(function() {
	$value=$('.search').val();
	if($('.filter').val() == 'Book Title'){
		$filter = 'title'
	}else if($('.filter').val() == 'Library Section'){
		$filter = 'library_section'
	}else{
		$filter=$('.filter').val();
	}
	$.ajax({
		type : "get",
		 url : '/searchdata',
		 data : {'search':$value,
		 		 'filter':$filter
		},
		
		success:function(data){
			if(data.no!==""){
				$('tbody').html(data);
			}
		}
	});

});

$('.checkbox').click(function() {
	
	var thisCheckBox = $(this);
	var $bookID = $(this).val();
	
	if (thisCheckBox.is (':checked'))
	{
		var $value = "true";
	}
	else{
		var $value = "false";
	}
		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		})
		$.ajax({
			type : "post",
			 url : '/updateborrow',
			 data : {'id':$bookID,
			 		 'value':$value

			},	
			success:function(data){
			
			}
		});



	
});
