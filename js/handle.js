$(document).ready(function(){
    $("#enter_btn").click(function(){
        if($("#country").val()==="Null"){
            // Ajax 
            $("#display").html("");
            $.ajax({
                type: "GET",
                url : "DisplaybyName.php",
                dataType: "json",
                data : {"drinkName" : $("#pName").val()},
                success : function(data){
                    for(var i = 0; i < data.length; i++){
                        $("#display").append("<img style='width:250px;height:300px;' src='" + data[i]['Image'] + "'/><br>");
                        $("#display").append("Name: " + data[i]['Name'] + "<br>");
                        $("#display").append("Origin: " + data[i]['Origin'] + "<br>");
                        $("#display").append("Complexity: " + data[i]['Complexity'] + "<br>");
                        $("#display").append("Ingredients: " + data[i]['Ingredients'] + "<br>");
                    }
                }
            });
        }
       if($("#pName").val().length===0 && $("#country").val()!="Null"){
         $("#display").html("");
         $.ajax({
            type : "GET",
            url  : "display_drinks.php",            
            dataType : "json",
            data : {"country" : $("#country").val()},            
            success : function(data){
                for(var i = 0; i < data.length; i++){
                    $("#display").append("<img style='width:250px;height:300px;' src='" + data[i]['Image'] + "'/><br>");
                    $("#display").append("Name: " + data[i]['Name'] + "<br>");
                    $("#display").append("Origin: " + data[i]['Origin'] + "<br>");
                    $("#display").append("Complexity: " + data[i]['Complexity'] + "<br>");
                    $("#display").append("Ingredients: " + data[i]['Ingredients'] + "<br>");
                }
            },
            complete: function(data,status) { //optional, used for debugging purposes
            //   console.log(data.Team_Name);
            }

        });//AJAX
        }
        
        if($("#complex").val()!="Null" && $("#pName").val().length===0 && $("#country").val()==="Null"){
            $("#display").html("");
            $.ajax({
                type : "GET",
                url : "display_Difficulty.php",
                dataType : "json",
                data : {"complex" : $("#complex").val()},
                success : function(data){
                    for(var i = 0; i < data.length; i++){
                        $("#display").append("<img style='width:250px;height:300px;' src='" + data[i]['Image'] + "'/><br>");
                        $("#display").append("Name: " + data[i]['Name'] + "<br>");
                        $("#display").append("Origin: " + data[i]['Origin'] + "<br>");
                        $("#display").append("Complexity: " + data[i]['Complexity'] + "<br>");
                        $("#display").append("Ingredients: " + data[i]['Ingredients'] + "<br>");
                    }
                },
                complete: function(data,status) { //optional, used for debugging purposes
                //   console.log(data.Team_Name);
                }
            });
        }
        
    });
    
});


