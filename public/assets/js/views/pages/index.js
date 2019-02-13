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

// Define the tour!
const tour = {
    id: "LangAge",
    steps: [
        {
            title: "Questions",
            content: "Ce sont les questions que vous devez évaluer pour chaque enregistrement.",
            target: "hs-t-question-1",
            placement: "bottom",
        },
        {
            title: "Détails",
            content: "Si vous avez des doutes sur les questions, vous pouvez cliquer ici pour en savoir plus.",
            target: "hs-t-details",
            placement: "right",yOffset: -20
        },
        {
            title: "Lecteurs audio",
            content: "Cliquez sur chaque contrôle pour écouter l'enregistrement correspondant.",
            target: "hs-t-player",
            placement: "top",
            xOffset: -25
        },
        {
            title: "Sliders",
            content: "Utilisez les sliders pour évaluer chaque enregistrement conformément à la question. " +
                "<b>Notez que les sliders commencent au milieu et sont gris si vous ne les avez pas encore bougé. Lorsque vous déplacez les sliders, ils deviennent verts</b>.",
            target: "hs-t-sliders-1",
            placement: "top",
            arrowOffset: "center",
            xOffset: 64
        },
        {
            title: "Sliders",
            content: "Déplacer le slider vers la gauche signifie \"peu\".",
            target: "hs-t-sliders-1",
            placement: "left",
            yOffset: -11,
            xOffset: 11
        },
        {
            title: "Sliders",
            content: "Déplacer le slider vers la droite signifie \"beaucoup\".",
            target: "hs-t-sliders-1",
            placement: "right",
            yOffset: -11,
            xOffset: -11
        },
        {
            title: "Sliders",
            content: "Si vous voulez laisser le slider au milieu, cliquez simplement dessus.",
            target: "hs-t-sliders-1",
            placement: "bottom",
            arrowOffset: "center",
            xOffset: 64
        },
        {
            title: "Enregistrer pour plus tard",
            content: "Vous pouvez enregistrer l'état actuel de vos évaluations et continuer plus tard.",
            target: "save",
            placement: "top"
        },
        {
            title: "Soumettez vos évaluations",
            content: "Lorsque vous avez bougé tous les sliders, vous pouvez soumettre les évaluations. Cela terminera le processus et vous ne pourrez plus faire de modifications.",
            target: "submit",
            placement: "top",
            arrowOffset: 60,
            xOffset: -60
        }
    ],
    showPrevButton: true,
    showCloseButton: false,
    showSkip: true,
    i18n: {
        nextBtn: "Suivant",
        prevBtn: "Précédent",
        doneBtn: "Terminer",
        skipBtn: "Quitter"
    },
    scrollDuration: 750
};

$(document).ready(function(){

    if(jQuery.browser.mobile)
        window.location = 'mobile';

    $('.question').matchHeight({
        byRow: false
    });

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

    $("#submit").click(function (e) {
        e.preventDefault();

        // Checking if there are sliders that have not yet been moved
        let unmoved_sliders = $("div.slider-blue-grey").length;

        if(unmoved_sliders !== 0){
            swal({
                title: "Vous n'avez pas encore fini !",
                text: `Il y a ${unmoved_sliders} sliders qui n'ont pas encore été bougés`,
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
                const submit =  $("#submit");
                const save =  $("#save");

                submit.prop('disabled', true);
                submit.addClass("disabled");
                save.prop('disabled', true);
                save.addClass("disabled");

                submit.children().removeClass("fa-save");
                submit.children().addClass("fa-ellipsis-h");
            }
        }).done(function (data) {

            if(data === "true"){
                const button =  $("#submit");
                button.children().removeClass("fa-ellipsis-h");
                button.children().addClass("fa-check");
                button.removeClass("btn-primary");
                button.addClass("btn-success");
                swal({
                    title: "Merci !",
                    text: "L'évaluation est terminée",
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
                    title: "Oh non !",
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
                const submit = $("#submit");
                const save =  $("#save");

                if (submit.hasClass("btn-success")) submit.removeClass("btn-success");
                if (submit.hasClass("btn-danger")) submit.removeClass("btn-danger");
                submit.addClass("btn-primary");

                submit.removeAttr("disabled");
                submit.removeClass("disabled");
                save.removeAttr("disabled");
                save.removeClass("disabled");

                submit.children().removeClass("fa-check");
                submit.children().removeClass("fa-times");
                submit.children().addClass("fa-save");
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
                const save =  $("#save");
                const submit =  $("#submit");

                save.prop('disabled', true);
                save.addClass("disabled");
                submit.prop('disabled', true);
                submit.addClass("disabled");

                save.children().removeClass("fa-save");
                save.children().addClass("fa-ellipsis-h");
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
                const save =  $("#save");
                const submit =  $("#submit");

                if(save.hasClass("btn-success")) save.removeClass("btn-success");
                if(save.hasClass("btn-danger")) save.removeClass("btn-danger");
                save.addClass("btn-warning");

                save.removeAttr("disabled");
                save.removeClass("disabled");
                submit.removeAttr("disabled");
                submit.removeClass("disabled");

                save.children().removeClass("fa-check");
                save.children().removeClass("fa-times");
                save.children().addClass("fa-save");
            }, 1000);
        });
    });

    if(stamp === '') hopscotch.startTour(tour);
    $("#tour").click(function () {
        hopscotch.startTour(tour);
    });

    $("#q1-card").flip({
        trigger: 'manual'
    });

    $(".q1-btn").click(function (){
        $("#q1-card").flip('toggle');
    });

    $("#q2-card").flip({
        trigger: 'manual'
    });

    $(".q2-btn").click(function (){
        $("#q2-card").flip('toggle');
    });

    $("#q3-card").flip({
        trigger: 'manual'
    });

    $(".q3-btn").click(function (){
        $("#q3-card").flip('toggle');
    });

});