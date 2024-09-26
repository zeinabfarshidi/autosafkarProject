function isNumberKey(txt, evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode == 46) {
        if (txt.value.indexOf('.') === -1) {
            return true;
        } else {
            return false;
        }
    } else {
        if (charCode > 31 &&
            (charCode < 48 || charCode > 57))
            return false;
    }
    return true;
}

function deleteItem(event, id, text){
    Swal.fire({
        title: "از حذف کردن مطمئن هستید؟",
        text: text,
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "حذف",
        cancelButtonText: "انصراف"
    }).then((result) => {
        if (result.isConfirmed) {
            $('#delete' + id).click();
        }
    });
}

