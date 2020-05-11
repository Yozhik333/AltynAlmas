$(document).ready(function () {  
  var _token = $('meta[name="csrf-token"]').attr('content');
  
  $.ajax({
    url: '/search',
    method: 'get',
    headers: {
      'X-CSRF-TOKEN': _token
    },
    success: function (data) {        
      var content = $('#datalist1');
      content.empty()
      if (data.length > 0) {
        content.append(data)
      }       
    },
    error: function (error) {
      console.log(error)
    }
  })


  $('#searchHeaderForm').on('submit', function () {    
    var value = $('#searchHeader').val();
    var datalist = $('#searchHeader').attr('list');
    var value_id = $('#' + datalist + ' option[value="' + value + '"]').data('value');
    $(this).attr('action', value_id)    
  });  
})