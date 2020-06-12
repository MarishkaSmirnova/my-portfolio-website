
  $("#left-side").scroll(function () {
    var s = $("#left-side").scrollTop(),
          d = $(document).height(),
          c = $("#left-side").height();
          scrollPercent = (s / (d-c)) * 100;
          var position = scrollPercent;
  
     $("#progressbar").attr('value', position);
  });