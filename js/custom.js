// Start of something good!

$(document).ready(function(){

  // JSON
  var url = 'xml/subscriptions.js';
  // get the json file
  $.getJSON(url,function(json){
    $.each(json.subscriptions,function(i,feed){
     $("#feed_list ul").append('<li><a href="'+ feed.id +'">' + feed.title + '</a></li>');
    });
  });
  
  $("#feed_list a").click(function(event) {
    event.preventDefault();
    $(this).addClass("myClass");
    var url = $(this).attr('href');
    var name = $(this).text();
    $("#feed h2").html(name);
  });
  
	$.ajax({
		type: "GET",
    // url: "xml/subscriptions.xml",
		dataType: "xml",
		success: function(xml) {
		  var test = $(xml).find('list[name=subscriptions]')[0];
		  
		  console.log("test", test);
		  
			$(test).find('object').each(function(){
        
			  $(this).find('string').each(function(){
          // $(this).find('string').attr('name','id').each(function(){
            var url = $(this).attr('name','id').text();
            // alert(url);
            // var url = $(this).find('url').text();
				    $('#feeds').append('<p><a href="'+url+'">'+url+'</a></p>');
            // $(this).find('desc').each(function(){
            //  var brief = $(this).find('brief').text();
            //  var long = $(this).find('long').text();
            //  $('<div class="brief"></div>').html(brief).appendTo('#link_'+id);
            //  $('<div class="long"></div>').html(long).appendTo('#link_'+id);
          // });
        });
			});
		}
	});
});

