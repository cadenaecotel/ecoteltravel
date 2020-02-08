$(window).on('load', function() {
    $('#advertising_modal').modal('show');
});

$("#advertising_modal").on("hidden.bs.modal", function() {
    var video = document.getElementById("advertising_video");
    video.pause();
});