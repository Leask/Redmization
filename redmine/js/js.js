$("document").ready(function(){
    function show (){
        var classnum=$(".autoscroll");
        $.each(classnum,function(m,n){
            m++;
            $(this).attr("id","c"+m);
        });
        $.get("show.php", null, function(data,textStatus){
            if (textStatus=="success"){
                if (data!=""){
                 $("div[id^='k']").html("");
                eval('var f='+data);
                var num;
                num=f.length;
                var i;
                var k=0;
                for (i=1;i<=num;i++){
                    var div1=$("#"+f[i-1].primary).children();
                    var line=f[i-1].line;
                    var content=f[i-1].content;
                    var username=f[i-1].username;
                    content=username+":"+content;
                    var tr=div1.find("tr:gt(0)");
                    $.each(tr,function(m,n){
                        var th=$(this).find("th");
                        var th1=th.eq(0).text();
                        var th2=th.eq(1).text();
                        var total=th1+","+th2;
                        if (line==total){
                            k++;
                            var div=document.createElement("div");
                            th.parent().after(div);
                            div.setAttribute("id", "k"+k);
                            $("#k"+k).text(content);
                        }
                    });
                    
                }
 }


            }



        });
    }

    show();
    $(".line-num").css("cursor","pointer");
    $(".line-num").bind ("click",function(){
            function insert(){
                var content=$("#content").val();
                var username=$("#loggedas").find("a").text();
                if (content==""){
                    alert ('\u8bc4论内容不能为空')
                } else {
                    $.get("feedback.php",{line:add,primary:primary,content:content,username:username},function(data,textStatus){
                        if (textStatus=="success"){
                            $(".display").remove();
                            alert (data);
                            $("#content").val("");
                            show();
                        }
                    });
                }
    }
        var line=$(this).text();
        var total=$(this).parent().children('.line-num');
        var add="";
        var file=$(this).parent().parent().parent().children().eq(1).text();
        var primary=$(this).parent().parent().parent().parent().attr("id");
        file=file.replace(/(^\s*)/g,"");
        $.each(total, function(m){
            add+= ($(total).eq(m).text());
            add+=",";
        });
        add=add.substr(0,add.length-1);
        /**
        var content_div=document.createElement("div");
        $(this).parent().append(content_div);
        content_div.setAttribute("id", add);
        */
        if (line != ""){
           if ($(".display")){
               $(".display").remove();
            var kk=document.createElement("div");
            $(this).parent().append(kk);
            kk.setAttribute("id", line);
            kk.setAttribute("class", "display");
            $("#"+line).append('<input  type="text"  id="content"/>');
            $("#"+line).append(' <input type="button" value="\u8bc4论" />');
            $("#"+line).append(' <input  type="reset" value="\u53d6消" />');
            $(":reset").click(function(){
                $("#"+line).remove();
            });
            } else {
                $(".display").toggle();
            }
            $("#content").keypress(function(event){
                var unicode=event.keyCode? event.keyCode : event.charCode;
                if (unicode==13){
                    insert();
                }
           });
            $("*").keypress(function(event){
                var unicode=event.keyCode? event.keyCode : event.charCode;
                if (unicode==27){
                    $("#"+line).remove();
                }
           });
            $(":button").click(function(){
                insert();
            });
        }
    });
});