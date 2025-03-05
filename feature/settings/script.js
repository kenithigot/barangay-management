var table

//Display Datatable
$(document).ready(function () {
  table = $('#addAccount-table').DataTable({
    scrollX: true,
    ajax: {
      url: 'db_display_account.php',
      type: 'POST'
    },
    columns: [
      {
        data: null,
        render: function (data, type, row) {
          return (
            '<button type="submit" id="btn-viewAccount" class="border px-3 py-1 rounded-md text-xs text-white bg-slate-600" data-id="' +
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
          return row.firstName + ' ' + row.lastName
        }
      },
      { data: 'user_type' },
      { data: 'timestamp' }
    ],

    order: [[1, 'asc']]
  })
  setInterval(function () {
    table.ajax.reload(null, false)
  }, 2000)
})

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

//Delete ID Data
$(document).on('click', '#btn-viewDataDelete', function (e) {
  e.preventDefault()

  var id = $('#id').val() // Get the ID from the hidden input inside modal

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
    text: 'This action will delete the selected account.',
    showCancelButton: true,
    confirmButtonColor: '#d33',
    cancelButtonColor: '#3085d6',
    confirmButtonText: 'Yes'
  }).then(result => {
    if (result.isConfirmed) {
      $.ajax({
        url: 'db_id_delete.php',
        type: 'POST',
        dataType: 'json',
        data: { id: id },
        success: function (response) {
          if (response.success) {
            Swal.fire({
              icon: 'success',
              title: 'Successfully Deleted!',
              text: 'The account has been deleted.'
            }).then(() => {
              location.reload() // Reload page after deleting
            })
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Error!',
              text: response.message || 'Error deleting account.'
            })
          }
        },
        error: function () {
          Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: 'Something went wrong while deleting.'
          })
        }
      })
    }
  })
})

//Print Data
$(document).on('click', "[name='btn-print']", function () {
  var table = $('#addAccount-table').DataTable()
  var tableData = table.rows({ search: 'applied' }).data() // Get filtered/displayed data

  var printWindow = window.open('', '', 'width=800,height=600')

  var tableHTML = `
        <html>
        <head>
            <title></title>
            <style>
                table {
                    width: 100%;
                    border-collapse: collapse;
                }
                th, td {
                    border: 1px solid black;
                    padding: 5px;
                    text-align: left;
                }
                th {
                    background-color: gray;
                    color:white;
                    font-weight:bold;
                }
                @media print {
                    body {
                        -webkit-print-color-adjust: exact;
                        print-color-adjust: exact;
                    }
                    th {
                        background-color: gray !important;
                        -webkit-print-color-adjust: exact;
                        print-color-adjust: exact;
                    }
                }
                .header-position{
                    display:flex;
                    justify-content:center;
                    align-items:center
                } 
                .header-position img{ 
                    width:150px;
                    height:100px;
                    padding-left:20px;
                    padding-right:20px; 
                }  
                .text-center{
                    text-align:center;
                    font-size:24px;
                }
                .text-lg{
                    font-size:26px;
                }

                .line{
                    width:100vw;
                    height:2px;
                    background-color:black;
                }
                .border-bottom{
                    padding-bottom:2px;
                    border-bottom:2px solid black;
                }
                .m-0{
                    margin:0;
                    padding:0;
                }
                .m-1{
                    margin:1px;
                    padding:1px;
                }
                .address-header{
                    display:flex;
                } 
                .pt-1{
                    padding-top:4px;
                }
                .pb-3{
                    padding-bottom:12px;
                }
                .text-base{
                    font-size:12px;
                }   
            </style>
        </head>
        <body>
            <div class="header-position pb-3">
                <img class="px-img" src="../../src/imgs-vid/logo.png">
                <div class="">
                    <h4 class="m-1 text-lg border-bottom">Barangay Labuay</h4>
                    <p class="m-0 pt-1">9206, Maigo, Lanao del Norte</p>
                </div>  
                <img class="px-img" src="../../src/imgs-vid/logo.png">
            </div>
            <div class="line"></div><br><br>
            <div class="text-center"> 
                <h3 class="">Registered Account Info</h3>
            </div>
            <table>
                <thead>
                    <tr class="text-base">
                        <th>#</th>
                        <th>Name</th>
                        <th>Contact Number</th>
                        <th>Date Created</th>
                        <th>Address</th>
                        <th>Email Address</th>
                        <th>Account Role</th>
                    </tr>
                </thead>
                <tbody>`

  tableData.each(function (row, index) {
    tableHTML += `
            <tr class="text-base">
                <td>${index + 1}</td>
                <td>${row.firstName} ${row.lastName}</td>
                <td>${row.contactNum}</td>
                <td>${row.timestamp}</td>
                <td>${row.address}</td>
                <td>${row.email_address}</td>
                <td>${row.user_type}</td>
            </tr>`
  })

  tableHTML += `
                </tbody>
            </table>
            <script>
                window.onload = function () {
                    window.print();
                    window.onafterprint = function () {
                        window.close();
                    };
                };
            <\/script>
        </body>
        </html>`

  printWindow.document.write(tableHTML)
  printWindow.document.close()
})

