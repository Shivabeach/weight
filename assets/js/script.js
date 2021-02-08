/** @format */
'use strict';
//let dates1 = document.getElementById('dater');
var space = document.getElementById('space');
$(function() {
  $('form#weight').on('submit', function(e) {
    e.preventDefault();
    var that = $(this),
      url = that.attr('action'),
      type = that.attr('method'),
      data = {};
    that.find('[name]').each(function(index, value) {
      var that = $(this),
        name = that.attr('name'),
        value = that.val();
      data[name] = value;
    });
    $.ajax({
      url: url,
      type: type,
      data: data,
      success: function(response) {
        $('#display')
          .html(response)
          .delay(6000)
          .fadeOut(1000);
      },
    });
    return false;
  });
});
//response requires a class

$(function() {
  $('form.cars').on('submit', function(e) {
    e.preventDefault();
    var that = $(this),
      url = that.attr('action'),
      type = that.attr('method'),
      data = {};
    that.find('[name]').each(function(index, value) {
      var that = $(this),
        name = that.attr('name'),
        value = that.val();
      data[name] = value;
    });
    $.ajax({
      url: url,
      type: type,
      data: data,
      success: function(response) {
        $('.display')
          .html(response)
          .delay(10000)
          .fadeOut(1000);
      },
    });
    return false;
  });
});

$(function() {
  $('.highlight')
    .parent()
    .css({ 'background-color': '#CA915B' });
});

//  opens new window for external links
$(function() {
  $('A[rel="external"]').click(function() {
    window.open($(this).attr('href'));
    return false;
  });
});
//jquery datepicker
$(function() {
  $('#date').datepicker({
    dateFormat: 'yy-mm-dd',
  });
});

$(function() {
  $('#date1').datepicker({
    dateFormat: 'yy-mm-dd',
  });
});
$(function() {
  $('#date2').datepicker({
    dateFormat: 'yy-mm-dd',
  });
});

//@prepros-append trial.js
