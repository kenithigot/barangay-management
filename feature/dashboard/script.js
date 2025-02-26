new DataTable('#transactionTable', {
  processing: true,
  scrollX: true
})

//Donut Chart for Official and Staff
window.addEventListener('load', () => {
  ;(function () {
    buildChart(
      '#hs-officialsAndStaff',
      mode => ({
        chart: {
          height: '100%',
          type: 'donut',
          zoom: {
            enabled: false
          }
        },
        plotOptions: {
          pie: {
            donut: {
              size: '70%'
            }
          }
        },
        series: [barangayOfficials, staff, others],
        labels: ['Barangay Officials', 'Staff', 'Others'],
        legend: {
          show: true,
          position: 'bottom',
          horizontalAlign: 'center',
          fontSize: '14px',
          markers: {
            width: 12,
            height: 12
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          width: 1
        },

        states: {
          hover: {
            filter: {
              type: 'lighten',
              value: 0.15
            }
          }
        },
        tooltip: {
          enabled: true,
          style: {
            fontSize: '20px',
            fontFamily: 'Inter, ui-sans-serif',
            fontWeight: '400',
            colors: ['#e5e7eb', '#e5e7eb']
          }
        }
      }),
      {
        colors: ['#f5b041', '#1d4ed8', '#85929e'],
        stroke: {
          colors: ['rgb(255, 255, 255)']
        }
      }
    )
  })()
})

//Donut Requested Docs
window.addEventListener('load', () => {
  ;(function () {
    buildChart(
      '#hs-requestedDocs',
      mode => ({
        chart: {
          height: '100%',
          type: 'donut',
          zoom: {
            enabled: false
          }
        },
        plotOptions: {
          pie: {
            donut: {
              size: '70%'
            }
          }
        },
        series: [approveRequest, pendingRequest],
        labels: ['Approve Request', 'Pending Request'],
        legend: {
          show: true,
          position: 'bottom',
          horizontalAlign: 'center',
          fontSize: '14px',
          markers: {
            width: 12,
            height: 12
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          width: 1
        },

        states: {
          hover: {
            filter: {
              type: 'lighten',
              value: 0.15
            }
          }
        },
        tooltip: {
          enabled: true,
          style: {
            fontSize: '20px',
            fontFamily: 'Inter, ui-sans-serif',
            fontWeight: '400',
            colors: ['#e5e7eb', '#e5e7eb']
          }
        }
      }),
      {
        colors: ['#27ae60', '#e74c3c'],
        stroke: {
          colors: ['rgb(255, 255, 255)']
        }
      }
    )
  })()
})

//Resident Docs
window.addEventListener('load', () => {
  ;(function () {
    buildChart(
      '#hs-residentDocs',
      mode => ({
        chart: {
          height: '100%',
          type: 'donut',
          zoom: {
            enabled: false
          }
        },
        plotOptions: {
          pie: {
            donut: {
              size: '70%'
            }
          }
        },
        series: [
          barangayCertificate,
          certificateOfIndigency,
          businessClearance
        ],
        labels: ['Certificate', 'Indigency', 'Clearance'],
        legend: {
          show: true,
          position: 'bottom',
          horizontalAlign: 'center',
          fontSize: '14px',
          markers: {
            width: 12,
            height: 12
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          width: 1
        },

        states: {
          hover: {
            filter: {
              type: 'lighten',
              value: 0.15
            }
          }
        },
        tooltip: {
          enabled: true,
          style: {
            fontSize: '20px',
            fontFamily: 'Inter, ui-sans-serif',
            fontWeight: '400',
            colors: ['#e5e7eb', '#e5e7eb']
          }
        }
      }),
      {
        colors: ['#1d4ed8', '#27ae60', '#f5b041'],
        stroke: {
          colors: ['rgb(255, 255, 255)']
        }
      }
    )
  })()
})

// Pie Chart Gender
window.addEventListener('load', () => {
  ;(function () {
    buildChart(
      '#hs-gender',
      () => ({
        chart: {
          height: '100%',
          type: 'pie',
          zoom: {
            enabled: false
          }
        },
        series: [femaleGender, maleGender],
        labels: ['Female', 'Male'],
        legend: {
          show: true,
          position: 'bottom',
          horizontalAlign: 'center',
          fontSize: '14px',
          markers: {
            width: 12,
            height: 12
          }
        },
        dataLabels: {
          enabled: false
        },
        plotOptions: {
          pie: {
            dataLabels: {
              offset: -20
            }
          }
        },
        stroke: {
          width: 1
        },
        tooltip: {
          enabled: true,
          style: {
            fontSize: '20px',
            fontFamily: 'Inter, ui-sans-serif',
            fontWeight: '400',
            colors: ['#e5e7eb', '#e5e7eb']
          }
        },
        states: {
          hover: {
            filter: {
              type: 'lighten',
              value: 0.15
            }
          }
        }
      }),
      {
        colors: ['#FF3399', '#1d4ed8'],
        stroke: {
          colors: ['#E0E0E0']
        }
      }
    )
  })()
})

// Pie Chart Age
window.addEventListener('load', () => {
  ;(function () {
    buildChart(
      '#hs-residentAge',
      () => ({
        chart: {
          height: '100%',
          type: 'pie',
          zoom: {
            enabled: false
          }
        },
        series: [child, teen, youngAdult, middleAdult, senior, elderly],
        labels: ['0-12', '13-19', '20-35', '36-50', '51-65', '66+'],
        legend: {
          show: true,
          position: 'bottom',
          horizontalAlign: 'center',
          fontSize: '14px',
          markers: {
            width: 12,
            height: 12
          }
        },
        dataLabels: {
          enabled: false
        },
        plotOptions: {
          pie: {
            dataLabels: {
              offset: -10
            }
          }
        },
        stroke: {
          width: 1
        },
        tooltip: {
          enabled: true,
          style: {
            fontSize: '20px',
            fontFamily: 'Inter, ui-sans-serif',
            fontWeight: '400',
            colors: [
              '#F97316',
              '#22C55E',
              '#3B82F6',
              '#9333EA',
              '#EAB308',
              '#9CA3AF'
            ]
          }
        },
        states: {
          hover: {
            filter: {
              type: 'lighten',
              value: 0.15
            }
          }
        }
      }),
      {
        colors: [
          '#dc7633',
          '#27ae60',
          '#1d4ed8',
          '#e74c3c',
          '#f5b041',
          '#85929e'
        ],
        stroke: {
          colors: ['#E0E0E0']
        }
      }
    )
  })()
})

//Bar Chart Revenue over time
window.addEventListener('load', () => {
  // Apex Single Bar Charts
  ;(function () {
    buildChart(
      '#hs-revenueOverTime',
      mode => ({
        chart: {
          type: 'bar',
          height: 300,
          toolbar: {
            show: true
          },
          zoom: {
            enabled: false
          }
        },
        series: [
          {
            name: 'Sales',
            data: [
              23000, 44000, 55000, 57000, 56000, 61000, 58000, 63000, 60000,
              66000, 34000, 100000
            ]
          }
        ],
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '16px',
            borderRadius: 0
          }
        },
        legend: {
          show: false
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        xaxis: {
          categories: [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December'
          ],
          axisBorder: {
            show: true
          },
          axisTicks: {
            show: false
          },
          crosshairs: {
            show: false
          },
          labels: {
            style: {
              colors: '#9ca3af',
              fontSize: '13px',
              fontFamily: 'Inter, ui-sans-serif',
              fontWeight: 400
            },
            offsetX: -2,
            formatter: title => title.slice(0, 3)
          }
        },
        yaxis: {
          labels: {
            align: 'left',
            minWidth: 0,
            maxWidth: 140,
            style: {
              colors: '#9ca3af',
              fontSize: '13px',
              fontFamily: 'Inter, ui-sans-serif',
              fontWeight: 400
            },
            formatter: value => (value >= 1000 ? `${value / 1000}k` : value)
          }
        },
        states: {
          hover: {
            filter: {
              type: 'none' // Disables darkening effect
            }
          }
        },
        tooltip: {
          theme: 'light',
          y: {
            formatter: value => `$${value >= 1000 ? `${value / 1000}k` : value}`
          },
          custom: function (props) {
            const { categories } = props.ctx.opts.xaxis
            const { dataPointIndex } = props
            const title = categories[dataPointIndex]
            const newTitle = `${title}`

            return buildTooltip(props, {
              title: newTitle,
              mode,
              hasTextLabel: true,
              wrapperExtClasses: 'min-w-28',
              labelDivider: ':',
              labelExtClasses: 'ms-2'
            })
          }
        },
        responsive: [
          {
            breakpoint: 568,
            options: {
              chart: {
                height: 300
              },
              plotOptions: {
                bar: {
                  columnWidth: '14px'
                }
              },
              stroke: {
                width: 12
              },
              labels: {
                style: {
                  colors: '#9ca3af',
                  fontSize: '11px',
                  fontFamily: 'Inter, ui-sans-serif',
                  fontWeight: 400
                },
                offsetX: -2,
                formatter: title => title.slice(0, 3)
              },
              yaxis: {
                labels: {
                  align: 'left',
                  minWidth: 0,
                  maxWidth: 140,
                  style: {
                    colors: '#9ca3af',
                    fontSize: '11px',
                    fontFamily: 'Inter, ui-sans-serif',
                    fontWeight: 400
                  },
                  formatter: value =>
                    value >= 1000 ? `${value / 1000}k` : value
                }
              }
            }
          }
        ]
      }),
      {
        colors: ['#2563eb', '#d1d5db'],
        xaxis: {
          labels: {
            style: {
              colors: '#9ca3af'
            }
          }
        },
        yaxis: {
          labels: {
            style: {
              colors: '#9ca3af'
            }
          }
        },
        grid: {
          borderColor: '#e5e7eb'
        }
      },
      {
        colors: ['#2563eb', '#d1d5db'],
        xaxis: {
          labels: {
            style: {
              colors: '#a3a3a3'
            }
          }
        },
        yaxis: {
          labels: {
            style: {
              colors: '#a3a3a3'
            }
          }
        },
        grid: {
          borderColor: '#e5e7eb'
        }
      }
    )
  })()
})
