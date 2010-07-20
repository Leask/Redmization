jQuery("document").ready(function(){
    function show (){
        var classnum=jQuery(".autoscroll");
        jQuery.each(classnum,function(m,n){
            m++;
            jQuery(this).attr("id","c"+m);
        });
		url=jQuery("#content").children("h2").text();
        url=url.substr(url.length-18);
        jQuery.post("http://redmization.aysaas.com/code-review-plugin/show.php", {url:url}, function(data,textStatus){
            if (textStatus=="success"){
                if (data!="no"){
                    jQuery("div[id^='k']").html("");
                    eval('var f='+data);
                    var num=f.length;
                    var i;
                    var k=0;
                    for (i=1;i<=num;i++){
                        var div1=jQuery("#"+f[i-1].primary).children();
                        var line=f[i-1].line;
                        var content=f[i-1].content;
                        var username=f[i-1].username;
                        content=username+":"+" "+content;
                        var tr=div1.find("tr:gt(0)");
                        jQuery.each(tr,function(){
                            var th=jQuery(this).find("th");
                            var th1=th.eq(0).text();
                            var th2=th.eq(1).text();
                            var total=th1+","+th2;
                            if (line==total){
                                k++;
                                var str='<table width="100%" border="0" cellspacing="0" cellpadding="0" id="insert"><tr><td style="width:50%;"></td><td style="width:50%;"></td></tr></table>';
                                if (th.parent().find("td").children().is("table")==false){
                                    th.parent().find("td").append(str);
                                    th.parent().find("td").find("td").eq(0).append(th.parent().find("td").children("pre").css("display","inline"));
                                    var kk=true;
                                }
                                var div=document.createElement("div");
                                th.parent().find("td").find("td").eq(1).append(div);
                                div.setAttribute("id", "k"+k);
                                div.setAttribute("class", "display1");
                                if (kk==true){
                                    jQuery("#k"+k).text("*"+content);
                                } else {
                                    jQuery("#k"+k).text(content);
                                }
                                kk=false;
                            }
                        });
                    }
                }
            }
        });
    }
    show(); 
    jQuery(".line-num").css("cursor","pointer");
    jQuery(".line-num").bind ("click",function(){
        function insert(){
            var content=jQuery("#contentk").val();
            var username=jQuery("#loggedas").find("a").text();
            if (content==""){
               
            } else {
		     
                 var kk=jQuery(".filename").text();
                  var urll=location.pathname;
                 var search=location.search;
                  urll+=search;
                  urll="http://testing.aysaas.com"+urll;
                jQuery.post("http://redmization.aysaas.com/code-review-plugin/sendmail.php",{
                    line:add,
                    primary:ab,
                    content:content,
                    username:username,
                    title:urll
                },function(data){
                    alert (data);
                });
                    url=jQuery("#content").children("h2").text();
                  url=url.substr(url.length-18);
                jQuery.post("http://redmization.aysaas.com/code-review-plugin/feedback.php",{
                    line:add,
                    primary:primary,
                    content:content,
                    username:username,
                    url:url
                },function(data,textStatus){
                    if (textStatus=="success"){
                        jQuery(".display").remove();
                        jQuery("#content").val("");
                        if (now.parent().find("td").find("td").eq(1).children().is("div")==true){
                            var div=document.createElement("div");
                            now.parent().find("td").find("td").eq(1).append(div);
                            div.setAttribute("class", "display1");
                            now.parent().find("td").find("td").eq(1).find("div:last").append(username+":"+" "+content);
                        } else {
                            var div=document.createElement("div");
                            now.parent().find("td").find("td").eq(1).append(div);
                            div.setAttribute("class", "display1");
                            now.parent().find("td").find("td").eq(1).find("div:last").append("*"+username+":"+" "+content);
                        }
                    }
                });
            }
        }
        var line=jQuery(this).text();
        var total=jQuery(this).parent().children('.line-num');
        var now=jQuery(this);
        var add="";
        var file=jQuery(this).parent().parent().parent().children().eq(1).text();
        var primary=jQuery(this).parent().parent().parent().parent().attr("id");
        var ab=jQuery(this).parent().parent().parent().parent().children().find("thead").children().text();
        file=file.replace(/(^\s*)/g,"");
        jQuery.each(total, function(m){
            if (jQuery(total).eq(m).text()==""){
                //add+="*";
                add+=",";
            }else{
                 add+= (jQuery(total).eq(m).text());
            add+=",";
            }
        });
        add=add.substr(0,add.length-1);
        if (line != ""){
            if (jQuery(".display")){
                jQuery(".display").remove();
                var kk=document.createElement("div");
                if (jQuery(this).parent().find("td").children().is("table")==false){
                    jQuery(this).parent().find("td").append('<table width="100%" border="0" cellspacing="0" cellpadding="0" id="insert"><tr><td style="width:50%;"></td><td style="width:50%;"></td></tr></table>');
                    jQuery(this).parent().find("td").find("td").eq(1).append(kk);
                } else {
                    jQuery(this).parent().find("td").find("td").eq(1).append(kk);
                }
                jQuery(this).parent().find("td").find("td").eq(0).append(jQuery(this).parent().find("td").children("pre").css("display","inline"));
                kk.setAttribute("id", line);
                kk.setAttribute("class", "display");
                if (jQuery(".home").text()=="Home"){
                    jQuery("#"+line).append('<input  type="text"  id="contentk"  style="min-height:16px;height:16px;"/>');
                    jQuery("#"+line).append('<input type="button" value="Comment" id="#button" disabled="disabled" />');
                    jQuery("#"+line).append('<input  type="reset" value="Cancel"  id="#reset"/>');
                }else{
                    jQuery("#"+line).append('<input  type="text"  id="contentk"  style="min-height:16px;height:16px;"/>');
                    jQuery("#"+line).append('<input type="button" value="评论" id="#button" disabled="disabled" />');
                    jQuery("#"+line).append('<input  type="reset" value="取消"  id="#reset"/>');
                }
                jQuery("#contentk").focus();
                jQuery(":reset").click(function(){
                    jQuery("#"+line).remove();
                });
            } else {
                jQuery(".display").toggle();
            }
            jQuery("#contentk").keypress(function(event){
                jQuery(":button").removeAttr("disabled");
                if (jQuery("#contentk").val().length==0){
                    jQuery(":button").attr("disabled","disabled");
                }
                var unicode=event.keyCode ? event.keyCode : event.charCode;
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