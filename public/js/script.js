$(document).ready(function () {
    
    $('[date-pick="true"]').datepicker({
        todayBtn: "linked",
        todayHighlight: true,
        format: "yyyy-mm-dd",
    });
    
    $(function(){
        $(window).scroll(function(){
            if($(this).scrollTop() === 0){
                $('#to-top').hide();
            }
            if($(this).scrollTop() > 3){
                $('#to-top').show();
            }
        });
    });
    
    $('#to-top').on('click', function () {
        $("html, body").animate({ scrollTop: 0 }, "medium");
    })
    
});

function notify(message) {
    $.notify({
        // options
        icon: 'fas fa-check',
        message: message
    }, {
        // settings
        type: "success",
        // allow_dismiss: true,
        placement:
            {
                from: "bottom",
                align: "right"
            },
        offset: {
            x: 10,
            y: 50,
        },
        spacing: 2,
        delay: 2500,
        template:
            '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-success" role="alert">' +
            '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
            '<span data-notify="icon"></span> ' +
            '<span data-notify="title">{1}</span> ' +
            '<span class="text-justify" data-notify="message">{2}</span>' +
            '<div class="progress" style="height: 1px;" data-notify="progressbar">' +
            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
            '</div>' +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
            '</div>'
    });
}