// View Data
$(document).on('click', '#btn-viewAccount', function (e) {
  e.preventDefault()
  var id = $(this).data('id')

  $.ajax({
    url: 'db_view_account.php',
    type: 'POST',
    data: { id: id },
    dataType: 'json',
    success: function (response) {
      if (response && !response.error) {
        $('#id').val(response.id)
        var nameMerge = response.firstName + ' ' + response.lastName
        $('#view_fullName').val(nameMerge)
        $('#view_address').val(response.address)
        $('#view_contactNum').val(response.contactNum)
        $('#view_userRole').val(response.user_type)
        $('#view_emailAddress').val(response.email_address)
        $('#view_officialRank').val(response.official_classification)

        if (response.user_role == "3") {
          $('#officialRankBlock').show(); 
      } else {
          $('#officialRankBlock').hide(); 
      }

        // Dynamically update the "Edit" button link
        var editUrl = 'edit account.php?id=' + response.id
        $('#edit-button').attr('href', editUrl) // Assuming you gave the Edit button an id of 'edit-button'

        // Manually trigger the modal
        HSOverlay.open('#hs-display-acc')
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

// Show barangay official ranking block
function userTypeBlock () {
  var userType = document.getElementById('userType').value
  var dropdownOfficial = document.getElementById('dropdownOfficial')

  if (userType == '3') {
    dropdownOfficial.style.display = 'block'
  } else {
    dropdownOfficial.style.display = 'none'
    officialRanking.selectedIndex = 0;
  }
}

// Handling function of official ranking related
document.addEventListener("DOMContentLoaded", function() {
  // Toggle User Account Section
  const toggleButton = document.getElementById('toggleButton');
  const section = document.getElementById('userAccountSection');
  const buttonText = document.getElementById('buttonText');

  if (toggleButton && section && buttonText) {
      toggleButton.addEventListener('click', function () {
          section.classList.toggle('hidden');
          buttonText.textContent = section.classList.contains('hidden') ? 'Add user account' : 'Close';
      });
  }

  // Show Barangay Official Ranking Block
  const userTypeSelect = document.getElementById("edit_userType");
  const officialDropdownBlock = document.getElementById("officialDropdownBlock");
  const officialRankSelect = document.getElementById("edit_officialRank");

  function officialRankBlock() {
      if (!userTypeSelect || !officialDropdownBlock || !officialRankSelect) return;

      if (userTypeSelect.value === "3") {
          officialDropdownBlock.classList.remove("hidden");
          officialRankSelect.required = true;
      } else {
          officialDropdownBlock.classList.add("hidden");
          officialRankSelect.required = false;
          officialRankSelect.selectedIndex = 0;
      }
  }

  if (userTypeSelect) {
      userTypeSelect.addEventListener("change", officialRankBlock);
      officialRankBlock(); // Run on load to set initial state
  }
});
