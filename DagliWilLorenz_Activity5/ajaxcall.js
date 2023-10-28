function CallPHP(){
    $.ajax({
        url:"testphpcall.php", //the page containing php script
        type: "post", // request type
        dataType: 'json',
        data:{registration: "success", none: "xyz", email: "abc@gmail.com"},
        success:function(result){
            $('@divResult').html(result.abc);
        }
    });
}

function CollectData(){
    let personInfo={
        firstname: $("#txtfname").val(),
        lastname: $("#txtlname").val(),
        age: $("#txtage").val(),
        gender: $("#txtgender").find(":selected").val(),
        civilStatus: $("#txtcstatus").find(":selected").val(),
        primary: $("#txtprimary").val(),
        jhs: $("#txtjhs").val(),
        shs: $("#txtshs").val(),
        tertiary: $("#txttertiary").val(),
    }
    $.ajax({
        url:"testphpcall.php",
        type: "post",
        dataType: 'json',
        data:personInfo,
        success:function(result){
            $('#divResult').html(result.result);
        },
        error:function(error){
            alert(error);
        },
        complete:function(result){
        }
    });
}
