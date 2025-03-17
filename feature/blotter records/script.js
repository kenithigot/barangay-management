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
      { data: 'complainant_name' },
      { data: 'incident_classification' },
      { data: 'date_of_incident' },
      { data: 'complainant_name' },
      { data: 'complainant_name' }
    ]
  })

  setInterval(function () {
    table.ajax.reload(null, false)
  }, 2000)
})
