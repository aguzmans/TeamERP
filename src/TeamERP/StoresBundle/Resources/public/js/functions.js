
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
    // Product of the invoice 
    // add products
    $("#productInvoiced").hide();
    $("#show-product-list").click(function(){
        $("#productInvoiced").show();
    });
    
    // New Measure Unit show Hide.
    $("#measureUnitForm").hide();
});
// New Mesure Unit select New Unit On Change.
function change(selThis) {
    if(selThis.options[selThis.selectedIndex].value === "-1"){
        $('#measureUnitForm').show();
    } else {
        $('#measureUnitForm').hide();
    }
}

function clickDelete(selThis){
    confirm("Are you sure you want to delete XXXX ");
}

