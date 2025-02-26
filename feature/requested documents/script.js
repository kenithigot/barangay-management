//Display Datatable
$(document).ready(function () {
  let table = $('#displayData').DataTable({
    processing: true,
    scrollX: true,
    ajax: {
      url: 'db_display_residents.php',
      type: 'POST'
    },
    columns: [
      {
        data: null,
        render: function (data, type, row) {
          return (
            '<button type="submit" id="btn-viewData" name="btn-viewData" class="border px-3 py-1 rounded-md text-xs text-white bg-slate-600" aria-haspopup="dialog" aria-expanded="false" aria-controls="displayModal" data-hs-overlay="#displayModal" data-id="' +
            row.id +
            '">View</button>'
          )
        }
      },
      {
        data: null,
        render: function (data, type, row) {
          return row.firstName + ' ' + row.middleInitial + ' ' + row.lastName
        }
      },
      { data: 'age' },
      { data: 'gender' },
      { data: 'address' },
      { data: 'documentClassification' },
      { data: 'purpose' }
    ],

    order: [[1, 'desc']]
  })
})

// View Data
$(document).on('click', '#btn-viewData', function (e) {
  e.preventDefault()
  var id = $(this).data('id')

  $.ajax({
    url: 'db_view_residents.php',
    type: 'POST',
    data: { id: id },
    dataType: 'json',
    success: function (response) {
      if (response && !response.error) {
        $('#id').val(response.id)
        var nameMerge =
          response.firstName +
          ' ' +
          response.middleInitial +
          ' ' +
          response.lastName
        $('#view_fullName').val(nameMerge)
        $('#view_userAge').val(response.age)
        $('#view_gender').val(response.gender)
        $('#view_contactNum').val(response.contactNum)
        $('#view_address').val(response.address)
        $('#view_documentType').val(response.documentClassification)
        $('#view_documentPurpose').val(response.purpose)
        $('#view_paymentMethod').val(response.paymentMethod)
        $('#view_referenceNum').val(response.referenceNum)
        if (response.uploadReceipt) {
          $('#receiptImg').attr('src', response.uploadReceipt)
        } else {
          $('#receiptImg').attr('src', '../../src/imgs-vid/profile-man.jpg') // Placeholder if no image is found
        }

        if (response.paymentMethod === 'On-Cash Payment') {
          $('#gcashModeBlock').hide()
        } else {
          $('#gcashModeBlock').show()
        }

        // // Ensure other modals are closed
        // $('.hs-overlay').addClass('hidden').removeClass('block')
      } else {
        console.error('No data available:', response.error)
      }
    },
    error: function (xhr, status, error) {
      console.error('AJAX Error:', error)
      console.log('Response Text:', xhr.responseText)
    }
  })
})


// View receipt image
document.addEventListener("DOMContentLoaded", function() {
  const receiptImg = document.getElementById("receiptImg");
  const viewImageLink = document.getElementById("viewImageLink");

  receiptImg.addEventListener("click", function() {
      // Set the image source dynamically as a query parameter
      viewImageLink.href = "view_image.php?src=" + encodeURIComponent(receiptImg.src);
      viewImageLink.click();
  });
});


//Pending to Approved
//Delete Data
$(document).on('click', '#btn-delete', function (e) {
  e.preventDefault()

  Swal.fire({
    icon: 'warning',
    title: 'Are you sure?',
    text: 'This action will delete all accounts except Admin accounts.',
    showCancelButton: true,
    confirmButtonColor: '#d33',
    cancelButtonColor: '#3085d6',
    confirmButtonText: 'Yes'
  }).then(result => {
    if (result.isConfirmed) {
      $.ajax({
        url: 'db_delete_accounts.php',
        type: 'POST',
        dataType: 'json',
        data: { 'btn-delete': true },
        success: function (response) {
          if (response.success) {
            table.ajax.reload()
            Swal.fire({
              icon: 'success',
              title: 'Successfully Deleted!',
              text: 'Successfully deleted all accounts.'
            })
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Error!',
              text: 'Error Deleting all accounts.'
            })
          }
        },
        error: function () {
          alert('Error deleting client')
        }
      })
    }
  })
})
