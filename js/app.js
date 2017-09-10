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
			location.assign("flightstatus.php");
		});
		$("#view_flight").click(function(){
			location.assign("flightrecord.php");
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
				location.assign("bookaflight.php"); 
			}
			//ALT F FOR FLIGHT STATUS
			if(e.which == 83 && isAlt) {
				location.assign("flightstatus.php"); 
			}
			//ALT A FOR FLIGHT STATUS
			if(e.which == 65 && isAlt) {
				location.assign("aboutus.php"); 
			}

			//ALT R FOR FLIGHT STATUS
			if(e.which == 82 && isAlt) {
				location.assign("flightrecord.php"); 
			}
		});
		//FOCUS EVENTS, SOUND GUIDES

    });
function play_guide(audio)
{
	$("#sound_guide").attr("src","audio/"+audio);
	$("#sound_guide")[0].play()
}