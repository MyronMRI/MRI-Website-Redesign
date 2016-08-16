/*------------------------------------------------------------------------

//GENERAL FUNCTONS ///////////////////////////////////////////////////////

-------------------------------------------------------------------------*/
/* VIEWPORT */

/* GUN LISTING*/
/*
		var opened = 0;

        $("#gun_container .gun_model").on("click", function (e) {

            e.preventDefault();
			// Click again to close
			if ($(this).hasClass("selected" ) == true){
				opened = 0;
				$(".gun_model").removeClass("selected not-selected")
				$("#gun_container .gun_model span").html("+");
				$(".gun-desc-wrapper").slideUp();
				
			}else{	
				opened = 1;		
			var $allBoxes = $(".gun-desc-wrapper");
				var $oldBox = $allBoxes.filter(":visible");
				var $nextBox = $(this).parent().next(".gun-desc-wrapper");
	
				var modelsInRow = Math.floor($("#gun_container").width() / $(".gun_model").width()),
					modelPosition = $("#gun_container .gun_model").index(this),
					rowPosition = modelPosition + 1 / modelsInRow,
					columnPosition = Math.floor(rowPosition % modelsInRow);
	
				$(".gun_model").removeClass("selected").addClass("not-selected");
				$("#gun_container .gun_model span").html("+");
				$(this).addClass("selected").removeClass("not-selected");
				$("span",this).html("-");
				if ($oldBox.length) {
					$oldBox.hide();
					$nextBox.show();
					setTimeout(function () {
						$allBoxes.attr("class", "gun-desc-wrapper pos-" + columnPosition);
					}, 10);
					
	
				} else {
					opened = 1;	
					$allBoxes.attr("class", "gun-desc-wrapper pos-" + columnPosition);
					$nextBox.slideDown();
									
				}
				
				if($("body").hasClass( "mobile" ) == true){
					$("html, body").animate({scrollTop: $(this).offset().top-50}, 450);		
				}else{
			 	$("html, body").animate({scrollTop: $(this).offset().top}, 450);		
			}
		}
        }); 
        $("#gun_container .close ").click(function () {
			opened = 0;
            $(".gun-desc-wrapper").slideUp();
			$(".gun_model").removeClass("selected").removeClass("not-selected");
 			$("#gun_container .gun_model span").html("+");
        });
		
*/