function show_error_notification(container,message){
	create_notification(message,"red",container);
}

function show_info_notification(container,message){
	create_notification(message,"yellow",container);
}

function create_notification(message,color,container){
	var position_top=$(container).position().top + 5 + "px";
	var width = 400;
	var height = "30px";
	var position_left = (($(container).width()/2) - (width/2)) + "px";
	width += "px";
	var text = message;
	var sticky = "<div id='sticky-edy' style='display:none;text-align:center'>" + text + "</div>";
	$(container).append(sticky);
	$("#sticky-edy").css("position","absolute");
	$("#sticky-edy").css("margin","0 auto");
	$("#sticky-edy").css("top",position_top);
	$("#sticky-edy").css("left",position_left);
	$("#sticky-edy").css("width",width);
	$("#sticky-edy").css("height",height);
	$("#sticky-edy").css("background",color);
	$("#sticky-edy").css("border-radius","5px");
	$("#sticky-edy").css("font-size","14pt");
	$("#sticky-edy").css("font-weigth","bold");
	$("#sticky-edy").css("color","#FFFFFF");
	$("#sticky-edy").css("box-shadow","0px 0px 5px #333333");
	$("#sticky-edy").css("padding","4px 0px 0px 4px");
	$("#sticky-edy").show("shake",{},500,function(){
		setTimeout(function(){
			$("#sticky-edy").fadeOut("slow",function(){
				setTimeout(function(){
					$("#sticky-edy").remove();
				},1)
			});
		},2000);
	});
}

function send_ajax(url,params,smessage,emessage,fsuccess,ferror){
	$.ajax({
		type:"POST",
		url:"static/php/" + url + ".php",
		data:params,
		success:function(){
			if(fsuccess){
				fsuccess();
			}
		},
		error:function(){
			if(ferror){
				ferror();
			}
		}
	});
}

function set_sid(name,label){
	name = name.substr(2);
	send_ajax("ajax_change_school_id",{sid:name,slabel:label},null,null,switch_to_school,null);
}

function set_lid(name,label){
	name = name.substr(2);
	send_ajax("ajax_change_lab_id",{lid:name,llabel:label},null,null,switch_to_lab,null);
}

function switch_to(name){
	window.location.href = name + ".php";
}

function switch_to_school(){
	switch_to("school");
}

function switch_to_lab(){
	switch_to("lab");
}

function add_new_school(){
	switch_to("add_school");
}