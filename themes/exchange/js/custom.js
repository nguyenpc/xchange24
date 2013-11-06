/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(e) {
    
    var content =document.getElementById('content');
    var slwant= document.getElementById("select-want");
    var slhave= document.getElementById("select-have");
    var loading= document.getElementById("loading");
    $('#select-have').change(function() {
   $("#loading").show();
        var n = $(this).val();
       $( "option" ).remove("#n"+2);
       alert(document.getElementById("select-want").val());
    });
    
});

