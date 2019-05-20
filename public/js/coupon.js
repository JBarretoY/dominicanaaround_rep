$(document).ready(function(){
    getCoupons();

    $('.datepicker').datepicker({
        format:'yyyy-mm-dd'
    });

    $(document).on('keyup','#cupon_',function(){
        var coupon = $(this).val().replace('$','');
        console.log(coupon);
        if(coupon == ""){
            $("#price").text('$ '+$("#priceoreal").val());
        }

    });

    $(document).on('blur','#cupon',function(){
        getCounponValue($(this).val(),'shop');
    });

    $(document).on('blur','#cupon_',function(){
        getCounponValue($(this).val(),'excur');
    });

    $(document).on("click","#modalcoupon",function(){
        getUser2Counpon();
    });

    $(document).on("click","span[id^='upc-']",function(){
        var id = $(this).attr('id').split('-').pop();
        var coupon = specificCounpon(id);

        if(coupon !== ''){
            $('#modal1').openModal();

            $("#code").val(coupon['code']);
            $("#name").val(coupon['name']);
            $("#percentage").val(coupon['percentage']);
            $("#dti").val(coupon['date_init']);
            $("#dte").val(coupon['date_end']);
            $("#status").val(coupon['status']);
            $("#validUp").val(1);
            $("#coupon_id").val(coupon['id']);
        }
    });

    $(document).on("click","span[id^='delc-']",function(){
        var id = $(this).attr('id').split('-').pop();

        swal({
            title: '¿Está seguro de eliminar este código de referido?',
            text: "El código de referido se borrará de la base de datos permanentemente",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Eliminarlo'
        },(result) => {
            if (result) {

                $.ajax({
                    url: 'deletecoupons',
                    type: 'POST',
                    data:{id:id,_token:$("#token").val()},
                    success: function(data) {
                        if(data){
                            swal(
                                '¡Eliminado!',
                                'El código de referido ha sido eliminado.',
                                'success'
                            );
                        }else{
                            swal(
                                '¡Error!',
                                'Ha ocurrido un error, intente luego.',
                                'warning'
                            );
                        }
                        getCoupons();
                    },
                });
            }
        });
    });

    $(document).on('click','#sendCoupon',function(){

        if(parseInt($("#validUp").val()) === 1)
            updateCoupons($('#name').val(),$("#code").val(),$("#dti").val(),$("#dte").val(),$("#status").val(),$('#percentage').val(),null,$("#email_re").val());
        else
            saveCoupon($('#name').val(),$("#code").val(),$("#dti").val(),$("#dte").val(),$("#status").val(),$('#percentage').val(),null,$("#email_re").val());
    });

    $(document).on('change','#payment',function(){
        if ($(this).val().trim() === 'paypal') {
            $("#reservation").removeAttr('action').attr('action', '/paypal');
        }else if ($(this).val().trim() === 'cash-hand') {
            $("#reservation").removeAttr('action').attr('action', '/cash-hand');
        }  
    });
});

function specificCounpon(id){
    var coupon = '';
    if(id !== undefined || id !== ''){
        $.ajax({
            url: 'getspecific-coupon/'+id,
            type: 'GET',
            async:false,
            success: function(data) {
                coupon = data;
            },
        });
        return coupon;
    }else
        return '';
}

function getCoupons(){
    $.ajax({
        url: 'getcoupons',
        type: 'GET',
        error: function() {
            $('#info').html('<p>An error has occurred</p>');
        },
        success: function(data) {
            if(data.length > 0){
                $("#dataCoupon").html('');
                var coupons = data;

                for(var i = 0; i < coupons.length; i++){
                    var date = coupons[i]['created_at'].split(' ');
                    var status = '';

                    if( parseInt(coupons[i]['status']) === 1 )
                        status = 'Activo';
                    else
                        status = 'Inactivo';

                    if( coupons[i]['refers'] === null)
                        code = "NR";
                    else
                        code = coupons[i]['refers'];

                    if($("#isAdmin").val() == 1){
                        var valueCoupon =
                            '<tr>' +
                            '<td>'+coupons[i]['code']+'<td/>'+
                            '<td>'+code+'<td/>'+
                            '<td>'+coupons[i]['name']+'<td/>'+
                            '<td>'+coupons[i]['percentage']+'<td/>'+
                            '<td>'+coupons[i]['date_init']+'<td/>'+
                            '<td>'+coupons[i]['date_end']+'<td/>'+
                            '<td>'+date[0]+'<td/>'+
                            '<td>'+status+'<td/>'+
                            '<td>'+
                            '<span class="small material-icons" id="upc-'+coupons[i]['id']+'">autorenew</span>'+
                            '<span class="small material-icons" id="delc-'+coupons[i]['id']+'">delete</span>'+
                            '<td/>'+
                            '</tr>';
                    }else{
                        var valueCoupon =
                            '<tr>' +
                            '<td>'+coupons[i]['code']+'<td/>'+
                            '<td>'+code+'<td/>'+
                            '<td>'+coupons[i]['name']+'<td/>'+
                            '<td>'+coupons[i]['percentage']+'<td/>'+
                            '<td>'+coupons[i]['date_init']+'<td/>'+
                            '<td>'+coupons[i]['date_end']+'<td/>'+
                            '<td>'+date[0]+'<td/>'+
                            '<td>'+status+'<td/>'+
                            '</tr>';
                    }
                    $("#dataCoupon").append(valueCoupon);
                    $("td:empty").remove();
                }
            }
        },
    });
}

