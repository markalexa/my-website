function messageSent() {
    	var myCanvas = document.getElementById("fadingCanvas");
    	var context = myCanvas.getContext("2d");
    	
    	context.moveTo(80,80);
    	context.lineTo(340,80);
    	context.lineWidth = 2;
    	context.strokeStyle = "#21a527";
    	context.stroke();
    	context.beginPath();
    	context.arc(340,120,40,-1.6,0.5*Math.PI);
    	context.strokeStyle = "#21a527";
    	context.stroke();
    	context.moveTo(340,160);
    	context.lineTo(85,160);
    	context.strokeStyle = "#21a527";
    	context.stroke();
    	context.moveTo(80,80);
    	context.lineTo(40,50);
    	context.strokeStyle = "#21a527";
    	context.stroke();
    	context.moveTo(40,50);
    	context.lineTo(49,95);
    	context.strokeStyle = "#21a527";
    	context.stroke();
    	context.beginPath();
    	context.arc(80,120,40,1.4,1.23*Math.PI);
    	context.strokeStyle = "#21a527";
    	context.stroke();
    	context.fillStyle = "#21a527";
    	context.font = "15px Verdana";
    	context.strokeText("Great ! Message has been sent.",80,110);
    	context.strokeText("I'll get back to you as soon as I can.",80,130);
    	context.strokeText("Have a good one !",80,150);
    	$("#fadingCanvas").delay(5000).fadeOut(10000);
    	}
    	
