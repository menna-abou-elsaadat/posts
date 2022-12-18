$(document).on('click','.delete',function(){

	var function_name = $(this).attr('data-function-name');
	var id = $(this).attr('data-id');
	const swalWithBootstrapButtons = Swal.mixin({
	  customClass: {
	    confirmButton: 'btn btn-success',
	    cancelButton: 'btn btn-danger'
	  },
	  buttonsStyling: true
	})
	swalWithBootstrapButtons.fire({
	  title: 'Are you sure you want to delete this?',
	  text: "",
	  icon: 'warning',
	  showCancelButton: true,
	  confirmButtonText: 'Yes, delete it!',
	  cancelButtonText: 'No, cancel!',
	  reverseButtons: true
	}).then((result) => {
	  if (result.isConfirmed) {
	  	livewire.emit(function_name,id);
	    swalWithBootstrapButtons.fire(
	      'Deleted!',
	      'Deleted Successfully'
	    )
	  } 
	})
})