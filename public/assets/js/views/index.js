/*=========================================================================================
	File Name: index.js
	Description: noUiSlider is a lightweight JavaScript range slider library.
	----------------------------------------------------------------------------------------
	Item Name: Stack - Responsive Admin Theme
	Version: 3.0
	Author: PIXINVENT
	Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/
const number_of_questions = 3;
const number_of_tracks = 15;
$(document).ready(function(){

    /********************************************
     *                Slider values             *
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
            start: 50.5,
            behaviour: "snap",
            range: {
                "min": 0,
                "max": 100
            },
            pips: {
				mode: "positions",
				values: [50],
				density: 100
			}
        });

        if(current && current[i] !== 'null'){
            sliders[i]. noUiSlider.set(current[i]);
            sliders[i].classList.remove("slider-blue-grey");
        }

        sliders[i].noUiSlider.on("start", function () {
            const div = $(`#s${i + 1}`);
            div.removeClass("slider-blue-grey");
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
        e.preventDefault();

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
            return;
        }

        let ratings = [];
        for(let t = 0, s = 0; t < number_of_tracks; t++){
            let questions = [];
            for(let q = 0; q < number_of_questions; q++, s++)
                questions.push(parseFloat(sliders[s].noUiSlider.get()));
            ratings.push(questions);
        }

        $.ajax({
            url: "ratings/store",
            type: "post",
            dataType: "json",
            data: {
                _token: $('meta[name="_token"]').attr('content'),
                ratings: ratings,
                finished: true,
                number_of_questions: number_of_questions,
                number_of_tracks: number_of_tracks
            },
            beforeSend: function () {
                const button =  $("#submit");
                button.prop('disabled', true);
                button.addClass("disabled");

                button.children().removeClass("fa-save");
                button.children().addClass("fa-ellipsis-h");
            }
        }).done(function (data) {

            if(data === "true"){
                const button =  $("#submit");
                button.children().removeClass("fa-ellipsis-h");
                button.children().addClass("fa-check");
                button.removeClass("btn-primary");
                button.addClass("btn-success");
                swal({
                    title: "Thanks!",
                    text: "The evaluation has been completed",
                    type: "success",
                    showConfirmButton: false,
                    timer: 3000,
                    onClose: function () {
                        location.reload();
                    }
                });
            }else{
                const button =  $("#submit");
                button.children().removeClass("fa-ellipsis-h");
                button.children().addClass("fa-times");
                button.removeClass("btn-primary");
                button.addClass("btn-danger");

                swal({
                    title: "Oh no!",
                    text: data,
                    type: "error",
                    showConfirmButton: true
                });
            }
        }).fail(function () {
            const button =  $("#submit");
            button.children().removeClass("fa-ellipsis-h");
            button.children().addClass("fa-times");
            button.removeClass("btn-primary");
            button.addClass("btn-danger");
        }).always(function () {
            window.setTimeout(function () {
                const button = $("#submit");

                if (button.hasClass("btn-success")) button.removeClass("btn-success");
                if (button.hasClass("btn-danger")) button.removeClass("btn-danger");
                button.addClass("btn-primary");

                button.removeAttr("disabled");
                button.removeClass("disabled");

                button.children().removeClass("fa-check");
                button.children().removeClass("fa-times");
                button.children().addClass("fa-save");
            }, 1000);
        });
    });

    $("#save").click(function (e) {
        e.preventDefault();

        let ratings = [];
        for(let t = 0, s = 0; t < number_of_tracks; t++){
            let questions = [];
            for(let q = 0; q < number_of_questions; q++, s++) {
                if(!sliders[s].classList.contains("slider-blue-grey")) questions.push(parseFloat(sliders[s].noUiSlider.get()));
                else questions.push("");
            }
            ratings.push(questions);
        }

        $.ajax({
            url: "ratings/store",
            type: "post",
            data: {
                _token: $('meta[name="_token"]').attr('content'),
                ratings: ratings,
                finished: false,
                number_of_questions: number_of_questions,
                number_of_tracks: number_of_tracks
            },
            beforeSend: function () {
                const button =  $("#save");
                button.prop('disabled', true);
                button.addClass("disabled");

                button.children().removeClass("fa-save");
                button.children().addClass("fa-ellipsis-h");
            }
        }).done(function () {
            const button =  $("#save");
            button.children().removeClass("fa-ellipsis-h");
            button.children().addClass("fa-check");

            button.removeClass("btn-warning");
            button.addClass("btn-success");
        }).fail(function () {
            const button =  $("#save");
            button.children().removeClass("fa-ellipsis-h");
            button.children().addClass("fa-times");

            button.removeClass("btn-warning");
            button.addClass("btn-danger");
        }).always(function () {
            window.setTimeout(function(){
                const button =  $("#save");

                if(button.hasClass("btn-success")) button.removeClass("btn-success");
                if(button.hasClass("btn-danger")) button.removeClass("btn-danger");
                button.addClass("btn-warning");

                button.removeAttr("disabled");
                button.removeClass("disabled");

                button.children().removeClass("fa-check");
                button.children().removeClass("fa-times");
                button.children().addClass("fa-save");
            }, 1000);
        });
    });
});