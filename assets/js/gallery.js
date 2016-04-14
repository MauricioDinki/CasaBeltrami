$(document).ready(function() {
  $('#facade-1').on('click', function(){ 
    console.log("si");
    $.ajax({
      cache: false,
      type: 'GET',
      url: 'api.php',
      dataType: "json",
      data: 'id=1&decoration=1',
      success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item.gallery" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item gallery active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item gallery'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner.gallery').append(item);
        }
      }
    });     
  });
  $('#event-gallery-1').on('click', function(){   
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'party_room=1&decoration=2',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });     
  });
  $('#in-1').on('click', function(){
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'party_room=1&decoration=3',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });     
  });
  $('#out-1').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'party_room=1&decoration=4',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });     
  });
  $('#room-1').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'party_room=1&decoration=5',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });     
  });
  $('#bath-1').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'party_room=1&decoration=6',
        success: function(data) {
        var res = data;
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
        dataType: "json",
        data: 'party_room=1&decoration=7',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });     
  });
  $('#all-1').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'party_room=1&decoration=8',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });     
  });
  $('#facade-2').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'party_room=2&decoration=9',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });     
  });
  $('#event-gallery-2').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'party_room=2&decoration=10',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });     
  });
  $('#in-2').on('click', function(){
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'party_room=2&decoration=11',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });     
  });
  $('#out-2').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'party_room=2&decoration=12',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });     
  });
  $('#room-2').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'party_room=2&decoration=13',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });     
  });
  $('#facade-3').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'party_room=3&decoration=14',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });     
  });
  $('#all-gallery-3').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
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
        dataType: "json",
        data: 'party_room=3&decoration=16',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });          
  });
  $('#out-3').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'party_room=3&decoration=17',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });          
  });
  $('#room-3').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'party_room=3&decoration=18',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });     
  });
  $('#event-1').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'event=1',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });           
  });
  $('#event-2').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'event=2',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });           
  });
  $('#event-3').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'event=3',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });          
  });
  $('#event-4').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'event=4',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });          
  });
  $('#event-5').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'event=5',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });           
  });
  $('#event-6').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'event=6',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });           
  });
  $('#event-7').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'event=7',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });           
  });
  $('#event-8').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'event=8',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });           
  });
  $('#event-9').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'event=9',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });          
  });
  $('#event-10').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'event=10',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });          
  });
  $('#event-11').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'event=11',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });           
  });
    $('#service-1').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'service=1',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });          
  });
    $('#service-2').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'service=2',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });           
  });
    $('#service-3').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'service=3',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });           
  });
    $('#service-4').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'service=4',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });           
  });
    $('#service-5').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'service=5',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });          
  });
    $('#service-6').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'service=6',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });           
  });
    $('#service-7').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'service=7',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });           
  });
    $('#service-8').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'service=8',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });           
  });
    $('#service-9').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'service=9',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });          
  });
    $('#service-10').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'service=10',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });           
  });
    $('#service-11').on('click', function(){ 
        $.ajax({
        cache: false,
        type: 'GET',
        url: 'api.php',
        dataType: "json",
        data: 'service=11',
        success: function(data) {
        var res = data;
        var images = data.images;
        $( "div" ).remove( ".item" );
        for(var i=0;i<res.images.length;i++){
          if(i==0){
            var item = "<div class='item active'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          else{
            var item = "<div class='item'><img src='" + res.images[i].path + "' alt='Second slide' class='img-responsive modal-image'></div>";
          }
          $('.carousel-inner').append(item);
        }
      }
    });          
  });

});