<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<input type="text" onkeydown="return disableCtrlKeyCombination(event);" onkeypress="return disableCtrlKeyCombination(event);" onpaste="return false" oncopy="return false" onblur="disableautocompletion(this.id);" onfocus="disableautocompletion(this.id);getFocus(this.id);" maxlength="20" size="20" tabindex="1" id="username" name="userName" autocomplete="off">
</body>
</html>