function cleanFormCoupon() {
    $("#code").val('');
    $('#name').val('');
    $("#dti").val('');
    $("#dte").val('');
    $("#status").val('');
    $('#percentage').val('');
    $("#email_re").val('');
}

function saveCoupon(name,code,dti,dte,status,percentage,user_id,refers){

    $.ajax({
        url: 'savecoupons',
        type: 'POST',
        data:{
            name:name,
            code:code,
            date_init:dti,
            date_end:dte,
            status:status,
            percentage:percentage,
            user_id:user_id,
            refers:refers,
            _token:$("#token").val()
        },
        success: function(data) {
            if(data){
                swal('Código de referido registrado exitosamente','','success');
                cleanFormCoupon();
            }else{
                swal('Error al crear nuevo código de referido, intente luego','','error');
            }
            getCoupons();
        },
    });
}

function updateCoupons(name,code,dti,dte,status,percentage,user_id,refers) {

    swal({
        title: '¿Está seguro de actualizar este código de referido?',
        text: "Se actualizarán los datos del código de referido",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Actualizar'
    },(result) => {
        if (result) {
            $.ajax({
                url: 'updatecoupons',
                type: 'POST',
                data:{
                    id:$("#coupon_id").val(),
                    code:code,
                    name:name,
                    percentage: percentage,
                    date_init:dti,
                    date_end:dte,
                    status:status,
                    user_id:user_id,
                    refers:refers,
                    _token:$("#token").val()
                },
                success: function(data) {
                    if(data){
                        swal(
                            '¡Actualizado!',
                            'El código de referido ha sido actualizado.',
                            'success'
                        );
                    }else{
                        swal(
                            '¡Error!',
                            'Ha ocurrido un error, intente luego.',
                            'warning'
                        );
                    }
                    $("#validUp").val('');
                    getCoupons();
                },
            });
        }
    });
}

function getCounponValue(code,where){

    var idsna = [6,5,11,13,10];
    var found = true;

    if(code === '' || code === undefined){
        $("#price").text('$ '+$("#priceoreal").val());
        return false;
    }

    for(var i = 0; i < idsna.length; i++){
        if(parseInt(idsna[i]) === parseInt($("#idTour").val())){
            found = false;
        }
    }
    if(!found){
        swal('This tour dont accept referece code','','warning');
        $("#cupon").val("");
        return false;
    }else{
        $.ajax({
            url: '/getcouponValue',
            type: 'GET',
            data:{'code':code},
            success: function(data) {
                if(data){
                    if(where === 'excur'){
                        var value = parseFloat($("#price").text().replace('$',''));
                        var per = data['percentage'];
                        var finalPrice = value - parseInt(parseFloat(value) * parseFloat(per)  / 100);
                        $("#price").text("$"+parseFloat(finalPrice));
                        $("#finalPrice").val(parseFloat(finalPrice));
                        $("#code_dis").val(code);
                        swal('Reference Code Applied','','success');
                    }else{
                        var value = parseFloat($("#price").val());
                        var per = parseFloat(data['percentage']);
                        var finalPrice = value - parseInt(per * value / 100);
                        console.log(finalPrice);
                        $("#priceText").text('$ '+finalPrice+'.00');
                        $("#price").val(parseFloat(finalPrice));
                        $("#finalPrice").val(parseFloat(finalPrice));
                    }
                }else if(data == 0){
                    swal('Reference code expired or not found','','warning');
                    $("#price").text('$ '+$("#priceoreal").val());
                }
            },
        });
    }
}

function getDiscountSession(){
    $.ajax({
        url: 'get-data-session',
        type: 'GET',
        success: function(data) {
            if(data){
                if(data > 0){
                    var value = parseFloat($("#price").val());
                    var per = parseFloat(data);
                    var finalPrice = value - parseInt(per * value / 100);

                    $("#price").val(parseFloat(finalPrice));
                    //$("#finalPrice").val(parseFloat(finalPrice));

                    var input = $('#finalPrice');
                    input.val(parseFloat(finalPrice));
                    input.trigger('input');
                    input.trigger('change');
                }
            }
        },
    });
}