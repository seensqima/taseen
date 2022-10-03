<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{background: #23242a;}
        .box {
            position: absolute;
            width: 380px;            
            height: 420px;         
            border-radius: 10px;
            z-index: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            top: calc(50% - 240px);
            left: calc(50% - 210px);
        }
        .box::before 
{
	content: '';
	z-index: 2;
	position: absolute;
	top: -50%;
	left: -50%;
	width: 380px;
	height: 420px;
	transform-origin: bottom right;
	background: linear-gradient(0deg,transparent,#45ffc1,#ffffff);
	animation: animate 3s linear infinite;
}

.box::after {
	content: '';
	z-index: 2;
	position: absolute;
	top: -50%;
	left: -50%;
	width: 380px;
	height: 420px;
	transform-origin: bottom right;
	background: linear-gradient(0deg,transparent,#ff455e,#ffffff);
	animation: animate 3s linear infinite;
	animation-delay: -1.5s;
}


@keyframes animate 
{
	0%
	{
		transform: rotate(0deg);
	}
	100%
	{
		transform: rotate(360deg);
	}
}


.plate{
    background-color: #23242a;
    z-index: 20;
    width: 370px;            
    height: 410px;
    position: absolute;
    border-radius: 10px;
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.336);
}

    </style>
</head>
<body>
    <div class="box">
        <div class="plate"></div>
    </div>
    
</body>
</html>