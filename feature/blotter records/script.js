// Display Pending Docs
$(document).ready(function () {
  let table = $('#displayBlotter').DataTable({
    searching: true,
    ajax: {
      url: 'db_display_blotter_record.php',
      type: 'POST'
    },
    columns: [
      {
        data: null,
        render: function (data, type, row) {
          return (
            '<button type="button" class="btn-viewData border px-3 py-1 rounded-md text-xs text-white bg-slate-600" data-id="' +
            row.id +
            '">View</button>'
          )
        }
      },
      {
        data: null,
        render: function (data, type, row, meta) {
          return meta.row + 1
        }
      },
      {
			data: null,
        	render: function (data, type, row) {
          return "CN-" + row.blotter_caseNumber
        }
       },
      { data: 'complainant_name' },
      { data: 'incident_classification' },
      { data: 'date_of_incident' },
      { data: 'date_filing' }
      
    ]
  })

  setInterval(function () {
    table.ajax.reload(null, false)
  }, 2000)
})


// View blotter Record
$(document).on("click", ".btn-viewData", function (e) {
	e.preventDefault();
	var id = $(this).data("id");
 
	$.ajax({
	  url: "db_view_blotter.php",
	  type: "POST",
	  data: { id: id },
	  dataType: "json",
	  success: function (response) {
		 if (response) {
			$("#id").val(response.id);
			$("#view_blotter_caseNumber").text(response.blotter_caseNumber);
			$("#view_complainantName").val(response.complainant_name);
			$("#view_respondent_name").val(response.respondent_name);
			$("#view_incidentDetail").val(response.incident_details);
			$("#view_locationOfIncident").val(response.location_of_incident);
			$("#view_incidentType").val(response.incident_classification);
			$("#view_blotter_status").text(response.blotter_status);
			
			// Format into formatting of input
			const dateOfIncident = new Date(response.date_of_incident);
			const formattedDate = dateOfIncident.toISOString().slice(0, 16);
			$("#view_dateAndTimeIncident").val(formattedDate);

			// Format into formatting of input
			const dateOfFilling = new Date(response.date_filing);
			const formattedDateFilling = dateOfFilling.toISOString().slice(0, 16);
			$("#view_dateOfFiling").val(formattedDateFilling);

			// Manually trigger the modal
			HSOverlay.open("#viewModal");
		 } else {
			console.error("No data available:", response.error);
		 }
	  },
	  error: function (xhr, status, error) {
		 console.error("AJAX Error:", error);
		 console.log("Response Text:", xhr.responseText);
		 alert("AJAX Error: " + error);
	  },
	});
 });

 //Dismissed ID Data
$(document).on('click', '#btn-dismissed', function (e) {
	e.preventDefault()
 
	var id = $('#id').val()
 
	if (!id) {
	  Swal.fire({
		 icon: 'error',
		 title: 'Error!',
		 text: 'User ID is missing!'
	  })
	  return
	}
 
	Swal.fire({
	  icon: 'warning',
	  title: 'Are you sure?',
	  text: 'This action mark this case dismissed.',
	  showCancelButton: true,
	  confirmButtonColor: '#d33',
	  cancelButtonColor: '#3085d6',
	  confirmButtonText: 'Yes'
	}).then(result => {
	  if (result.isConfirmed) {
		 $.ajax({
			url: 'db_blotter_dismissed.php',
			type: 'POST',
			dataType: 'json',
			data: { id: id },
			success: function (response) {
			  if (response.success) {
				 Swal.fire({
					icon: 'success',
					title: 'Cased Dismissed!',
					text: 'The case has been dismissed.'
				 }).then(() => {
					location.reload() // Reload page after deleting
				 })
			  } else {
				 Swal.fire({
					icon: 'error',
					title: 'Error!',
					text: response.message || 'Error dismissing the case.'
				 })
			  }
			},
			error: function () {
			  Swal.fire({
				 icon: 'error',
				 title: 'Error!',
				 text: 'Something went wrong.'
			  })
			}
		 })
	  }
	})
 })