$(document).ready(function () {

  // Attach click event listeners to navigation links
  $('#dashboard-link').click(function(e) {
    e.preventDefault(); // Prevent default link behavior
    // loadCSS('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css');
    loadCSS('./css/boots.css');
    loadCSS('./css/omain.css');
    loadDashboardPage();
    // loadJS('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
    // loadJS('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
    $('.app-sidebar-link').removeClass('active'); // Remove "active" class from all links
    $(this).addClass('active'); // Add "active" class to the clicked link
  });

  loadDashboardPage();
  $('#dashboard-link').addClass('active'); // Add "active" class to the clicked link

  $('#profile-link').click(function(e) {
    e.preventDefault(); // Prevent default link behavior
    // loadCSS('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css');
    // loadCSS('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap');
    loadCSS('./css/boots.css');
    loadCSS('./css/omain.css');
    loadProfilePage();
    $('.app-sidebar-link').removeClass('active'); // Remove "active" class from all links
    $(this).addClass('active'); // Add "active" class to the clicked link
  });

  $('#pay-link').click(function(e) {
    e.preventDefault(); // Prevent default link behavior
    // loadCSS('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    // loadCSS('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">');
    loadCSS('./css/boots.css');
    loadCSS('./css/omain.css');
    loadPayPage();
    $('.app-sidebar-link').removeClass('active'); // Remove "active" class from all links
    $(this).addClass('active'); // Add "active" class to the clicked link
  });

  $('#settings-link').click(function(e) {
    e.preventDefault(); // Prevent default link behavior.
    loadCSS('./css/boots.css');
    loadCSS('./css/omain.css');
    loadSettingsPage();
    $('.app-sidebar-link').removeClass('active'); // Remove "active" class from all links
    $(this).addClass('active'); // Add "active" class to the clicked link
  });
  
});

function loadDashboardPage() {
  // Load content for dashboard page
  $("#content").empty();
  loadJS('./js/omain.js');
  $("#content").load("./mini-dashboard.html");
  $("#header").empty();
  
  const formattedDate = new Intl.DateTimeFormat('en-US', { month: 'long', day: 'numeric' }).format(new Date());
  
  $("#header").html(`<p>Overview</p><p class="time">A.Y. 2022-2023 | 2ND Semester | ${formattedDate}</p>`);
}

function loadProfilePage() {
  // Load content for profile page
  $("#content").empty();
  loadJS('./js/omain.js');
  $("#content").load("./profile.php");
  // $("#content").load("./mini-profile.html");
  $("#header").empty();
  $("#header").html("<p>Student Profile</p>");
}

function loadPayPage() {
  // Load content for pay page
  $("#content").empty();
  loadJS('./js/omain.js');
  $("#content").load("./mini-payment.html");
  // $("#content").load("./mini-payment.html");
  $("#header").empty();
  $("#header").html("<p>Organizations and Payments</p>");
}

function loadSettingsPage() {
  // Load content for settings page
  $("#content").empty();
  loadJS('./js/omain.js');
  $("#content").load("./settings.php");
  // $("#content").load("./mini-settings.html");
  $("#header").empty();
  $("#header").html("<p>Settings</p>");
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
  // document.body.appendChild(script);
}