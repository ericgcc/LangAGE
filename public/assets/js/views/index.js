/*=========================================================================================
	File Name: index.js
	Description: noUiSlider is a lightweight JavaScript range slider library.
	----------------------------------------------------------------------------------------
	Item Name: Stack - Responsive Admin Theme
	Version: 3.0
	Author: PIXINVENT
	Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/
$(document).ready(function(){
    /********************************************
     *                Slider values                *
     ********************************************/
    const fieldsets = $("fieldset.slider").toArray();
    const sliders = [];

    for(let i = 0; i < fieldsets.length; i++ ){
        const div = document.createElement("div");
        div.setAttribute("id", `s${i+1}`);
        div.classList.add("square", "slider-blue-grey");
        fieldsets[i].append(div);

        sliders[i] = document.getElementById(`s${i+1}`);

        noUiSlider.create(sliders[i], {
            start: 49,
            behaviour: "snap",
            range: {
                "min": 0,
                "max": 100
            },
            pips: {
				mode: "positions",
				values: [49],
				density: 100				
			}
        });

        sliders[i].noUiSlider.on("start", function () {
            const div = $(`#s${i + 1}`); // document.getElementById(`s${i + 1}`);
            div.removeClass("slider-blue-grey"); //classList.remove("slider-blue-grey");
            div.parent().parent().removeClass("bg-danger bg-lighten-4");
        });
    }

    $("#ubaplayer").ubaPlayer({
        codecs: [{name:"MP3", codec: "audio/mpeg;"}]
    });

    $(".ubaplayer-button").click(function () {
        let div = $(this).parent().parent().parent().parent();
        if(!$(this).hasClass("ubaplayer-playing")){
            $(".row").removeClass("border-primary");
            div.addClass("border-primary");
        }else $(".row").removeClass("border-primary");
    });

    $("#info-q1").webuiPopover({title:"Title"});
    $("#info-q2").webuiPopover({title:"Title"});
    $("#info-q3").webuiPopover({title:"Title"});

    $("#submit").click(function (e) {

        // Checking if there are sliders that have not yet been moved
        let unmoved_sliders = $("div.slider-blue-grey").length;
        
        if(unmoved_sliders !== 0){
            swal({
                title: "You have not finished yet!",
                text: `There are ${unmoved_sliders} sliders that have not yet been moved`,
                type: "warning",
                showConfirmButton: true,
                onClose: function () {
                    $("div.slider-blue-grey").parent().parent().addClass("bg-danger bg-lighten-4");
                }
            });
            e.preventDefault();
        }

        sliders.forEach(function (s) {
           //console.log(s.noUiSlider.get());
        });
    });
});