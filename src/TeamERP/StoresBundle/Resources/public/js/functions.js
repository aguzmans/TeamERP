
$(document).ready(function(){

    //  Categories show hide 
    $("#hide-category").hide();
    $("#category-list").hide();
    $("#show-category").click(function(){
        $("#category-list").show();
        $("#show-category").hide();
        $("#hide-category").show();
    });
    
    $("#hide-category").click(function(){
        $("#category-list").hide();
        $("#show-category").show();
        $("#hide-category").hide();
    });

    // New Measure Unit show Hide.
    $("#measureUnitForm").hide(); 
    
//    var num = -1;
//    $("div#measureUnit select.select option").each(function(){
//        alert('AA');
//        if($(this).val()==num){ 
//            $('#measureUnitForm').show();    
//        }
//    });
});
function change(selThis) {
    if(selThis.options[selThis.selectedIndex].value === "-1"){
        $('#measureUnitForm').show();
    } else {
        $('#measureUnitForm').hide();
    }
}


