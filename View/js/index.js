var textarea = document.querySelector('textarea');

textarea.addEventListener('keydown', autosize);

function autosize() {
    var el = this;
    setTimeout(function () {
        el.style.cssText = 'height: 35px; padding:0';
        // for box-sizing other than "content-box" use:
        // el.style.cssText = '-moz-box-sizing:content-box';
        el.style.cssText = 'height:' + el.scrollHeight + 'px';
    }, 0);
}

$(document).ready(function () {
    $("#inputfile").on("change", function (e) {
        var files = $(this)[0].files;
        if (files.length >= 2) {
            $("#labelFileUpload").text(files.length + " file đã được chọn");
        } else {
            var filename = e.target.value.split('\\').pop();
            $("#labelFileUpload").text(filename);
        }
    });

    //Ẩn hiện div tìm kiếm theo email
    $(".div-timtheoemail").hide();
    $("#a-timtheoemail").click(function () {
        $(".div-timtheoemail").toggle(500);
    });

    //divlink

    $(".yourfriend").click(function() {
        window.location = $(this).find("a").attr("href"); 
        return false;
    });

});

$(function () {
    $('[data-tooltip="true"]').tooltip();
})
