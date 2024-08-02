$(document).ready(function(){
    $("#btnadd").click(function(e){
        e.preventDefault();
        // console.log("ADD CITY Button Click");
        var cityname =$("#cityname").val();
        // console.log(name);
         
        $.ajax({
            url:'insertcity.php',
            type: 'POST',
            data: {cityname:cityname},
            success:function(data,status){
                // console.log(data);
            }
        });
    });
});
// function adduser(){
//     var name = $('#cityname').val();
//     $.ajax({
//         url:"insertcity",
//         type:'post',
//         data:{'namesend':name},
//         success: function(data,status){
//             //function to display
//         }
//     });
// }
//  