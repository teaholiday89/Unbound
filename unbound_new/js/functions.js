/******* Image Rotator stuff!! *******/

function images(src) {
	this.src = src;
	count = src.length
	
	this.turns = new Array(count);
	this.indexs = new Array(count);
	for (var i=0; i<count; i+=1) {
		this.indexs[i] = 0;
	}
	this.IMAGE_COUNT = this.src[0].length;
}

var header_images = new images([
	["india smokes.jpg", "trio 1.jpg", "untitled.jpg", "beng-ge.jpg"],

	["feathers and fur.jpg", "the right cut makes all the difference.jpg", "Destruction.jpg", "real-ideal series.jpg"],
	
	["lady strings.jpg", "greyhound day.jpg", "growth.jpg", "a photograph reflection.jpg"]]
);

var gallery_images = new images([
	["Unbound Mag Spring Poster.jpg", "Unbound Spring 2011 Poster.jpg", "Unbound Horror 2011 Poster.jpg", "alaric.jpg","Unbound Winter Open Mic.jpg"], 
	
	["Unbound Winter 2012 Poster.jpg", "Unbound Book Art.jpg", "Unbound Winter 2012 Inverted.jpg", "olive n dan 2.jpg","Unbound Book Art 3.jpg"], 
	
	["Unbound Book Art 2.jpg", "Unbound Spring 2011 Art Poster.jpg", "unbound risque.jpg", "steve.jpg","Unbound Open Mic Winter Flyer 1.jpg"], 
	
	["Unbound Fall 2011 Poster.jpg", "Unbound Annual Reading 2011 Poster.jpg", "Unbound Submit Poster.jpg", "willie 2.jpg","alaric n colin.jpg"] 
	
	
	/*["Unbound Winter Open Mic.jpg", "Unbound Book Art 3.jpg", "Unbound Open Mic Winter Flyer 1.jpg", "alaric n colin.jpg"]*/
]);


function headerImageRotate() {
	$("#image-rotator > article").each(function(i) {
				
		var image1 = $(this).find("img:first-child");
		var image2 = $(this).find("img:last-child");
		
		if (header_images.turns[i] === false) {
			switchImage(image1,image2, header_images, "image-rotator", i);
			header_images.turns[i] = true;
		}
		else {
			switchImage(image2,image1, header_images, "image-rotator", i);
			header_images.turns[i] = false;
		}
				
	});
	
	var t = setTimeout(function() {headerImageRotate();}, 6000);
}

function galleryImageRotate() {
	$("#gallery > article").each(function(i) {
				
		var image1 = $(this).find("img:first-child");
		var image2 = $(this).find("img:last-child");
		
		if (gallery_images.turns[i] === false) {
			switchImage(image1,image2, gallery_images, "gallery", i);
			gallery_images.turns[i] = true;
		}
		else {
			switchImage(image2,image1, gallery_images, "gallery", i);
			gallery_images.turns[i] = false;
		}
				
	});
	
	var t = setTimeout(function() {galleryImageRotate();}, 6000);
}


function switchImage(image1, image2, images, url, i) {
		
		$(image2).fadeOut(2500);
		$(image1).attr("src", "images/" + url + "/" + getImage(i,images));
		$(image1).fadeIn(2500);
		
}

function getImage(i,images) {
	
	image = images.src[i][images.indexs[i]];
		
	images.indexs[i] = (images.indexs[i]+1) % images.IMAGE_COUNT;
		
	return image;
	
}

/************************************
*************************************/

/******* Mailing List Stuff **********/

var mailing_list_verify = true;
	
function submit_mailing_list() {
	/*if (mailing_list_verify) {
		

		$('#mailing_list form').fadeOut(function() {
			
			var capca = $('<div />').text("Please confirm that you are human");
			
			$(this).children().remove();
			
			$(this).append(capca);
			$(this).append('<form action="javascript:submit_mailing_list();"><input type="submit" value="submit" /></form>')
			
			$(this).fadeIn();
			
			mailing_list_verify = false;
		});
	} else {*/
	
		var height = $('#mailing_list').height();
		
		$('#mailing_list').css('height', height);
	
		var json = {
			"name" : $('input[name="name"]').val(),
			"email": $('input[name="email"]').val()
		}
	
		$.post("mailing_list_confirm.php", json, function(data) {
			
				confirm = $.parseJSON(data);
				
				if (confirm.success == "false") {
					
				} else {
			
					$('#mailing_list form').fadeOut(function() {
									
						var capca = $('<section />').text("success!");
						
						$(this).children().remove();
						
						$(this).append(capca);
						
						$(this).fadeIn();
						
						mailing_list_verify = true;
					});
				}
			
		});
		
		
	
}
	



