// Display Pending Docs
$(document).ready(function () {
  let table = $("#displayPendingDocument").DataTable({
    searching: true,
    ajax: {
      url: "db_pending_docs.php",
      type: "POST",
    },
    columns: [
      {
        data: null,
        render: function (data, type, row) {
          return (
            '<button type="button" class="btn-viewData border px-3 py-1 rounded-md text-xs text-white bg-slate-600" data-id="' +
            row.id +
            '">View</button>'
          );
        },
      },
      {
        data: null,
        render: function (data, type, row, meta) {
          return meta.row + 1;
        },
      },
      {
        data: null,
        render: function (data, type, row) {
          return row.firstName + " " + row.middleInitial + " " + row.lastName;
        },
      },
      { data: "age" },
      { data: "gender" },
      { data: "address" },
      { data: "documentClassification" },
      { data: "purpose" },
    ],
  });

  setInterval(function () {
    table.ajax.reload(null, false);
  }, 2000);
});

// Display Approve Docs
$(document).ready(function () {
  let table = $("#displayApproveDocument").DataTable({
    searching: true,
    ajax: {
      url: "db_approve.docs.php",
      type: "POST",
    },
    columns: [
      {
        data: null,
        render: function (data, type, row) {
          return (
            '<button type="button" class="btn-printDocs border px-3 py-1 rounded-md text-xs text-white bg-green-800" data-id="' +
            row.id +
            '" data-documentType="' +
            row.documentType +
            '">Print</button>' +
            '<button type="button" class="btn-doneDocs border px-3 py-1 rounded-md text-xs text-white bg-slate-600" data-id="' +
            row.id +
            '">Done</button>'
          );
        },
      },
      {
        data: null,
        render: function (data, type, row, meta) {
          return meta.row + 1;
        },
      },
      {
        data: null,
        render: function (data, type, row) {
          return row.firstName + " " + row.middleInitial + " " + row.lastName;
        },
      },
      { data: "age" },
      { data: "gender" },
      { data: "address" },
      { data: "documentClassification" },
      { data: "purpose" },
    ],
  });
  setInterval(function () {
    table.ajax.reload(null, false);
  }, 2000);
});

// View Data
$(document).on("click", ".btn-viewData", function (e) {
  e.preventDefault();
  var id = $(this).data("id");

  $.ajax({
    url: "db_view_residents.php",
    type: "POST",
    data: { id: id },
    dataType: "json",
    success: function (response) {
      if (response) {
        $("#id").val(response.id);
        var nameMerge =
          response.firstName +
          " " +
          response.middleInitial +
          " " +
          response.lastName;
        $("#view_fullName").val(nameMerge);
        $("#view_userAge").val(response.age);
        $("#view_gender").val(response.gender);
        $("#view_civilStatus").val(response.civilStatus);
        $("#view_contactNum").val(response.contactNum);
        $("#view_address").val(response.address);
        $("#view_documentType").val(response.documentClassification);
        $("#view_documentPurpose").val(response.purpose);
        $("#view_paymentMethod").val(response.paymentMethod);
        $("#view_referenceNum").val(response.referenceNum);
        $("#view_residencyYear").val(response.residencyYear);

        if (response.uploadReceipt) {
          $("#receiptImg").attr("src", response.uploadReceipt);
        } else {
          $("#receiptImg").attr("src", "../../src/imgs-vid/profile-man.jpg");
        }

        if (response.paymentMethod === "On-Cash Payment") {
          $("#gcashModeBlock").hide();
        } else {
          $("#gcashModeBlock").show();
        }

        // Manually trigger the modal
        HSOverlay.open("#displayModal");
      } else {
        console.error("No data available:", response.error);
      }
    },
    error: function (xhr, status, error) {
      console.error("AJAX Error:", error);
      console.log("Response Text:", xhr.responseText);
    },
  });
});

// View receipt image
document.addEventListener("DOMContentLoaded", function () {
  const receiptImg = document.getElementById("receiptImg");
  const viewImageLink = document.getElementById("viewImageLink");

  receiptImg.addEventListener("click", function () {
    // Set the image source dynamically as a query parameter
    viewImageLink.href =
      "view_image.php?src=" + encodeURIComponent(receiptImg.src);
    viewImageLink.click();
  });
});

//Print Docs
$(document).on("click", ".btn-printDocs", function (e) {
  e.preventDefault();
  var id = $(this).data("id");

  $.ajax({
    url: "print.php",
    type: "POST",
    data: { id: id },
    success: function (response) {
      if (response) {
        if (response.documentClassification == "Barangay Certificate") {
          var barangayCertPrint = window.open(
            "barangayCertificate.php?id=" + id,
            "_blank"
          );
          if (
            !barangayCertPrint ||
            barangayCertPrint.closed ||
            typeof barangayCertPrint.closed === "undefined"
          ) {
            alert("Please allow pop-ups to print the document.");
          }
        } else if (
          response.documentClassification == "Certificate of Indigency"
        ) {
          var indigentCertPrint = window.open(
            "certificateOfIndigency.php?id=" + id,
            "_blank"
          );
          if (
            !indigentCertPrint ||
            indigentCertPrint.closed ||
            typeof indigentCertPrint.closed === "undefined"
          ) {
            alert("Please allow pop-ups to print the document.");
          }
        } else {
          var barangayClearancePrint = window.open(
            "barangayClearance.php?id=" + id,
            "_blank"
          );
          if (
            !barangayClearancePrint ||
            barangayClearancePrint.closed ||
            typeof barangayClearancePrint.closed === "undefined"
          ) {
            alert("Please allow pop-ups to print the document.");
          }
        }
      }
    },
  });
});

// Mark done for approve docs
$(document).on("click", ".btn-doneDocs", function (e) {
  e.preventDefault();
  var id = $(this).data("id");

  Swal.fire({
    icon: "warning",
    title: "Are you sure?",
    text: "This action will mark done the document as done.",
    showCancelButton: true,
    confirmButtonColor: "#475569",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes",
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: "db_markdone_docs.php",
        type: "POST",
        dataType: "json",
        contentType: "application/x-www-form-urlencoded",
        data: { id: id },
        success: function (response) {
          if (response.success) {
            Swal.fire({
              icon: "success",
              title: "Marked as Done!",
              text: "The document has been successfully updated.",
            }).then(() => {
              window.location.href = "../requested documents/";
            });
          } else {
            Swal.fire({
              icon: "error",
              title: "Error!",
              text: "An error occurred while processing your request.",
            });
          }
        },
        error: function () {
          alert("Error marking done print");
        },
      });
    }
  });
});
