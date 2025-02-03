$(document).ready(function(){
    var table = $('#addAccount-table').DataTable({
        processing: true,
        scrollX: true,
        ajax: {
            url: "db_display_account.php",
            type: "POST"
        },
        columns: [
            {
                data: null,  
                render: function(data, type, row) {
                    return '<button type="submit" class="border px-3 py-2 rounded-md text-sm text-gray-200 bg-slate-600" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-large-modal" data-hs-overlay="#hs-large-modal">View</button>';
                }
            },
            {
                data: null, 
                render: function(data, type, row, meta) {
                    return meta.row + 1;
                }
            },
            {
                data: null,  
                render: function(data, type, row) {
                    return row.firstName + " " + row.lastName;
                }
            },
            {data: "contactNum"},
            {data: "timestamp"},
        ],
        
        order: [[1, 'desc']]
    })
})