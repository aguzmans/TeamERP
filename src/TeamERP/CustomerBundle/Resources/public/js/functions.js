/* 
 * This function enables the Not a company check Box to how the 
 * field for a compant name
 */

$(document).ready(function(){    
    $('#CompanyName').show();    
    $('#customer_typeContact').change(function() {
        var $this = $(this);
        // $this will contain a reference to the checkbox 
        //alert($('#customer_typeContact option:selected').text());
        if ($('#customer_typeContact option:selected').text() !== 'Company') {
            $('#CompanyName').hide();
            $('#customer_company').val('');
        } else {
            $('#CompanyName').show();
        }
    });

    $(function() {
                $( "#customer_company" ).autocomplete({
                    source: data
        });
    });
});
