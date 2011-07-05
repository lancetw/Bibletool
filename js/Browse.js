// Get a chapter from the server and update the 'browse-body' div
var Browse = {
  browse: function (url) {
    $('#browse-body').empty();
    var jqxhr = $.getJSON(url, Navigation.getCurrentStyleFn(url))
      .error(function(){
        $('<p>Failed to download data from the server</p>').appendTo('#browse-body');
      });
  }
};

// Main function
$(document).ready(function() {
  Navigation.currentStyle = 'table';
  Navigation.onChangeFn = Browse.browse;
  Navigation.init();
  Navigation.onChangeFn(jsonURL);
});
