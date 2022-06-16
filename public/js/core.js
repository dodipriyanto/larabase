$('.addModal').on('click', function (){
    formReset();
    modalShow('myModal','Add Data');
});

$('.number-only').on('input', function (event) {
    this.value = this.value.replace(/[^0-9]/g, '');
});

$('#myModal').on('hidden.bs.modal', function (){
    formReset();
});

function unescapeHTML(escapedHTML) {
    return escapedHTML.replace(/&lt;/g,'<').replace(/&gt;/g,'>').replace(/&amp;/g,'&');
}

function swalStatus(result, modalId, hidden = true)
{
    // console.log(result)
    let message = "";
    if (result.status === "error"){
        $.each(result.message, function (item, val){
            message +=  `${val}`;
        })
    }else{
        message = result.message
    }
    swal({
        html:true,
        icon: `${result.status}`,
        title: `${result.status.toUpperCase()}`,
        text: message,
        showCancelButton: false,
        showConfirmButton: false,
        timer: 1000,
    }).then(() => {
        swal.close();
        // console.log(hidden);
        if (hidden === true){
            modalHide(`${modalId}`);
        }

        tableReload(table);
    });
}

function swalSuccess(result, modalId)
{
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: result.success,
        showCancelButton: false,
        showConfirmButton: false,
        timer: 1000,
    }).then(() => {
        Swal.close();
        modalHide(`${modalId}`);
        tableReload(table);
    });
}

// function modalShow(modalId, modalTitle){
//     $('.modal-title').text(modalTitle)
//
//     $(`#${modalId}`).modal({backdrop: 'static', keyboard: false});
// }
//
// function modalHide(modalId){
//     $(`#${modalId}`).modal("hide");
// }

function modalShow(modalId, modalTitle)
{
    $('.modal-title').text(modalTitle)
    $(`#${modalId}`).addClass('md-show');
}

function modalHide(modalId)
{
    $('.md-effect-1').removeClass('md-show')
}

function tableReload(tableName)
{
    tableName.ajax.reload();
}

function formReset() {
    $('#formModal')[0].reset();
    $('#tbl-access tbody').html('');
    $("#id").val('');
    $("#formModal fieldset").removeClass("validate", true);

    formEnable();
}

function formDisable(){
    $("#formModal input").prop("disabled", true);
    $("#formModal textarea").prop("disabled", true);
    $("#formModal select").prop("disabled", true);
    $("#formModal button[type=submit]").prop("disabled", true);
}

function formEnable(){
    $("#formModal input").removeAttr("disabled", true);
    $("#formModal select").removeAttr("disabled", true);
    $("#formModal button").removeAttr("disabled", true);
}
