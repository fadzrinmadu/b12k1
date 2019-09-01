window.addEventListener('DOMContentLoaded', function () {

	$('.btn-add').on('click', function () {
		$('form').attr('action', 'http://localhost/project/home/');
		$('.modal-title').html('Add Data');
		$('.modal-footer>button').html('Add');

		$('#id').val('');
		$('#name').val('');

		let options = $('option');
		for (let i = 0; i < options.length; i++) {
			options[i].removeAttribute('selected');
		}

		$('#work:first-child').attr('selected', 'on');
		$('#kategori:first-child').attr('selected', 'on');
	});

	$('.btn-edit').on('click', function () {
		const id = $(this).data('id');

		$('form').attr('action', 'http://localhost/project/home/edit/');
		$('.modal-title').html('Edit Data');
		$('.modal-footer>button').html('Edit');

		$.ajax({
			url: 'http://localhost/project/home/getNameByID/',
			method: "post",
			data: {id: id},
			dataType: 'json',
			success: function(data) {
				$('#id').val(data.id);
				$('#name').val(data.name);

				let options = $('option');
				for (let i = 0; i < options.length; i++) {
					if (!(options[i].value == data.id_work || options[i].value == data.id_kategori)) {
						options[i].removeAttribute('selected');
					}
				}
				$('#work option[value='+ data.id_work +']').attr('selected', 'on');
				$('#kategori option[value='+ data.id_salary +']').attr('selected', 'on');
			}
		});

	});	


	/* SWEET ALERT */
	const flashdata = $('.flash-data').data('flashdata');
	console.log(flashdata);
	if (flashdata) {
		Swal.fire({
			text: flashdata,
			imageUrl: 'http://localhost/project/assets/img/checked.png',
			imageWidth: 100,
			showConfirmButton: false,
			showCloseButton: true
		});
	}

	// tombol hapus
	$('.btn-hapus').on('click', function (e) {
		e.preventDefault();

		const href = $(this).attr('href');

		Swal.fire({
		  title: 'Are you sure?',
		  text: "You won't be able to revert this!",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
		  	if (result.value) {
		      document.location.href = href;
		    }
		})
	})

});