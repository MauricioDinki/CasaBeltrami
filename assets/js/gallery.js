$(document).ready(function() {
  $('#facade-1').on('click', function(){ 
    console.log("si");
    $.ajax({
      cache: false,
      type: 'POST',
      url: 'api.php',
      data: 'id=1&decoration=1',
      success: function(data) {
        var res = jQuery.parseJSON(data);
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
        //this part to pass the var
      }
    });     
  });
  $('#event-gallery-1').on('click', function(){   
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'party_room=1&decoration=2',
        success: function(data) {
        var res = jQuery.parseJSON(data);
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
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
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
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
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
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
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
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
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
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
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
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
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
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
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
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
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
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
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
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
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
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
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
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
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
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
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
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
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
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
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
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
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
        //this part to pass the var
      }
    });      
  });
  $('#event-1').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'event=1',
        success: function(data) {
        var res = jQuery.parseJSON(data);
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
        //this part to pass the var
      }
    });      
  });
  $('#event-2').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'event=2',
        success: function(data) {
        var res = jQuery.parseJSON(data);
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
        //this part to pass the var
      }
    });      
  });
  $('#event-3').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'event=3',
        success: function(data) {
        var res = jQuery.parseJSON(data);
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
        //this part to pass the var
      }
    });      
  });
  $('#event-4').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'event=4',
        success: function(data) {
        var res = jQuery.parseJSON(data);
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
        //this part to pass the var
      }
    });      
  });
  $('#event-5').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'event=5',
        success: function(data) {
        var res = jQuery.parseJSON(data);
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
        //this part to pass the var
      }
    });      
  });
  $('#event-6').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'event=6',
        success: function(data) {
        var res = jQuery.parseJSON(data);
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
        //this part to pass the var
      }
    });      
  });
  $('#event-7').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'event=7',
        success: function(data) {
        var res = jQuery.parseJSON(data);
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
        //this part to pass the var
      }
    });      
  });
  $('#event-8').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'event=8',
        success: function(data) {
        var res = jQuery.parseJSON(data);
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
        //this part to pass the var
      }
    });      
  });
  $('#event-9').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'event=9',
        success: function(data) {
        var res = jQuery.parseJSON(data);
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
        //this part to pass the var
      }
    });      
  });
  $('#event-10').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'event=10',
        success: function(data) {
        var res = jQuery.parseJSON(data);
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
        //this part to pass the var
      }
    });      
  });
  $('#event-11').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'event=11',
        success: function(data) {
        var res = jQuery.parseJSON(data);
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
        //this part to pass the var
      }
    });      
  });
    $('#service-1').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'service=1',
        success: function(data) {
        var res = jQuery.parseJSON(data);
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
        //this part to pass the var
      }
    });      
  });
    $('#service-2').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'service=2',
        success: function(data) {
        var res = jQuery.parseJSON(data);
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
        //this part to pass the var
      }
    });      
  });
    $('#service-3').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'service=3',
        success: function(data) {
        var res = jQuery.parseJSON(data);
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
        //this part to pass the var
      }
    });      
  });
    $('#service-4').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'service=4',
        success: function(data) {
        var res = jQuery.parseJSON(data);
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
        //this part to pass the var
      }
    });      
  });
    $('#service-5').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'service=5',
        success: function(data) {
        var res = jQuery.parseJSON(data);
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
        //this part to pass the var
      }
    });      
  });
    $('#service-6').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'service=6',
        success: function(data) {
        var res = jQuery.parseJSON(data);
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
        //this part to pass the var
      }
    });      
  });
    $('#service-7').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'service=7',
        success: function(data) {
        var res = jQuery.parseJSON(data);
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
        //this part to pass the var
      }
    });      
  });
    $('#service-8').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'service=8',
        success: function(data) {
        var res = jQuery.parseJSON(data);
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
        //this part to pass the var
      }
    });      
  });
    $('#service-9').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'service=9',
        success: function(data) {
        var res = jQuery.parseJSON(data);
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
        //this part to pass the var
      }
    });      
  });
    $('#service-10').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'service=10',
        success: function(data) {
        var res = jQuery.parseJSON(data);
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
        //this part to pass the var
      }
    });      
  });
    $('#service-11').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        data: 'service=11',
        success: function(data) {
        var res = jQuery.parseJSON(data);
        console.log(data)
        var images = data.content;
        console.log('this' + images);
        for(var i=0;i<images.length;i++){
          if(i>1){
            var item = "<div class='item active'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
        //this part to pass the var
      }
    });      
  });

});