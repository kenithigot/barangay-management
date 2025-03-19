new DataTable("#transactionTable", {
  processing: true,
  scrollX: true,
});

// Function fetch and update monthly revenue
function monthlyRevenueFetch() {
  $.ajax({
    url: "db_request_revenue.php",
    type: "POST",
    dataType: "json",
    success: function (response) {
      if (response) {
        // Populate data
        $("#revenueMonthly").text(response.formatMonthlyRevenue);
        $("#revenueTotal").text(response.formatTotalRevenue);
      }
    },
    error: function (xhr, status, error) {
      console.error("AJAX Error:", error);
    },
  });
}
// Fetch data immediately when the page loads
window.addEventListener("load", () => {
  monthlyRevenueFetch();
});
setInterval(monthlyRevenueFetch, 2000); // Update every 2 seconds

// Function to fetch and update the blotter cases record
function blotterRecordFetch() {
  $.ajax({
    url: "db_blotter_status_count.php",
    type: "POST",
    dataType: "json",
    success: function (response) {
      if (response) {
        $("#casesRecord").text(response.casesRecord);

        if (window.caseChart) {
          window.caseChart.updateSeries([
            response.ongoingStatus || 0,
            response.dismissedStatus || 0,
            response.resolvedStatus || 0,
          ]);
        }
      }
    },
    error: function (xhr, status, error) {
      console.error("AJAX Error:", error);
    },
  });
}

// Function to initialize the donut chart
function initializeDonutChart() {
  var options = {
    chart: {
      height: "100%",
      type: "donut",
    },
    plotOptions: {
      pie: {
        donut: {
          size: "70%",
        },
      },
    },
    series: [0, 0, 0],
    labels: ["Ongoing", "Dismissed", "Resolved"],
    legend: {
      show: true,
      position: "bottom",
      horizontalAlign: "center",
      fontSize: "14px",
      markers: {
        width: 12,
        height: 12,
      },
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      width: 1,
    },
    states: {
      hover: {
        filter: {
          type: "lighten",
          value: 0.15,
        },
      },
    },
    tooltip: {
      enabled: true,
      style: {
        fontSize: "20px",
        fontWeight: "400",
        fontFamily: "Inter, ui-sans-serif",
      },
    },
    colors: ["#1d4ed8", "#e74c3c", "#27ae60"],
  };

  // Create the chart and store it in window.caseChart
  window.caseChart = new ApexCharts(
    document.querySelector("#hs-caseRecord"),
    options
  );
  window.caseChart.render();
}

// Fetch data immediately when the page loads
window.addEventListener("load", () => {
  initializeDonutChart();
  blotterRecordFetch();
});
setInterval(blotterRecordFetch, 2000); // Update every 2 seconds

// Function to fetch and update the blotter cases type
function blotterCaseType() {
  $.ajax({
    url: "db_blotter_case_type.php",
    type: "POST",
    dataType: "json",
    success: function (response) {
      if (response) {
        if (window.caseTypeChart) {
          window.caseTypeChart.updateSeries([
            response.firstCaseType || 0,
            response.secondCaseType || 0,
            response.thirdCaseType || 0,
            response.forthCaseType || 0,
            response.fifthCaseType || 0,
            response.sixCaseType || 0,
          ]);
        }
      }
    },
    error: function (xhr, status, error) {
      console.error("AJAX Error:", error);
    },
  });
}

// Function to initialize the donut chart
function initializeCaseTypeDonut() {
  var options = {
    chart: {
      height: "100%",
      type: "donut",
    },
    plotOptions: {
      pie: {
        donut: {
          size: "70%",
        },
      },
    },
    series: [0, 0, 0, 0, 0, 0],
    labels: [
      "Criminal Incidents",
      "Civil Disputes",
      "Safety and Order",
      "Domestic Issues",
      "Community Concerns",
      "Miscellaneous Reports",
    ],
    legend: {
      show: true,
      position: "bottom",
      horizontalAlign: "center",
      fontSize: "14px",
      markers: {
        width: 12,
        height: 12,
      },
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      width: 1,
    },
    states: {
      hover: {
        filter: {
          type: "lighten",
          value: 0.15,
        },
      },
    },
    tooltip: {
      enabled: true,
      style: {
        fontSize: "20px",
        fontWeight: "400",
        fontFamily: "Inter, ui-sans-serif",
      },
    },
    colors: ["#F97316", "#27ae60", "#3B82F6", "#9333EA", "#EAB308", "#9CA3AF"],
  };

  // Create the chart and store it in window.caseTypeChart
  window.caseTypeChart = new ApexCharts(
    document.querySelector("#hs-caseType"),
    options
  );
  window.caseTypeChart.render();
}

