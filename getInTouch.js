
    	var myCanvas = document.getElementById("non-fadingCanvas");
    	var context = myCanvas.getContext("2d");
    	
    	context.moveTo(80,80);
    	context.lineTo(340,80);
    	context.lineWidth = 2;
    	context.strokeStyle = "black";
    	context.stroke();
    	context.beginPath();
    	context.arc(340,120,40,-1.6,0.5*Math.PI);
    	context.strokeStyle = "black";
    	context.stroke();
    	context.moveTo(340,160);
    	context.lineTo(85,160);
    	context.strokeStyle = "black";
    	context.stroke();
    	context.moveTo(80,80);
    	context.lineTo(0,70);
    	context.strokeStyle = "black";
    	context.stroke();
    	context.moveTo(0,70);
    	context.lineTo(49,95);
    	context.strokeStyle = "black";
    	context.stroke();
    	context.beginPath();
    	context.arc(80,120,40,1.4,1.2*Math.PI);
    	context.strokeStyle = "black";
    	context.stroke();
    	context.fillStyle = "black";
    	context.font = "23px Verdana";
    	context.strokeText("Let's get in touch !",120,130);
    	
 

    
   	