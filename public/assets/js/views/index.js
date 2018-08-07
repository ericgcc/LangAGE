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
    var sliders = [];

    for(let i = 0; i < fieldsets.length; i++ ){
        const div = document.createElement("div");
        div.setAttribute("id", `s${i+1}`);
        div.classList.add("square", "slider-blue-grey");
        fieldsets[i].append(div);

        sliders[i] = document.getElementById(`s${i+1}`);

        noUiSlider.create(sliders[i], {
            start: 49,
            behaviour: 'snap',
            range: {
                'min': 0,
                'max': 100
            },
            pips: {
				mode: 'positions',
				values: [49],
				density: 100				
			}
        });

        sliders[i].noUiSlider.on('start', function () {
            const div = document.getElementById(`s${i + 1}`);
            div.classList.remove("slider-blue-grey");
        });
    }

    $("#ubaplayer").ubaPlayer({
        codecs: [{name:"MP3", codec: 'audio/mpeg;'}]
    });

    $('#info-q1').webuiPopover({title:'Title'});
    $('#info-q2').webuiPopover({title:'Title'});
    $('#info-q3').webuiPopover({title:'Title'});
});