// Fetch data immediately when the page loads
window.addEventListener("load", () => {
  initializeCaseTypeDonut();
  blotterCaseType();
});
setInterval(blotterCaseType, 2000); // Update every 2 seconds

// Function to fetch and update the requested Documents
function requestedDocsFetch() {
  $.ajax({
    url: "db_requested_docs.php",
    type: "POST",
    dataType: "json",
    success: function (response) {
      if (response) {
        if (window.requestedDocsChart) {
          window.requestedDocsChart.updateSeries([
            response.approveRequest || 0,
            response.pendingRequest || 0,
            response.doneRequest || 0,
          ]);
        }
      }
    },
    error: function (xhr, status, error) {
      console.error("AJAX Error:", error);
    },
  });
}

// Function to initialize the donut chart
function initializeRequestedDocsDonut() {
  var options = {
    chart: {
      height: "100%",
      type: "donut",
    },
    plotOptions: {
      pie: {
        donut: {
          size: "70%",
        },
      },
    },
    series: [0, 0, 0],
    labels: ["Approved Request", "Pending Request", "Accomplished Request"],
    legend: {
      show: true,
      position: "bottom",
      horizontalAlign: "center",
      fontSize: "14px",
      markers: {
        width: 12,
        height: 12,
      },
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      width: 1,
    },
    states: {
      hover: {
        filter: {
          type: "lighten",
          value: 0.15,
        },
      },
    },
    tooltip: {
      enabled: true,
      style: {
        fontSize: "20px",
        fontWeight: "400",
        fontFamily: "Inter, ui-sans-serif",
      },
    },
    colors: ["#1d4ed8", "#e74c3c", "#27ae60"],
  };

  // Create the chart and store it in window.caseChart
  window.requestedDocsChart = new ApexCharts(
    document.querySelector("#hs-requestedDocs"),
    options
  );
  window.requestedDocsChart.render();
}

// Fetch data immediately when the page loads
window.addEventListener("load", () => {
  initializeRequestedDocsDonut();
  requestedDocsFetch();
});
setInterval(requestedDocsFetch, 2000); // Update every 2 seconds

// Function to fetch and update the approve Documents
function approveDocsFetch() {
  $.ajax({
    url: "db_approve_docs.php",
    type: "POST",
    dataType: "json",
    success: function (response) {
      if (response) {
        if (window.approveDocsChart) {
          window.approveDocsChart.updateSeries([
            response.barangayCertificate || 0,
            response.certificateOfIndigency || 0,
            response.barangayClearance || 0,
          ]);
        }
      }
    },
    error: function (xhr, status, error) {
      console.error("AJAX Error:", error);
    },
  });
}

// Function to initialize the donut chart
function initializeApproveDocsDonut() {
  var options = {
    chart: {
      height: "100%",
      type: "donut",
    },
    plotOptions: {
      pie: {
        donut: {
          size: "70%",
        },
      },
    },
    series: [0, 0, 0],
    labels: ["Certificate", "Certificate of Indigency", "Barangay Clearance"],
    legend: {
      show: true,
      position: "bottom",
      horizontalAlign: "center",
      fontSize: "14px",
      markers: {
        width: 12,
        height: 12,
      },
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      width: 1,
    },
    states: {
      hover: {
        filter: {
          type: "lighten",
          value: 0.15,
        },
      },
    },
    tooltip: {
      enabled: true,
      style: {
        fontSize: "20px",
        fontWeight: "400",
        fontFamily: "Inter, ui-sans-serif",
      },
    },
    colors: ["#1d4ed8", "#27ae60", "#f5b041"],
  };

  // Create the chart and store it in window.caseChart
  window.approveDocsChart = new ApexCharts(
    document.querySelector("#hs-residentDocs"),
    options
  );
  window.approveDocsChart.render();
}

