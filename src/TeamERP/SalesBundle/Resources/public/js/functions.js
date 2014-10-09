/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
$('#MobileForm').hide();    
$('#PrefabForm').hide(); 
$('#TransportForm').hide(); 
$('#UnitGenerals').hide(); // General from units; prefabs and Mobiles
$('#MobileUnitsCheckbox').change(function() {
    var $this = $(this);
    // $this will contain a reference to the checkbox   
    if ($this.is(':checked')) {
        $('#MobileForm').show();
        $('#UnitGenerals').show();
    } else {
        $('#MobileForm').hide();
        if ($('#PrefabStructureCheckbox').is(':checked')) {
           //.. Do nothing
        } else {
            $('#UnitGenerals').hide();
        }
    }
});
$('#PrefabStructureCheckbox').change(function() {
    var $this = $(this);
    // $this will contain a reference to the checkbox   
    if ($this.is(':checked')) {
        $('#PrefabForm').show();
        $('#UnitGenerals').show();
    } else {
        $('#PrefabForm').hide();
        if ($('#MobileUnitsCheckbox').is(':checked')) {
           //.. Do nothing
        } else {
            $('#UnitGenerals').hide();
        }
    }
});
$('#TransportCheckbox').change(function() {
    var $this = $(this);
    // $this will contain a reference to the checkbox   
    if ($this.is(':checked')) {
        $('#TransportForm').show();
    } else {
        $('#TransportForm').hide();
    }
});
});

