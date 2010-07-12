jQuery("document").ready(function(){
    function show (){
        var classnum=jQuery(".autoscroll");
        jQuery.each(classnum,function(m,n){
            m++;
            jQuery(this).attr("id","c"+m);
        });
        jQuery.get("/redmization/redmine/show.php", null, function(data,textStatus){
            if (textStatus=="success"){
                if (data!=""){
                    jQuery("div[id^='k']").html("");
                    eval('var f='+data);
                    var num;
                    num=f.length;
                    var i;
                    var k=0;
                    for (i=1;i<=num;i++){
                        var div1=jQuery("#"+f[i-1].primary).children();
                        var line=f[i-1].line;
                        var content=f[i-1].content;
                        var username=f[i-1].username;
                        content=username+":"+content;
                        var tr=div1.find("tr:gt(0)");
                        jQuery.each(tr,function(m,n){
                            var th=jQuery(this).find("th");
                            var th1=th.eq(0).text();
                            var th2=th.eq(1).text();
                            var total=th1+","+th2;
                            if (line==total){
                                k++;
                                var div=document.createElement("div");
                                th.parent().find("td").find("td").eq(1).append(div);
                                div.setAttribute("id", "k"+k);
                                div.setAttribute("class", "display1");
                                jQuery("#k"+k).text(content);
                            }
                        });

                    }
                }
            }
        });
    }
    show();
    var str='<table width="100%" border="0" cellspacing="0" cellpadding="0" id="insert"><tr><td style="width:50%;">&nbsp;</td><td style="width:50%;">&nbsp;</td></tr></table>';
    jQuery(".line-num").css("cursor","pointer");
    jQuery.each(jQuery(".line-code"),function(){
       jQuery(this).append(str);
       jQuery(this).children().find("td").eq(0).append(jQuery(this).children("pre").css("display","inline"));
    });
    jQuery(".line-num").bind ("click",function(){
        function insert(){
            var content=jQuery("#contentk").val();
            var username=jQuery("#loggedas").find("a").text();
            if (content==""){
                alert ('\u8bc4论内容不能为空')
            } else {
                jQuery.get("/redmization/redmine/feedback.php",{
                    line:add,
                    primary:primary,
                    content:content,
                    username:username
                },function(data,textStatus){
                    if (textStatus=="success"){
                        jQuery(".display").remove();
                        alert (data);
                        jQuery("#content").val("");
                        show();
                    }
                });
            }
        }
        var line=jQuery(this).text();
        var total=jQuery(this).parent().children('.line-num');
        var add="";
        var file=jQuery(this).parent().parent().parent().children().eq(1).text();
        var primary=jQuery(this).parent().parent().parent().parent().attr("id");
        file=file.replace(/(^\s*)/g,"");
        jQuery.each(total, function(m){
            add+= (jQuery(total).eq(m).text());
            add+=",";
        });
        add=add.substr(0,add.length-1);
        if (line != ""){
            if (jQuery(".display")){
                jQuery(".display").remove();
                var kk=document.createElement("div");
                jQuery(this).parent().find("td").find("td").eq(1).append(kk);
                kk.setAttribute("id", line);
                kk.setAttribute("class", "display");
                jQuery("#"+line).append('<input  type="text"  id="contentk" style="min-height:16px;height:16px;/>');
                jQuery("#"+line).append('<input type="button" value="\u8bc4论" style="heigth:12px;" />');
                jQuery("#"+line).append('<input  type="reset" value="\u53d6消" style="heigth:12px;" />');
                jQuery(":reset").click(function(){
                    jQuery("#"+line).remove();
                });
            } else {
                jQuery(".display").toggle();
            }
            jQuery("#contentk").keypress(function(event){
                var unicode=event.keyCode? event.keyCode : event.charCode;
                if (unicode==13){
                    insert();
                }
            });
            jQuery("*").keypress(function(event){
                var unicode=event.keyCode? event.keyCode : event.charCode;
                if (unicode==27){
                    jQuery("#"+line).remove();
                }
            });
            jQuery(":button").click(function(){
                insert();
            });
        }
    });
});