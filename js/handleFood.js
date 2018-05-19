$(document).ready(function(){
     $("#food_btn").click(function() {
        if($("#style").val()==="Null"){
            $("#foodDisplay").html("");
            $.ajax({
                type: "GET",
                url : "DisplayFoodName.php",
                dataType: "json",
                data : {"foodName" : $("#fName").val()},
                success : function(data){
                    for(var i = 0; i < data.length; i++){
                        $("#foodDisplay").append("<img style='width:250px;height:300px;' src='" + data[i]['Img'] + "'/><br>");
                        $("#foodDisplay").append("Name: " + data[i]['Name'] + "<br>");
                        $("#foodDisplay").append("Style: " + data[i]['Style'] + "<br>");
                    }
                }
            });
        }
        if($("fName").val().length===0 && $("#style").val()!="Null"){
             $("#foodDisplay").html("");
             $.ajax({
                type : "GET",
                url  : "DisplayFoodStyle.php",            
                dataType : "json",
                data : {"style" : $("#style").val()},            
                success : function(data){
                    for(var i = 0; i < data.length; i++){
                        $("#foodDisplay").append("<img style='width:250px;height:300px;' src='" + data[i]['Img'] + "'/><br>");
                        $("#foodDisplay").append("Name: " + data[i]['Name'] + "<br>");
                        $("#foodDisplay").append("Style: " + data[i]['Style'] + "<br>");
                    }
                },
                complete: function(data,status) { //optional, used for debugging purposes
                //   console.log(data.Team_Name);
                }
    
            });//AJAX
        }
    });
});