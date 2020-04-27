$(document).ready(function () {  
  var _token = $('meta[name="csrf-token"]').attr('content');
  $('#searchHeader').on('keyup', function () {
    var value = $(this).val();
    var input = $(this)
    $.ajax({
      url: '/search/' + value,
      method: 'get',
      headers: {
        'X-CSRF-TOKEN': _token
      },
      success: function (data) {        
        generateSearchList(data)
      },
      error: function (error) {
        console.log(error)
      }
    })
  })


  $('#searchHeaderForm').on('submit', function () {    
    var value = $('#searchHeader').val();
    var datalist = $('#searchHeader').attr('list');
    var value_id = $('#' + datalist + ' option[value="' + value + '"]').data('value');
    $(this).attr('action', '/investors-news/'+value_id)    
  });

  function generateSearchList(data) {
    var content = $('#datalist1');
    content.empty()
    if (data.length > 0) {
      for (var i = 0; i < data.length; i++) {
        content.append(`
                    <option data-value="${data[i].id}" value="${data[i].name}"></option>
                `)
      }
    }
    else {
      content.append(`
                <option data-value="" value="ничего не найдено"></option>
            `)
    }
  }
})