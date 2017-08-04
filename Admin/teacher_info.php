
<?php
ob_start();
include_once 'includes/header.inc.php';
?>
<div id='result_view'>
	
</div>
<div>
			
			<?php 
			include 'includes/sidebar.inc.php';
			 ?>
		</div>
<script>
load_view();
$(document).on('click','.pagination_link', function(){ 
		var page =$(this).attr('id');
		load_view(page);
	});
 function load_view(page){
	 	$('#modal-loader').show();
	 	$('#result_view').html('');
	 	$.ajax({
	 		url: 'ajaxcall/teacher/view_teacher.php',
	 		method: 'POST',
	 		data: {page:page},
	 		cache:false,
	 		success:function(data){
	 			$('#modal-loader').hide();
	 			$('#result_view').html(data);
	 		
	 		}
	 	})
	 }
	 
$(document).on('click', '.view-data', function(e){
		
		e.preventDefault();
		
		var uid = $(this).attr('id');   // it will get id of clicked row
		
		$('#dynamic-content').html(''); // leave it blank before ajax call
		$('#modal-loader').show();      // load ajax loader
		
		$.ajax({
			url: 'ajaxcall/teacher/ff.php',
			type: 'POST',
			data: 'id='+uid,
			dataType: 'html'
		})
		.done(function(data){
			console.log(data);	
			$('#dynamic-content').html('');    
			$('#dynamic-content').html(data); // load response 
			$('#modal-loader').hide();		  // hide ajax loader	
		})
		.fail(function(){
			$('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
			$('#modal-loader').hide();
		});
		
	});
	//del teacher from record
	$(document).on('click', '#delTeacher', function(e){
		e.preventDefault();
		var teacher_id =$(this).data('id'); // leave it blank before ajax call
		console.log(teacher_id);
    swal({
      title: "Are you sure?", 
      text: "Are you sure that you want to delete this teacher from school record?", 
      type: "warning",
    showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then(function() {
	var teacher_id =$('#delTeacher').data('id'); // leave it blank before ajax call
		console.log(teacher_id);
   $.ajax(
                {
                    type: "post",
                    url: "ajaxcall/teacher/delteacherfromschool.php",
                    data: 'id='+teacher_id,
                    success: function(data){
                    }
                }
        )
      .done(function(data) {
        swal("Succesful!",data,"success");
    
      })
      .error(function(data) {
        swal("Oops", "We couldn't connect to the server!", "error");
      });
})

});
	$(document).on('click', '.delclass', function(e){
		e.preventDefault();
		
		 swal({
      title: "Are you sure?", 
      text: "Are you sure that you want to remove the teacher from the class?", 
      type: "warning",
    showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then(function() {
		var cid = $('.delclass').attr('id');   // it will get id of clicked row
		var tid = $('.delclass').data('id');
		var data = {'teacher_id' : tid,'id' : cid};
		
   $.ajax(
                {
                    type: "post",
                    url: "ajaxcall/teacher/delteacherfromclass.php",
                    data: data,
                    success: function(data){
                    }
                }
        )
      .done(function(data) {
        swal("Succesful!",data,"success");
    
      })
      .error(function(data) {
        swal("Oops", "We couldn't connect to the server!", "error");
      });
})
 
		
	}); 
	$(document).on('click', '.delsub', function(e){
		e.preventDefault();
		var sid = $(this).attr('id');   // it will get id of clicked row
		var tid = $(this).data('id');
		var data = {'teacher_id' : tid,'subject_id' : sid};
		console.log(data);
		
		 swal({
      title: "Are you sure?", 
      text: "Are you sure that you want to remove this subject from the teacher?", 
      type: "warning",
    showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then(function() {
		var sid = $('.delsub').attr('id');   // it will get id of clicked row
		var tid = $('.delsub').data('id');
		var data = {'teacher_id' : tid,'subject_id' : sid};
		
   $.ajax(
                {
                    type: "post",
                    url: "ajaxcall/teacher/delteacherfromsub.php",
                    data: data,
                    success: function(data){
                    }
                }
        )
      .done(function(data) {
        swal("Succesful!",data,"success");
    
      })
      .error(function(data) {
        swal("Oops", "We couldn't connect to the server!", "error");
      });
})
 
		 
	}); 
</script>

						