// Fetch data immediately when the page loads
window.addEventListener("load", () => {
  initializeApproveDocsDonut();
  approveDocsFetch();
});
setInterval(approveDocsFetch, 2000); // Update every 2 seconds

// Function to fetch and update the age
function requestedAgeFetch() {
  $.ajax({
    url: "db_requested_age.php",
    type: "POST",
    dataType: "json",
    success: function (response) {
      if (response) {
        $("#residentRequested").text(response.residentRequested);

        if (window.requestedAgeChart) {
          window.requestedAgeChart.updateSeries([
            response.child || 0,
            response.teen || 0,
            response.youngAdult || 0,
            response.middleAdult || 0,
            response.senior || 0,
            response.elderly || 0,
          ]);
        }
      }
    },
    error: function (xhr, status, error) {
      console.error("AJAX Error:", error);
    },
  });
}

// Function to initialize the donut chart
function initializeRequestAgePie() {
  var options = {
    chart: {
      height: "100%",
      type: "pie",
    },
    plotOptions: {
      pie: {
        dataLabels: {
          offset: -10,
        },
      },
    },
    series: [0, 0, 0, 0, 0, 0],
    labels: ["0-12", "13-19", "20-35", "36-50", "51-65", "66+"],
    legend: {
      show: true,
      position: "bottom",
      horizontalAlign: "center",
      fontSize: "14px",
      markers: {
        width: 12,
        height: 12,
      },
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      width: 1,
    },
    states: {
      hover: {
        filter: {
          type: "lighten",
          value: 0.15,
        },
      },
    },
    tooltip: {
      enabled: true,
      style: {
        fontSize: "20px",
        fontWeight: "400",
        fontFamily: "Inter, ui-sans-serif",
      },
    },
    colors: ["#F97316", "#22C55E", "#1d4ed8", "#9333EA", "#EAB308", "#9CA3AF"],
  };

  // Create the chart and store it in window.caseChart
  window.requestedAgeChart = new ApexCharts(
    document.querySelector("#hs-requestAge"),
    options
  );
  window.requestedAgeChart.render();
}

// Fetch data immediately when the page loads
window.addEventListener("load", () => {
  initializeRequestAgePie();
  requestedAgeFetch();
});
setInterval(requestedAgeFetch, 2000); // Update every 2 seconds

// Function to fetch and update resident request
function residentRequestFetch() {
  $.ajax({
    url: "db_requested_gender.php",
    type: "POST",
    dataType: "json",
    success: function (response) {
      if (response) {
        $("#residentRequested").text(response.residentRequested);

        if (window.requestedGenderChart) {
          window.requestedGenderChart.updateSeries([
            response.male || 0,
            response.female || 0,
          ]);
        }
      }
    },
    error: function (xhr, status, error) {
      console.error("AJAX Error:", error);
    },
  });
}

// Function to initialize the pie chart
function initializeRequestGenderPie() {
  var options = {
    chart: {
      height: "100%",
      type: "pie",
    },
    plotOptions: {
      pie: {
        dataLabels: {
          offset: -10,
        },
      },
    },
    series: [0, 0],
    labels: ["Male", "Female"],
    legend: {
      show: true,
      position: "bottom",
      horizontalAlign: "center",
      fontSize: "14px",
      markers: {
        width: 12,
        height: 12,
      },
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      width: 1,
    },
    states: {
      hover: {
        filter: {
          type: "lighten",
          value: 0.15,
        },
      },
    },
    tooltip: {
      enabled: true,
      style: {
        fontSize: "20px",
        fontWeight: "400",
        fontFamily: "Inter, ui-sans-serif",
      },
    },
    colors: ["#1d4ed8", "#FF3399"],
  };

  // Create the chart and store it in window.caseChart
  window.requestedGenderChart = new ApexCharts(
    document.querySelector("#hs-gender"),
    options
  );
  window.requestedGenderChart.render();
}

// Fetch data immediately when the page loads
window.addEventListener("load", () => {
  initializeRequestGenderPie();
  residentRequestFetch();
});
setInterval(residentRequestFetch, 2000); // Update every 2 seconds

