

$('.to-cart').on('click', function () {

  $.ajax({
    url: BASE_URL + 'shop/add-to-cart',
    type: 'GET',
    datatype: 'html',
    data: {pid: $(this).data('id')},
    success: function (res) {
      location.reload();
    }
  });
});

$('.update-qty').on('click', function () {

  $.ajax({
    url: BASE_URL + 'shop/update-cart',
    type: 'GET',
    datatype: 'html',
    data: {pid: $(this).data('id'), op: $(this).data('op')},
    success: function (res) {
      location.reload();
    }
  });

});

$('.origin-text').on('keyup', function () {
  $('.target-text').val($(this).val().permalink());
});

$('#article').summernote({
  height: 300
});

String.prototype.permalink = function () {
  return this.trim().toLowerCase().replace(/\s/g, '-');
};

$('#sm-box').delay(3000).slideUp();
$( "#search" ).autocomplete({
    source: function (request, response) {
        $.get(BASE_URL +'shop/search', {
            search: request.term,
            auto: 1,
        }, function (data) {
          var simplyArray = $.map( data, function(item) {
              return {
                label: item.ptitle,
                purl: item.purl,
                curl: item.curl
              }
         
          });
          response(simplyArray);
        });
    },
    select:function (a,item){
      var curl = item.item.curl;
      var purl = item.item.purl;
     
      location.href = BASE_URL+"shop"+"/"+curl+"/"+purl;
      
    }
            
       
});
/*$('#search').on('keyup', function () {

  var availableTags = [];
  var search = $(this).val().trim();

  if (search.length > 0) {

    //var _token = $('input[name = "_token"]').val();

  }

    });*/
 
