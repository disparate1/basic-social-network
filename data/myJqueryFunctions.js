//send form data when clicked on 'send''
$(document).ready(function() {
$(".request-button").click(function(event){
    var that=$(this);


$.post("/social-network/data/send-request-processing.php",{"user_id":$(this).attr("userId"),"sender_id":$("#id").val()},function(){
      // trigger notification
           that.fadeOut();
          that.replaceWith("<p class=\"pull-right text-green\">Request sent</p>");

    });
});

//request2 ////////////////////////////////////////
$(".request-button2").click(function(event){
    var that=$(this);


$.post("/social-network/data/send-request-processing.php",{"user_id":$(this).attr("userId"),"sender_id":$("#id").val()},function(){
      // trigger notification
           that.fadeOut();
          that.replaceWith("<h5>Request sent</h5>");

    });
});
////////////////////////////////////////////////
//accept2 ///////////////////////////////////////
$(".accept-button2").click(function(event){
  var that=$(this);

$.post("/social-network/data/accept-request-processing.php",{"user_id":$(this).attr("userId"),"sender_id":$("#id").val(),"request_id":$(this).attr("requestId")},function(){
    
          var pic=$(".profile-photo").eq(0).attr("src");
          var str=$("h3").text();      
      
      that.parents().eq(0).addClass('animated zoomOut');
      that.parents().eq(0).next().addClass('animated zoomOut');

      setTimeout(function(){
     that.parents().eq(0).remove();
     that.parents().eq(0).next().children().eq(0).remove();

},1000);

        // trigger notification
          $.notify({
	icon: pic,
	title: str,
	message: 'You and him/her are friends now!'
},{
	type: 'minimalist',
	delay: 5000,
    placement: {
		from: "top",
		align: "left"
	},
	icon_type: 'image',
	template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
		'<img data-notify="icon" class="img-circle pull-left">' +
		'<span data-notify="title">{1}</span>' +
		'<span data-notify="message">{2}</span>' +
	'</div>'
});        

    });
});
/////////////////////////////////////////////////
//refuse2
$(".refuse-button2").click(function(event){
var that=$(this);//cant use 'this' inside a function
$.post("/social-network/data/refuse-request-processing.php",{"request_id":$(this).attr("requestId"),"sender_id":$("#id").val()},function(){
      // trigger notification
      that.parents().eq(0).addClass('animated zoomOut');
      that.parents().eq(0).prev().addClass('animated zoomOut');
      setTimeout(function(){
     that.parents().eq(0).remove();
     that.parents().eq(0).prev().children().eq(0).remove();
},1000);
      //alert("success");
    })
    .done(function() {
    //alert( "second success" );
})
.fail(function() {
    alert( "error" );
})
.always(function() {
    //alert( "finished" );
          //$(this).parents().eq(1).fadeOut();

 });
});

////////////////////////////////////////////////////////
$(".accept-button").click(function(event){
  var that=$(this);

$.post("/social-network/data/accept-request-processing.php",{"user_id":$(this).attr("userId"),"sender_id":$("#id").val(),"request_id":$(this).attr("requestId")},function(){
    
          var pic=that.parents().eq(1).children().eq(0).attr("src");
          var str=that.prev().children().eq(0).text();      
      
      that.parents().eq(1).addClass('animated zoomOut');
      setTimeout(function(){
     that.parents().eq(1).remove();
},1000);
        // trigger notification
          $.notify({
	icon: pic,
	title: str,
	message: 'You and him/her are friends now!'
},{
	type: 'minimalist',
	delay: 5000,
    placement: {
		from: "top",
		align: "left"
	},
	icon_type: 'image',
	template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
		'<img data-notify="icon" class="img-circle pull-left">' +
		'<span data-notify="title">{1}</span>' +
		'<span data-notify="message">{2}</span>' +
	'</div>'
});        

    });
});

$(".refuse-button").click(function(event){
var that=$(this);//cant use 'this' inside a function
$.post("/social-network/data/refuse-request-processing.php",{"request_id":$(this).attr("requestId"),"sender_id":$("#id").val()},function(){
      // trigger notification
      that.parents().eq(1).addClass('animated zoomOut');
      setTimeout(function(){
     that.parents().eq(1).remove();
},1000);
      //alert("success");
    })
    .done(function() {
    //alert( "second success" );
})
.fail(function() {
    alert( "error" );
})
.always(function() {
    //alert( "finished" );
          //$(this).parents().eq(1).fadeOut();

 });
});

//unfriending someone
$(".unfriend-button").click(function(event){
    var that=$(this);

 // $(".request-button").click(function(event){

$.post("/social-network/data/unfriend-processing.php",{"user_id":$(this).attr("userId"),"sender_id":$("#id").val()},function(){
      
          var pic=that.parents().eq(1).children().eq(0).attr("src");
          var str=that.next().children().eq(0).text();      
          that.parents().eq(3).addClass('animated flipOutY');
      setTimeout(function(){
      that.parents().eq(3).remove();
},2000);


          //trigger notification
          $.notify({
	icon: pic,
	title: str,
	message: 'You unfriended him/her successfully!'
},{
	type: 'minimalist',
	delay: 5000,
    placement: {
		from: "top",
		align: "left"
	},
	icon_type: 'image',
	template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
		'<img data-notify="icon" class="img-circle pull-left">' +
		'<span data-notify="title">{1}</span>' +
		'<span data-notify="message">{2}</span>' +
	'</div>'
});

    });
});

//autocomplete search
$("#search").autocomplete({
    minLength: 1,
    open: function () { 
        $('ul.ui-autocomplete').addClass('animated fadeInDown');
        $('ul.ui-autocomplete').one('webkitAnimationEnd oanimationend msAnimationEnd animationend',
        function (e) {
            $('ul.ui-autocomplete').removeClass('animated fadeInDown');
        });
    },
    position: {
        my: "left+0 top+8", // Shift 0px left, 4px down.
    },
    source: function (request, response){
        $.ajax({
            url:'/social-network/data/search-processing.php',
            method: 'post',
            data: {input: $("#search").val()},
            dataType: 'json',
            success: function(data){
                response(data);
            }
        });
    }
})
.autocomplete('instance')._renderItem = function(ul, item){
    return $('<li class="clearfix" style="border-top: 1px solid #ccc;width:100%; margin-bottom: 5px;padding-top: 5px;">')
        .append('<img class="profile-photo-md pull-left" src="/social-network/pictures/' + item.user_image +'"/>')
        .append('<a class="profile-link" href="/social-network/timeline.php?id=' + item.user_id +'">'+ item.user_name + '</a>')
        .append('<p>'+ item.user_email + '</p>')
        .appendTo(ul);
}

//send a message
$("#send-message").click(function(event){
 $.post("./data/send-message-processing.php",{
 "sender":$(this).attr("senderid"),
 "reciver":$(this).attr("reciverid"),
 "title":$("#msg-title").val(),
 "message":$("#msg-message").val()
}
 ,function(){
      // trigger notification
        $.notify({
	title: '<strong>Notification</strong>',
	message: 'Your message has been sent succsessfully!.'
    },{
	type: 'success'
}); 
      //alert("success");
    })
    .done(function() {
                      //close modal
     $('#myModal').modal('toggle');
     $('body').removeClass('modal-open');
$('.modal-backdrop').remove();

    //alert( "second success" );
})
.fail(function() {
    alert( "error" );
})
.always(function() {

    //alert( "finished" );
          //$(this).parents().eq(1).fadeOut();

 });
});


});

