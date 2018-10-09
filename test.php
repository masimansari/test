<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Test PDO</title>
</head>

<body>

<?php

if (isset($_REQUEST['cmdSubmit']))
{
	$db = new DB();
	
	$txtId = (int)$_REQUEST['txtId'];
	$txtName = $_REQUEST['txtName'];
	$txtClass = $_REQUEST['txtClass'];
	$txtUserName = $_REQUEST['txtUserName'];
	$txtPassword = $_REQUEST['txtPassword'];
	
	if ( $txtId == 0 )
	{
		$db->Insert($txtName, $txtClass, $txtUserName, $txtPassword);
	}
	else
	{
		$db->Update($txtId, $txtName, $txtClass, $txtUserName, $txtPassword);
	}
	
}

if (isset($_REQUEST['cmdDelete']))
{
	$db = new DB();
	
	$txtId = (int)$_REQUEST['txtId'];
	
	if ( $txtId == 0 )
	{
		$db->Delete($txtId);
	}
	
}

?>

<form method="post" action="index.php">
	
    <table>
    	<tr>
        	<td><label>Id</label></td><td><input type="text" id="txtId" name="txtId" value="<?php echo $_REQUEST['txtId']; ?>"/><input type="button" id="cmdGetRecord" name="cmdGetRecord" value="Get"/></td>
        </tr>
        <tr>
        	<td><label>Name</label></td><td><input type="text" id="txtName" name="txtName" value="<?php echo $_REQUEST['txtName']; ?>" /></td>
        </tr>
        <tr>
        	<td><label>Class</label></td><td><input type="text" id="txtClass" name="txtClass" value="<?php echo $_REQUEST['txtClass']; ?>" /></td>
        </tr>
        
        <tr>
        	<td><label>User Name: </label></td><td><input type="text" id="txtUserName" name="txtUserName" value="<?php echo $_REQUEST['txtUserName']; ?>" /></td>
        </tr>
        <tr>
        	<td><label>Password: </label></td><td><input type="text" id="txtPassword" name="txtPassword" value="<?php echo $_REQUEST['txtPassword']; ?>" /></td>
        </tr>
        <tr>
        	<td></td><td><input type="button" id="cmdSubmit" name="cmdSubmit" value="Save"/><input type="button" id="cmdDelete" name="cmdDelete" value="Delete"/></td>
        </tr>
    
    
    </table>
</form>

</body>
</html>