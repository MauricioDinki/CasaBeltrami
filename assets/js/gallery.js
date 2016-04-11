$(document).ready(function() {
  $('#facade-1').on('click', function(){ 
    console.log("si");
    $.ajax({
      cache: false,
      type: 'GET',
      url: 'api.php',
      data: 'id=1&decoration=1',
      success: function(data) {
        var res = jQuery.parseJSON(data);
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for each (var value in images){
          var item = "<img src='" + images[value].path + "' alt='Second slide' class='img-responsive modal-image'>";
          $('.item.active').append(item);
        }
        //this part to pass the var
      }
    });     
  });
});
  /*$('#event-gallery-1').on('click', function(){   
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'party_room=1&decoration=2',
        success: function(data) {
            var res = jQuery.parseJSON(data);
            var images = data.content;
            for each (value in images){
              $('.item.active').append("<img src='"+value.path+"' alt='Second slide' class='img-responsive modal-image'>");
            }
            //this part to pass the var
        }
    });    
  });
  $('#in-1').on('click', function(){
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'party_room=1&decoration=3',
        success: function(data) {
            var res = jQuery.parseJSON(data);
            for each (value of res.content){
              $('.item.active').append("<img src='"+value.path+"' alt='Second slide' class='img-responsive modal-image'>");
            }
            //this part to pass the var
        }
    });       
  });
  $('#out-1').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'party_room=1&decoration=4',
        success: function(data) {
            var res = jQuery.parseJSON(data);
            for each (value of res.content){
              $('.item.active').append("<img src='"+value.path+"' alt='Second slide' class='img-responsive modal-image'>");
            }
            //this part to pass the var
        }
    });      
  });
  $('#room-1').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'party_room=1&decoration=5',
        success: function(data) {
            var res = jQuery.parseJSON(data);
            for each (value of res.content){
              $('.item.active').append("<img src='"+value.path+"' alt='Second slide' class='img-responsive modal-image'>");
            }
            //this part to pass the var
        }
    });      
  });
  $('#bath-1').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'party_room=1&decoration=6',
        success: function(data) {
            var res = jQuery.parseJSON(data);
            for each (value of res.content){
              $('.item.active').append("<img src='"+value.path+"' alt='Second slide' class='img-responsive modal-image'>");
            }
            //this part to pass the var
        }
    });      
  });
  $('#kitchen-1').on('click', function(){
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'party_room=1&decoration=7',
        success: function(data) {
            var res = jQuery.parseJSON(data);
            for each (value of res.content){
              $('.item.active').append("<img src='"+value.path+"' alt='Second slide' class='img-responsive modal-image'>");
            }
            //this part to pass the var
        }
    });       
  });
  $('#all-1').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'party_room=1&decoration=8',
        success: function(data) {
            var res = jQuery.parseJSON(data);
            for each (value of res.content){
              $('.item.active').append("<img src='"+value.path+"' alt='Second slide' class='img-responsive modal-image'>");
            }
            //this part to pass the var
        }
    });      
  });
  $('#facade-2').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'party_room=2&decoration=9',
        success: function(data) {
            var res = jQuery.parseJSON(data);
            for each (value of res.content){
              $('.item.active').append("<img src='"+value.path+"' alt='Second slide' class='img-responsive modal-image'>");
            }
            //this part to pass the var
        }
    });      
  });
  $('#event-gallery-2').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'party_room=2&decoration=10',
        success: function(data) {
            var res = jQuery.parseJSON(data);
            for each (value of res.content){
              $('.item.active').append("<img src='"+value.path+"' alt='Second slide' class='img-responsive modal-image'>");
            }
            //this part to pass the var
        }
    });      
  });
  $('#in-2').on('click', function(){
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'party_room=2&decoration=11',
        success: function(data) {
            var res = jQuery.parseJSON(data);
            for each (value of res.content){
              $('.item.active').append("<img src='"+value.path+"' alt='Second slide' class='img-responsive modal-image'>");
            }
            //this part to pass the var
        }
    });       
  });
  $('#out-2').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'party_room=2&decoration=12',
        success: function(data) {
            var res = jQuery.parseJSON(data);
            for each (value of res.content){
              $('.item.active').append("<img src='"+value.path+"' alt='Second slide' class='img-responsive modal-image'>");
            }
            //this part to pass the var
        }
    });      
  });
  $('#room-2').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'party_room=2&decoration=13',
        success: function(data) {
            var res = jQuery.parseJSON(data);
            for each (value of res.content){
              $('.item.active').append("<img src='"+value.path+"' alt='Second slide' class='img-responsive modal-image'>");
            }
            //this part to pass the var
        }
    });      
  });
  $('#facade-3').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'party_room=3&decoration=14',
        success: function(data) {
            var res = jQuery.parseJSON(data);
            for each (value of res.content){
              $('.item.active').append("<img src='"+value.path+"' alt='Second slide' class='img-responsive modal-image'>");
            }
            //this part to pass the var
        }
    });      
  });
  $('#all-gallery-3').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'party_room=3&decoration=15',
        success: function(data) {
            var res = jQuery.parseJSON(data);
            for each (value of res.content){
              $('.item.active').append("<img src='"+value.path+"' alt='Second slide' class='img-responsive modal-image'>");
            }
            //this part to pass the var
        }
    });      
  });
  $('#in-3').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'party_room=3&decoration=16',
        success: function(data) {
            var res = jQuery.parseJSON(data);
            for each (value of res.content){
              $('.item.active').append("<img src='"+value.path+"' alt='Second slide' class='img-responsive modal-image'>");
            }
            //this part to pass the var
        }
    });      
  });
  $('#out-3').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'party_room=3&decoration=17',
        success: function(data) {
            var res = jQuery.parseJSON(data);
            for each (value of res.content){
              $('.item.active').append("<img src='"+value.path+"' alt='Second slide' class='img-responsive modal-image'>");
            }
            //this part to pass the var
        }
    });      
  });
  $('#room-3').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'party_room=3&decoration=18',
        success: function(data) {
            var res = jQuery.parseJSON(data);
            for each (value of res.content){
              $('.item.active').append("<img src='"+value.path+"' alt='Second slide' class='img-responsive modal-image'>");
            }
            //this part to pass the var
        }
    });      
  });
});*/