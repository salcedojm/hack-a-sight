$(document).ready(function(){
		var isCtrl=false;
		var isShift=false;
		var isAlt=false;
		$(".tab1").click(function(){
			$("#one_way,#multi_city").fadeOut(500, function(){
				$("#round_trip").fadeIn();
			});
		});

		$(".tab2").click(function(){
			$("#round_trip,#multi_city").fadeOut(500, function(){
				$("#one_way").fadeIn();
			});
		});


		$(".tab3").click(function(){
			$("#one_way,#round_trip").fadeOut(500, function(){
				$("#multi_city").fadeIn();
			});
		});

		$("#book_flight").click(function(){
			location.assign("bookaflight.php");
		});
		$("#reserve").click(function(){
			location.assign("bookaflight.php");
		});
		$("#view_flight").click(function(){
			location.assign("bookaflight.php");
		});
		$("#nothing").click(function(){
			location.assign("aboutus.php");
		});
		//KEYBOARD EVENTS GOES HERE...

		$(document).keydown(function(e) {
			if(e.which == 17) {
				isCtrl = true; 
			}
			if(e.which == 16) {
				isShift = true; 
			}
			if(e.which == 18) {
				isAlt = true; 
			}

			//ALT H FOR HOMEPAGE
			if(e.which == 72 && isAlt) {
				location.assign("homepage.php"); 
			}
			//ALT B FOR BOOKNOW
			if(e.which == 66 && isAlt) {
				location.assign("booknow.php"); 
			}
			//ALT F FOR FLIGHT STATUS
			if(e.which == 70 && isAlt) {
				location.assign("flight-status.php"); 
			}
			//ALT V FOR FLIGHT STATUS
			if(e.which == 86 && isAlt) {
				location.assign("view-flight.php"); 
			}
		});
		//FOCUS EVENTS, SOUND GUIDES

    });
function play_guide(audio)
{
	$("#sound_guide").attr("src","audio/"+audio);
	$("#sound_guide")[0].play()
}