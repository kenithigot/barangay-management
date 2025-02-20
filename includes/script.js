// ###### Sidebar Links Active ######
const links = document.querySelectorAll('.nav-link')
links.forEach(link => {
  if (link.href === window.location.href) {
    link.classList.add('bg-slate-600', 'text-slate-200')
  }
})
// ###### End Line Sidebar Links Active ######

// ###### Header Time, Date Display ######
function updateDateTime () {
  const dateTimeElement = document.getElementById('date-time')

  const now = new Date()

  // Format the date and time
  const date = now.toLocaleDateString('en-US', {
    weekday: 'long', // Day of the week
    year: 'numeric',
    month: 'long', // Full month name
    day: 'numeric'
  })
  const time = now.toLocaleTimeString('en-US', {
    hour: '2-digit',
    minute: '2-digit',
    second: '2-digit'
  })

  // Display date and time in the desired format
  dateTimeElement.textContent = `${time} | ${date}`
}

// Update the date and time every second
setInterval(updateDateTime, 1000)

// Initial call to display the time immediately
updateDateTime()

// ###### End Line Header Time, Date Display ######

//Sign out Account
$(document).on('click', '#btn-logout', function (e) {
  e.preventDefault()
  Swal.fire({
    title: 'Logout',
    text: 'Are you sure you want to logout?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, logout!'
  }).then(result => {
    if (result.isConfirmed) {
      window.location.href = '../../account login/logout.php'
    }
  })
})
