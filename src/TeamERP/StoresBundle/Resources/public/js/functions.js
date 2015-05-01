
$(function(){
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
        $("#show-product-list").hide();
    });
    
    //add row
    $("#add-product-row").click(function(){
        makeTableRows(document.getElementById("row-number").value);
    });
    //remove row
    $("#del-product-row").click(function(){
        destryTableRow(document.getElementById("row-number").value);
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
function makeTableRows(rowValue){
        // Find a <table> element with id="myTable":row-number
        var table = document.getElementById("products-table");
        // Create an empty <tr> element and add it to the 1st position of the table:
        rowValue++;
        document.getElementById("row-number").value = rowValue;
        var row = table.insertRow(rowValue);
        
        // Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
        var cell0 = row.insertCell(0);
        var cell1 = row.insertCell(1);
        var cell2 = row.insertCell(2);
        var cell3 = row.insertCell(3);
        var cell4 = row.insertCell(4);
        // Add some text to the new cells:
        cell0.innerHTML = "<input type='text' placeholder='Product autocomplete' id='item"+rowValue+"'>";
        cell1.innerHTML = "<input type='text' placeholder='A number' id='quantity"+rowValue+"'>";
        cell2.innerHTML = "From DB";
        cell3.innerHTML = "<input type='text' placeholder='35P' id='costUnit"+rowValue+"'>";
        cell4.innerHTML = "<input type='text' placeholder='Quantity * Cost' id='costT"+rowValue+"'>";
        document.getElementById("item"+rowValue).className = 'form-control';
        document.getElementById("quantity"+rowValue).className = 'form-control';
        document.getElementById("costUnit"+rowValue).className = 'form-control';
        document.getElementById("costT"+rowValue).className = 'form-control';
}
function destryTableRow (rowValue){
    var table = document.getElementById("products-table");
    rowValue--;
    document.getElementById("row-number").value = rowValue;
    table.deleteRow(rowValue);
}

