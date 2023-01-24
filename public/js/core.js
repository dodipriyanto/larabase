$('.addModal').on('click', function (){
    formReset();
    modalShow('myModal','Add Data');
});

$('#myModal').on('hidden.bs.modal', function (){
    formReset();
});

function validateSwal(text)
{
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: `${text}`,
    }).then(function (){

    });
}

function validateDateInput(dt1, dt2)
{
    if (dt1 == '') {
        validateSwal('Start Date Required', tgl1);
        // $("#tgl1").focus();
        return false;
    }

    if (dt2 == '') {
        validateSwal('End Date Required');
        // $("#tgl2").focus();
        return false;
    }

    if (dt1 > dt2){
        validateSwal('Please Select Correct Date');
        return false
    }
}

function setTagColor(param) {
    let color;
    switch (param.name) {
        case 'OPEN':
            color = 'danger';
            break;
        case 'URGENT':
            color = 'danger';
            break;
        case 'CLOSE' :
            color = 'success';
            break;
        case 'LOW' :
            color = 'success';
            break;
        case 'PROCESS' :
            color = 'warning';
            break;
        case 'MEDIUM' :
            color = 'warning';
            break;

        default :
            color = 'danger'
    }
    return color;
}


function unescapeHTML(escapedHTML) {
    return escapedHTML.replace(/&lt;/g,'<').replace(/&gt;/g,'>')
}

function swalStatus(result, modalId, timer)
{
    let message = "";
    if (result.status == 'error'){
        $.each(result.message, function (item, val){
            message +=  ` <span class="la la-exclamation red"> ${val}</span><br>`;
        })
    }else{
        message = result.message
    }
    Swal.fire({
        icon: `${result.status}`,
        title: `${result.status}`,
        html: message,
        showCancelButton: false,
        showConfirmButton: false,
        timer: 1000,
    }).then(() => {
        if (timer){
            window.location.reload();
        }
        Swal.close();
        modalHide(`${modalId}`);
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

function modalShow(modalId, modalTitle){
    $('.modal-title').text(modalTitle)

    $(`#${modalId}`).modal({backdrop: 'static', keyboard: false});
}

function modalHide(modalId){
    $(`#${modalId}`).modal("hide");
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

$('.number-only').on('input', function (event) {
    this.value = this.value.replace(/[^0-9]/g, '');
});
