$(document).ready(function () {
  // Attach click event listeners to navigation links
  $('#dashboard-link').click(function (e) {
    e.preventDefault();
    loadPage('dashboard');
  });

  $('#profile-link').click(function (e) {
    e.preventDefault();
    loadPage('profile');
  });

  $('#payments-link').click(function (e) {
    e.preventDefault();
    loadPage('payments');
  });

  $('#settings-link').click(function (e) {
    e.preventDefault();
    loadPage('settings');
  });

  // Load dashboard page by default
  // loadPage('dashboard');
});

function loadPage(page) {
  
  $("#content").empty();
  loadCSS('./css/boots.css');
  loadCSS('./css/omain.css');

  // Set active class on the clicked link
  $('.app-sidebar-link').removeClass('active');
  $('#' + page + '-link').addClass('active');

  // Load page content using AJAX
  $.ajax({
    url: page + '.php',
    type: 'GET',
    success: function (response) {
      $("#content").html(response);
      loadJS('./js/omain.js');
      loadJS('./js/jquery-3.6.0.min.js');
    },
    error: function (xhr, status, error) {
      console.log(error);
      // Handle error
    }
  });

  // Update the header
  $("#header").empty();
  var headerText = getPageHeaderText(page);
  $("#header").html("<p>" + headerText + "</p>");

  // Remove the query parameter from the URL
  history.replaceState({}, document.title, "./");
}

function getPageHeaderText(page) {
  switch (page) {
    case 'dashboard':
      const formattedDate = new Intl.DateTimeFormat('en-US', { month: 'long', day: 'numeric' }).format(new Date());
      return `Overview <span class='time'><b>A.Y. 2022-2023 | 2ND Semester | ${formattedDate}</b></span>`;
    case 'profile':
      return "Student Profile";
    case 'payments':
      return "Organizations and Payments";
    case 'settings':
      return "Settings";
    default:
      return "";
  }
}

function loadCSS(url) {
  var link = document.createElement('link');
  link.rel = 'stylesheet';
  link.href = url;
  document.head.appendChild(link);
}

function loadJS(url) {
  var script = document.createElement('script');
  script.src = url;
  document.head.appendChild(script);
}
