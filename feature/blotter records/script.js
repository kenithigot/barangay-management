// Display Pending Docs
$(document).ready(function () {
  let table = $('#displayPendingDocument').DataTable({
    searching: true,
    ajax: {
      url: 'db_pending_docs.php',
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
          return row.firstName + ' ' + row.middleInitial + ' ' + row.lastName
        }
      },
      { data: 'age' },
      { data: 'gender' },
      { data: 'address' },
      { data: 'documentClassification' },
      { data: 'purpose' }
    ]
  })

  setInterval(function () {
    table.ajax.reload(null, false)
  }, 2000)
})
