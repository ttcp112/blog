var chuoi = "";
var so = "";
function setvalue(object) {
    //code by Minit - www.canthoit.info - 13-05-2009
    var str = (object.value);
    str = str.toLowerCase();
    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
    str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
    str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
    str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
    str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
    str = str.replace(/đ/g, "d");
    str = str.replace(/!|@|\$|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\'| |\"|\&|\#|\[|\]|~/g, "-");
    str = str.replace(/-+-/g, "-"); //thay thế 2- thành 1-
    str = str.replace(/^\-+|\-+$/g, ""); //cắt bỏ ký tự - ở đầu và cuối chuỗi
    chuoi = str;
}



function gan(object) {
    object.value = chuoi;

}

function delete_confirm() {
    var result = confirm("Bạn có thực sự muốn xóa không?");
    if (result) {
        return true;
    }
    return false;
}

function Setgiatriso(object) {

    var str = (object.value);
    if (isNaN(str)) {

        alert("Sai định dạng !");
        object.value = 1;
    
    }

    
}

function ganso(object) {

    var str = (object.value);
    object.value = so;

}

// them anh
function AddMoreImages() {
    if (!document.getElementById && !document.createElement)
        return false;
    var fileUploadarea = document.getElementById("up");
    if (!fileUploadarea)
        return false;
    var newLine = document.createElement("br");
    fileUploadarea.appendChild(newLine);
    var newFile = document.createElement("input");
    newFile.type = "file";
    newFile.setAttribute("class", "fileUpload");
    if (!AddMoreImages.lastAssignedId)
        AddMoreImages.lastAssignedId = 100;
    newFile.setAttribute("id", "FileUpload" + AddMoreImages.lastAssignedId);
    newFile.setAttribute("name", "FileUpload" + AddMoreImages.lastAssignedId);
    var div = document.createElement("div");
    div.appendChild(newFile);
    div.setAttribute("id", "div" + AddMoreImages.lastAssignedId);
    fileUploadarea.appendChild(div);
    AddMoreImages.lastAssignedId++;
}
//pupup


$(document).ready(function () {
    (function ($) {
        //Can gi?a ph?n t? thu?c tính là absolute so v?i ph?n hi?n th? c?a trình duy?t, ch? dùng cho ph?n t? absolute d?i v?i body
        $.fn.absoluteCenter = function () {
            this.each(function () {
                var top = -($(this).outerHeight() / 2) + 'px';
                var left = -($(this).outerWidth() / 2) + 'px';
                $(this).css({ 'position': 'absolute', 'position': 'fixed', 'margin-top': top, 'margin-left': left, 'top': '50%', 'left': '50%' });
                return this;
            });
        }
    })(jQuery);

    $('a#show-popup').click(function () {
        //Ð?t bi?n cho các d?i tu?ng d? g?i d? dàng
        var bg = $('div#popup-bg');
        var obj = $('div#popup');
        var btnClose = obj.find('#popup-close');
        //Hi?n các d?i tu?ng
        bg.animate({ opacity: 0.2 }, 0).fadeIn(1000); //cho n?n trong su?t
        obj.fadeIn(1000).draggable({ cursor: 'move', handle: '#popup-header' }).absoluteCenter(); //can gi?a popup và thêm draggable c?a jquery UI cho ph?n header c?a popup
        //Ðóng popup khi nh?n nút
        btnClose.click(function () {
            bg.fadeOut(1000);
            obj.fadeOut(1000);
        });
        //Ðóng popup khi nh?n background
        bg.click(function () {
            btnClose.click(); //K? th?a nút dóng ? trên
        });
        //Ðóng popup khi nh?n nút Esc trên bàn phím
        $(document).keydown(function (e) {
            if (e.keyCode == 27) {
                btnClose.click(); //K? th?a nút dóng ? trên

            }
        });
        return false;
    });
});   