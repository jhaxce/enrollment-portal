// document.addEventListener('DOMContentLoaded', function () {
//   var modeSwitch = document.querySelector('.mode-switch');

//   var appMenu = document.querySelector('.app-menu');
//   var appSidebar = document.querySelector('.app-sidebar');
//   var appContent = document.querySelector('.app-content');

//   modeSwitch.addEventListener('click', function () {
//     document.documentElement.classList.toggle('dark');
//     modeSwitch.classList.toggle('active');
//   });

//   appMenu.addEventListener('click', function () {
//     appSidebar.classList.toggle('hidden');
//     appContent.classList.toggle('expanded');
//   });

//   var now = new Date();
//   var hours = now.getHours();

//   if (hours >= 18 || hours < 6) {

//   var clickEvent = new Event('click');
//   modeSwitch.dispatchEvent(clickEvent);

// }
// });

document.addEventListener('DOMContentLoaded', function () {
  var modeSwitch = document.querySelector('.mode-switch');
  var appMenu = document.querySelector('.app-menu');
  var appSidebar = document.querySelector('.app-sidebar');
  var appContent = document.querySelector('.app-content');

  modeSwitch.addEventListener('click', function () {
    var isDarkMode = document.documentElement.classList.toggle('dark');
    modeSwitch.classList.toggle('active');

    // Store the mode preference in a cookie that expires in 30 days
    var expirationDate = new Date();
    expirationDate.setDate(expirationDate.getDate() + 30);
    document.cookie = 'mode=' + (isDarkMode ? 'dark' : 'light') + '; expires=' + expirationDate.toUTCString() + '; path=/';
  });

  appMenu.addEventListener('click', function () {
    appSidebar.classList.toggle('hidden');
    appContent.classList.toggle('expanded');
  });

  // Check if the 'mode' cookie exists and set the mode accordingly
  var modeCookie = document.cookie.replace(/(?:(?:^|.*;\s*)mode\s*=\s*([^;]*).*$)|^.*$/, '$1');
  if (modeCookie === 'dark') {
    document.documentElement.classList.add('dark');
    modeSwitch.classList.add('active');
  }

  // var now = new Date();
  // var hours = now.getHours();

  // if (hours >= 18 || hours < 6) {
  //   var clickEvent = new Event('click');
  //   modeSwitch.dispatchEvent(clickEvent);
  // }
});
