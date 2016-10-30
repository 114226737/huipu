<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.mobile-1.4.5.min.js"></script>
<!--   <script>
	function check_info(){
		alert("You pressed OK!");
	}
  </script> -->
  <title>资料登记</title>
</head>
<body>
<div data-role="page">
  <div data-role="header">
    <h1>资料登记</h1>
  </div>

  <div data-role="content">
	<form action="#" onsubmit="return validate_form(this)" method="post">
	  <label for="name">姓名：</label>
      <input type="text" name="name" id="name" placeholder="您的全名..">
      <label for="id_no">身份证：</label>
      <input type="text" name="id_no" id="id_no" placeholder="您的身份证号码.."> 
      <label for="mobile">手机号码：</label>
      <input type="text" name="mobile" id="mobile" placeholder="您的手机号码.."> 
      <div style="margin:auto;width:60%">
	    <div style="float:left;width:40%"><input type="submit" data-inline="true" data-icon="check" value="确认提交"></div>
	    <div style="float:right;width:40%"><input type="button" data-inline="true" data-icon="delete" onclick="javascript:document.forms[0].reset();" value="清除内容"></div>
	  </div>
	</form>
  </div>

  <div data-role="footer">
    <h1></h1>
  </div>

  <script>
	function validate_required(field,alerttxt){
	  with (field){
	    if (value==null||value==""){
	      alert(alerttxt);return false}
	    else {return true}
	  }
	}

	function validate_number(field,num,alerttxt){
	  with (field){
	    if (value==null||value==""||value.length!=num){
	      alert(alerttxt);return false}
	    else {return true}
	  }
	}

	function validate_form(thisform){
	  with (thisform){
		if (validate_required(name,"请补全个人资料后提交")==false){
		  name.focus();
		  return false
		}
		if (validate_number(id_no,18,"请填写18位身份证号码")==false){
		  id_no.focus();
		  return false
		}
		if (validate_number(mobile,11,"请填写正确的手机号码")==false){
		  mobile.focus();
		  return false
		}
	  }
	  alert("提交成功！");
	  return true
	}
  </script>
</div> 
</body>
</html>