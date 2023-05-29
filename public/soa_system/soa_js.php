<script>
$('.sample-datatable').DataTable();

$(function() {
    // var sum = 0;
    $(document).on("keyup", ".the_costing", function() {
    var total = 0;
    var sum = 0;
    console.log($(this).attr("id"));
    $("input[class *= 'the_costing']").each(function(){
        if($(this).attr("id") != "downpayment"){
            sum += +$(this).val();
            total += +$(this).val();
        }
        else
            sum -= +$(this).val();
    });
    // alert(sum);
    $(".total").val(total);
    // $(".balance").val(sum);
});
});


$(document).ready(function(){
    $("#form_details :input").prop('readonly', true); //Making all inputs to disabled
  $('#form_details').find('select').attr('readonly',true);
});


$("#update_contract_btn").click(function() {
  $("#save_contract_btn").show(); //Showing submit_text
  $("#cancel_contract_btn").show(); //Showing submit_text
  $("#update_btn_personal").hide(); //Showing submit_text
  $("#form_details :input").prop('readonly', false); //Making all inputs to disabled
  $('#form_details').find('select').attr('readonly', false);
  
});

$("#cancel_contract_btn").click(function() {
  $("#save_contract_btn").hide(); //Showing submit_text
  $("#cancel_contract_btn").hide(); //Showing submit_text
  $("#update_contract_btn").show(); //Showing submit_text
  $("#form_details :input").prop('readonly', true); //Making all inputs to disabled
  $('#form_details').find('select').attr('readonly',true);
  
});



function printDiv()
    {

        var printTitle = $('#titleprint').val();

        var toPrint = '';
        // if(printTitle !== "") {
        //     toPrint = '<div class="col-md-12"><h4 class="text-center">City Government of Panabo</h4>';
        //     toPrint = toPrint + '<span>Title: ' + printTitle + '</span>';
        //     toPrint = toPrint + '</div>';
        // }
        // else {
        //     toPrint = '<div class="col-md-12"><h4 class="text-center">City Government of Panabo</h4>';
        // }


        var divToPrint=document.getElementById('printarea');
        var newWin=window.open('','Print-Window');
        //newWin.document.open();

        var buildhtml = '';
        buildhtml = '<html><head><link rel="stylesheet" href="AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css"><link rel="stylesheet" href="AdminLTE/dist/css/AdminLTE.min.css">\
        <link rel="stylesheet" href="AdminLTE/dist/css/printable.css">\
        \
        </head><body onload="window.print()">';
        buildhtml = buildhtml + toPrint;
        buildhtml = buildhtml + divToPrint.innerHTML;
        buildhtml = buildhtml + '</body></html>';
        console.log(buildhtml);
        newWin.document.write(buildhtml);

        newWin.document.close();
        setTimeout(function(){
          newWin.close();
        },1000);



    }










</script>