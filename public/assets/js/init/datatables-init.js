(function ($) {
	//    "use strict";


	/*  Data Table
	-------------*/




	$('#bootstrap-data-table tfoot th').each(function () {
		var title = $(this).text();
		$(this).html('<input type="text" placeholder="Search ' + title + '" />');
	});

	$('#bootstrap-data-table').DataTable({
		lengthMenu: [[10, 20, 50, -1], [10, 20, 50, "All"]],
		// initComplete: function () {
		// 	// Apply the search
		// 	this.api().columns().every(function () {
		// 		var that = this;

		// 		$('input', this.footer()).on('keyup change clear', function () {
		// 			console.log('jalan')
		// 			if (that.search() !== this.value) {
		// 				console.log(this.value)
		// 				that.search(this.value)
		// 					.draw();
		// 			}
		// 		});
		// 	});
		// }
	});
	var wrap_filter = $('#cFilter')
	if (wrap_filter.length !== 0) {
		// wrap_filter.each(function(index, e){

		// })
		let wSelect = document.createElement('select')
		wSelect.classList.add("select");
		wSelect.append(document.createElement('option'))
		// let all_length = 

		wrap_filter.find('select').each(function (i, e) {
			if (!$(e).hasClass('excludedFromCustomFilter')) {
				e.append(document.createElement('option'))
				$('#bootstrap-data-table').DataTable().column(i).data().unique().sort().each(function (d) {
					let wOption = document.createElement('option')
					wOption.value = d
					wOption.innerHTML = d
					e.append(wOption)
				});
			}
		})

		// for(let i = 0; i <= all_length; i++)
		// let wOption = document.createElement('option')
		// wOption.classList.add("mystyle");

	}
	// $('.select').select2();

	// $('#bootstrap-data-table').DataTable().columns().every(function(){
	// 	console.log(this)
	// })
	// debugger;

	$('#bootstrap-data-transaksi').DataTable({
		order: [[2, 'asc']],
		rowGroup: {
			dataSrc: 0
		},
		initComplete: function () {
			// Apply the search
			this.api().columns().every(function () {
				var that = this;

				$('input', this.footer()).on('keyup change clear', function () {
					console.log('jalan')
					if (that.search() !== this.value) {
						that
							.search(this.value)
							.draw();
					}
				});
			});
		}

	});

	// $('#bootstrap-data-table2').DataTable({
	// 	lengthMenu: [[10, 20, 50, -1], [10, 20, 50, "All"]],
	// });
	var max_tab_table = 10
	for (let x of Array(max_tab_table).keys()) {
		slc = '#bootstrap-data-table' + (x + 2)

		try {
			$(slc).DataTable({
				lengthMenu: [[10, 20, 50, -1], [10, 20, 50, "All"]],
			});
		} catch (err) {
			console.log(err)
		}
	}

	$('#bootstrap-data-table-export').DataTable({
		dom: 'lBfrtip',
		lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
		buttons: [
			'copy', 'csv', 'excel', 'pdf', 'print'
		]
	});

	$('#row-select').DataTable({
		initComplete: function () {
			this.api().columns().every(function () {
				var column = this;
				var select = $('<select class="form-control"><option value=""></option></select>')
					.appendTo($(column.footer()).empty())
					.on('change', function () {
						var val = $.fn.dataTable.util.escapeRegex(
							$(this).val()
						);

						column
							.search(val ? '^' + val + '$' : '', true, false)
							.draw();
					});

				column.data().unique().sort().each(function (d, j) {
					select.append('<option value="' + d + '">' + d + '</option>')
				});
			});
		},
		"autoWidth": false
	});






})(jQuery);