// Function to fetch and update official and staff
function officialStaffFetch() {
  $.ajax({
    url: "db_officialStaff.php",
    type: "POST",
    dataType: "json",
    success: function (response) {
      if (response) {
        if (window.officialStaffChart) {
          window.officialStaffChart.updateSeries([
            response.barangayOfficial || 0,
            response.staff || 0,
          ]);
        }
      }
    },
    error: function (xhr, status, error) {
      console.error("AJAX Error:", error);
    },
  });
}

// Function to initialize the donut chart
function initializeOfficialStaffPie() {
  var options = {
    chart: {
      height: "100%",
      type: "donut",
    },
    plotOptions: {
      pie: {
        donut: {
          size: "70%",
        },
      },
    },
    series: [0, 0],
    labels: ["Barangay Official", "Staff"],
    legend: {
      show: true,
      position: "bottom",
      horizontalAlign: "center",
      fontSize: "14px",
      markers: {
        width: 12,
        height: 12,
      },
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      width: 1,
    },
    states: {
      hover: {
        filter: {
          type: "lighten",
          value: 0.15,
        },
      },
    },
    tooltip: {
      enabled: true,
      style: {
        fontSize: "20px",
        fontWeight: "400",
        fontFamily: "Inter, ui-sans-serif",
      },
    },
    colors: ["#f5b041", "#1d4ed8"],
  };

  // Create the chart and store it in window.caseChart
  window.officialStaffChart = new ApexCharts(
    document.querySelector("#hs-officialsAndStaff"),
    options
  );
  window.officialStaffChart.render();
}

// Fetch data immediately when the page loads
window.addEventListener("load", () => {
  initializeOfficialStaffPie();
  officialStaffFetch();
});
setInterval(officialStaffFetch, 2000); // Update every 2 seconds

//Bar Chart Revenue over time
$(document).ready(function () {
  let options = {
    chart: {
      type: "bar",
      height: 300,
      toolbar: { show: true },
      zoom: { enabled: false },
    },
    series: [{ name: "Revenue", data: [] }],
    plotOptions: {
      bar: {
        horizontal: false,
        borderRadius: 6,
        borderRadiusApplication: "end",
        borderRadiusWhenStacked: "all",
      },
    },
    xaxis: {
      labels: {
        formatter: (title) =>
          typeof title === "string" ? title.slice(0, 3) : "",
      },
    },
    yaxis: {
      labels: {
        style: {
          colors: "#1f2937",
          fontSize: "14px",
          fontFamily: "Inter, ui-sans-serif",
          fontWeight: 600,
        },
        formatter: (value) => value.toLocaleString(),
      },
    },
    tooltip: {
      enabled: true,
      style: {
        fontSize: "20px",
        fontWeight: "400",
        fontFamily: "Inter, ui-sans-serif",
      },
      y: { 
        formatter: (value) => `Php ${value.toLocaleString()}` 
      },
    },
    colors: ["#1d4ed8"],
  };

  let chart = new ApexCharts(
    document.querySelector("#hs-revenueOverTime"),
    options
  );
  chart.render();

  function fetchRevenueData(year) {
    $.ajax({
      url: "db_request_revenue_table.php",
      type: "GET",
      data: {year: year},
      dataType: "json",
      success: function (response) {
        console.log(response);

        chart.updateOptions({
          xaxis: { categories: response.months },
          series: [
            { 
              name: "Revenue", 
              data: response.revenues.map(Number) 
            }
          ],
        });
      },
      error: function (xhr, status, error) {
        console.error("Error fetching revenue data:", error);
      },
    });
  }

  // Fetch data for the initially selected year
  let selectedYear = $("#yearRevenue").val();
  fetchRevenueData(selectedYear);

  // When the user selects a new year, update the chart and restart interval
  $("#yearRevenue").change(function () {
    selectedYear = $(this).val(); // Update the selected year
    fetchRevenueData(selectedYear);

    // Clear and restart the interval with the new year
    clearInterval(autoUpdate);
    autoUpdate = setInterval(() => fetchRevenueData(selectedYear), 2000); // ✅ Refresh every 10 seconds
  });

  // Set an interval to refresh data every 10 seconds
  let autoUpdate = setInterval(() => fetchRevenueData(selectedYear), 2000);
});
