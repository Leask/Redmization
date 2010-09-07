jQuery("document").ready(function(){
    var location_url=location.href;
    var patt=new RegExp("repository");
    var last=patt.test(location_url);
    var maoHao = false;
    var newUrl ='';
    last = true;
    if (last) {
        function show (){
            var classnum=jQuery(".autoscroll");
            jQuery.each(classnum,function(m,n){
                m++;
                jQuery(this).attr("id","c"+m);
            });
            url=jQuery("#content").children("h2").text();
            url = url.replace(/(\s)/g,"");
            if (url.indexOf('@') != -1) {
                jQuery.each (jQuery("#content").children("h2").children(),function(){
                    newUrl = newUrl + jQuery(this).text();
                });
            } else {
                newUrl=url.substr(2);
                if (url.indexOf(':') != -1) {
                    maoHao = true;
                } else {
                    maoHao = false;
                }
            }
            url = newUrl;
            jQuery.post("/projects/redmization/code-review-plugin/show.php", {
                url:url
            }, function(data,textStatus){
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
                            content=username+"\uff1a"+content;
                            var tr=div1.find("tr");
                            jQuery.each(tr,function(){
                                var th=jQuery(this).find("th");
                                var th1=th.eq(0).text();
                                var th2=th.eq(1).text();
                                if (maoHao) {
                                    var total=th1+","+th2;
                                } else {
                                    var total=th1 + th2;
                                }
                                if (line==total){
                                    k++;
                                    var str='<table width="100%" border="0" cellspacing="0" cellpadding="0" id="insert"><tr><td style="width:50%;vertical-align:top;"></td><td style="width:50%;"></td></tr></table>';
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
                                        jQuery("#k"+k).css("padding-left","8px");
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
                    url=jQuery("#content").children("h2").text();
                    url = url.replace(/(\s)/g,"");
                    newUrl = '';
                    if (url.indexOf('@') != -1) {
                        jQuery.each (jQuery("#content").children("h2").children(),function(){
                            newUrl = newUrl + jQuery(this).text();
                        });
                    } else {
                        newUrl=url.substr(2);
                    }
                    url = newUrl;
                    jQuery.post("/projects/redmization/code-review-plugin/feedback.php",{
                        line:add,
                        primary:primary,
                        content:content,
                        username:username,
                        url:url
                    },function(data,textStatus){
                        if (textStatus=="success"){
                            content = content.replace (/</g,'&lt;');
                            content = content.replace (/>/g,'&gt;')
                            jQuery(".display").remove();
                            jQuery("#content").val("");
                            if (now.parent().find("td").find("td").eq(1).children().is("div")==true){
                                var div=document.createElement("div");
                                now.parent().find("td").find("td").eq(1).append(div);
                                div.setAttribute("class", "display1");
                                now.parent().find("td").find("td").eq(1).find("div:last").append(username+"\uff1a"+content);
                                now.parent().find("td").find("td").eq(1).find("div:last").css("padding-left","8px");
                            } else {
                                var div=document.createElement("div");
                                now.parent().find("td").find("td").eq(1).append(div);
                                div.setAttribute("class", "display1");
                                now.parent().find("td").find("td").eq(1).find("div:last").append("*"+username+"\uff1a"+content);
                            }
                        }
                    });

                    //发送邮件



                    var urll=location.pathname;
                    var search=location.search;
                    urll+=search;
                    urll="http://testing.aysaas.com"+urll;
                    jQuery.post("/projects/redmization/code-review-plugin/sendmail.php",{
                        line:add,
                        primary:ab,
                        content:content,
                        username:username,
                        title:urll,
                        file:currentUrl
                    },function(data){
                        //alert (data);
                        });
                }
            }
            var line=jQuery(this).text();
            var total=jQuery(this).parent().children('.line-num');
            var now=jQuery(this);
            var currentUrl = jQuery(this).parent().parent().prev().find(".filename").text();
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
                        jQuery(this).parent().find("td").append('<table width="100%" border="0" cellspacing="0" cellpadding="0" id="insert"><tr><td style="width:50%;vertical-align: top;"></td><td style="width:50%;"></td></tr></table>');
                        jQuery(this).parent().find("td").find("td").eq(1).append(kk);
                    } else {
                        jQuery(this).parent().find("td").find("td").eq(1).append(kk);
                    }
                    jQuery(this).parent().find("td").find("td").eq(0).append(jQuery(this).parent().find("td").children("pre").css("display","inline"));
                    kk.setAttribute("id", line);
                    kk.setAttribute("class", "display");
                    if (jQuery(".home").text()=="Home"){
                        jQuery("#"+line).append('<textarea name="contentk" cols="25" rows="4" id="contentk"  style="min-height:40px;height:40px;padding:0px; margin:0px;"></textarea>');
                        jQuery("#"+line).append('<br><br>');
                        jQuery("#"+line).append('&nbsp;&nbsp;&nbsp;<input type="button" value="Comment" id="#button" disabled="disabled" />');
                        jQuery("#"+line).append('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  type="reset" value="Cancel"  id="#reset"/>');
                    }else{
                        jQuery("#"+line).append('<textarea name="contentk" cols="25" rows="4" id="contentk"  style="min-height:40px;height:40px;padding:0px; margin:0px;"></textarea>');
                        jQuery("#"+line).append('<br><br>');
                        jQuery("#"+line).append('&nbsp;&nbsp;&nbsp;<input type="button" value="评论" id="#button" disabled="disabled" />');
                        jQuery("#"+line).append('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  type="reset" value="取消"  id="#reset"/>');
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
                    if (jQuery("#contentk").val()==undefined){
                        jQuery(":button").attr("disabled","disabled");
                    }
                    var unicode=event.keyCode ? event.keyCode : event.charCode;
                    if (unicode==13){
                        insert();
                    }
                });
                function handle()
                {
                    jQuery(":button").removeAttr("disabled");
                    if ((jQuery("#contentk").val==undefined)||(jQuery("#contentk").val().length==0)){
                        jQuery(":button").attr("disabled","disabled");
                    }
                }
                var objTextarea=document.getElementById("contentk");
                if (document.all){
                    objTextarea.onpropertychange=handle;
                }else{
                    objTextarea.addEventListener("input",handle,false);
                }
                /**
				jQuery("#contentk").click(function(){
				    if (jQuery("#contentk").val().length>=0){
					    jQuery(":button").attr("disabled","disabled");
					}
				});
				*/
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
    }
});