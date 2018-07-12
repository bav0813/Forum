//--------------------------Livesearch-----------------------------
function showResult(str) {
    if (str.length==0) {
        document.getElementById("livesearch").innerHTML="";
        document.getElementById("livesearch").style.border="0px";
        return;
    }
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else {  // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            document.getElementById("livesearch").innerHTML=this.responseText;
            document.getElementById("livesearch").style.border="1px solid #A5ACB2";
        }
    }
    xmlhttp.open("GET","/livesearch/"+str,true);
    xmlhttp.send();
}


$(function () {
    $("input[id^='isactiveuser']").click(function(){


        $.ajax({
            type: "POST",
            url: "/admin/dashboard/users/"+this.name+'/'+Number(this.checked), //Change
            data: {
                "_token": $('#token').val() },
            //success:alert("done")
        })
    });
});


$(function () {
    $("input[id^='isactivecomment']").click(function(){

        $.ajax({
            type: "POST",
            url: "/admin/dashboard/comments/"+this.name+'/'+Number(this.checked), //Change
            data: {
                "_token": $('#token').val() },
            //success:alert("done")
        })
    });
});


$(function () {
    $(".editcomm").click(function () {
        comment_id = this.id;
        tmp_id="body_comment_" + comment_id;
        comment = document.getElementById(tmp_id).innerText;
        //  alert(comment);
        $("#myModalcomment").modal('show');
        $("#comments").val(comment);

        $("#admin_btn_save_comment").click(function () {
            comment_new=$("#comments").val();
            $.ajax({
                type: "POST",
                url: "/admin/dashboard/comments/edit/" + comment_id + '/' + $("#comments").val(), //Change
                data: {
                    "_token": $('#token').val()
                },
                success: $("#myModalcomment").modal('hide'),

            });
            document.getElementById(tmp_id).innerText=comment_new;

        });
    });
});


$(function () {
    $(".deletecomm").click(function () {
        comment_id = this.id;
        tmp_id="body_comment_" + comment_id;
        comment = document.getElementById(tmp_id).innerText;
        //  alert(comment);
        $("#myModaldelete").modal('show');
        $("#comment1").val(comment);

        $("#admin_btn_delete_comment").click(function () {
            $.ajax({
                type: "POST",
                url: "/admin/dashboard/comments/delete/" + comment_id,
                data: {
                    "_token": $('#token').val()
                },
                success: $("#myModalcomment").modal('hide'),



        });
            location.reload();

        });
    });
});


$(function () {
    $("input[id^='isactivecategory']").click(function(){

        $.ajax({
            type: "POST",
            url: "/admin/dashboard/category/"+this.name+'/'+Number(this.checked), //Change
            data: {
                "_token": $('#token').val() },
            //success:alert("done")
        })
    });
});