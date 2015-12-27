var btn = document.getElementById('btn');
btn.addEventListener('click', cal, false);
console.log(btn);

function cal(){
	var nums = document.getElementsByClassName('inputBox');//获取文本框
	console.log(nums);
	var op = document.getElementById('op');//获取算数符号
	var date = 	"num1=" + nums[0].value
				+"&num2=" + nums[1].value
				+"&op=" + op.value
				+"&num3=" + nums[2].value
				+"&num4=" + nums[3].value;

	console.log(date);
	var request = new XMLHttpRequest();
	request.open("POST","./cal.php");
	request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	request.send(date);
	request.onreadystatechange = function(){
		if(request.readyState == 4){
			if(request.status == 200){
				document.getElementById('outputBox').value = request.responseText;
			}else{
				alert("错误代码：" + request.status);
			}
		}			
	}

}
