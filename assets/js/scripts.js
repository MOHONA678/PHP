$(document).ready(function() {
  var isMobile = false;
  var sidebar = $('#sidebar');
  var content = $('#content');
  var toggleSidebarButton = $('#toggleSidebar');

  // Function to detect device type and screen width
  function detectDevice() {
    var screenWidth = $(window).width();

    if (screenWidth < 992) {
      isMobile = true;
      sidebar.addClass('collapsed');
      content.addClass('expanded');
    } else if (screenWidth > 768) {
      isMobile = true;
      sidebar.removeClass('collapsed');
      content.removeClass('expanded');
    } 
    else {
      isMobile = false;
      sidebar.removeClass('collapsed');
      content.removeClass('expanded');
    }
  }

  // Toggle sidebar collapsible on button click
  toggleSidebarButton.click(function() {
    if (isMobile) {
      sidebar.toggleClass('collapsed');
      content.toggleClass('expanded');
    }
  });

  // Detect device type on document ready
  detectDevice();

  // Detect device type on window resize
  $(window).resize(function() {
    detectDevice();
  });
});