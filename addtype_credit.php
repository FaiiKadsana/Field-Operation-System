<?php
//include ("checklogin.php");
session_start();
include ("phpconfig.php");
Conn2DB();

if ($_SERVER[REQUEST_METHOD] == "POST"){
			 if ($_POST[action]=="edit2")
			 {
				$sql = "update type_credit set  type_credit='$type_credit' 
				 where id_type_credit ='$id_type_credit' ;";
				mysql_query($sql);
				if (mysql_errno())
				{
					$msg = "Cannot update parameter information.";
				}
				else
				{
					header("Location: ?id=$id&action=edit&refreshpage=1");
					exit;
				}
			}else
				{
				$sql = "INSERT INTO  type_credit (id_type_credit,type_credit)	VALUES ('$id_type_credit','$type_credit')";
					$result  = mysql_query($sql);
					if($result)
					{
						header("Location: ?id=$id&action=edit&refreshpage=1");
						exit;
					}else
					{	echo "�������ö�ѹ�֡�������� ";}
				}
}else if ($_GET[action] == 'delete')
	{
		mysql_query("delete from type_credit where id_type_credit = $id_type_credit ");
		if (mysql_errno())
			{
			$msg = "Cannot delete parameter.";
			}else
			{
			header("Location: ?runid=$runid&action=edit&refreshpage=1");
			exit;
			}
	
}else
		{		
	 	$sql = "select * from  type_credit   ;";
		$result = mysql_query($sql);
		if ($result){
		$rs=mysql_fetch_array($result,MYSQL_ASSOC);
		} else {
		$msg = "Cannot find parameter information.";
		echo $msg;
		}
}
		?>
<html>
<head>
<title>�ѵ��ôԵ</title>
<meta http-equiv="Content-Type" content="text/html; charset=tis-620">
<link href="cost.css" type="text/css" rel="stylesheet">
<style type="text/css">
<!--
body {  margin: 0px  0px; padding: 0px  0px}
a:link { color: #005CA2; text-decoration: none}
a:visited { color: #005CA2; text-decoration: none}
a:active { color: #0099FF; text-decoration: underline}
a:hover { color: #0099FF; text-decoration: underline}
-->
</style>

<?
//refresh openner
if ($refreshpage){
?>	
<SCRIPT LANGUAGE="JavaScript">
<!--
opener.document.forms[0].submit();
//-->
</SCRIPT>

<?
}
?>
</head>

<body >
<?php
include("header_cost.php"); // �������� 
?>
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top" background="bimg/bg1.gif" style="background-repeat: no-repeat; background-position:right bottom "><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="60" bgcolor="#2C2C9E"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="15%">&nbsp;</td>
              <td width="85%"><B class="pheader">
                <?=($rs[runid]!=0?"���":"����")?>�������ѵ��ôԵ</B></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <?
	
 if ($_GET[action]!="edit2")
 {
?>
        <td valign="top" ><p>&nbsp;</p>
            <table width="80%" border="0" cellspacing="1" cellpadding="2" align="center" bgcolor="black">
              <tr bgcolor="#A3B2CC">
                <td width="15%"><div align="center"><b>�ӴѺ</b></div></td>
                <td width="40%"><div align="center"><strong>�������ѵ��ôԵ</strong></div></td>
                <td><div align="center"><strong>����ͧ���</strong></div></td>
              </tr>
              <?php
		$i = 0;
		$no=0;
		$max=0;
		$result = mysql_query("select * from type_credit order by id_type_credit;");
		while ($rs=mysql_fetch_array($result,MYSQL_ASSOC)) 
		{		
			$i++;
			$no++;
			if ($rs[id_type_credit] > $max) $max=$rs[id_type_credit];
			
			if ($i % 2) {
				$bg="#FFFFFF";
			}else{
				$bg="#F0F0F0";
			}
		?>
              <tr bgcolor="<?=$bg?>">
                <td width="15%" align="center"><?=$no?>
                </td>
                <td width="50%">&nbsp
                  <?=$rs[type_credit]?>
                </td>
                <td  align="center"><input class="xbutton" style="width: 70;" type="button" value="Edit" onClick="location.href='?id_type_credit=<?=$rs[id_type_credit]?>&action=edit2';" name="button2">
                    <input class="xbutton"  style="width: 70;" type="button" value="Delete" onClick="if (confirm('�س�зӡ��ź��������ǹ�����������!!')) location.href='?action=delete&id_type_credit=<?=$rs[id_type_credit]?>';" name="button">
                </td>
              </tr>
              <?
		}
		?>
            </table>
          <?
}
else if ($_GET[action]=="edit2")
{
		$sql = "select * from type_credit where id_type_credit='$id_type_credit'  ;";
		$result = mysql_query($sql);
		if ($result)
		{
		$rs=mysql_fetch_array($result,MYSQL_ASSOC);
		}


}
?>
            <form  method = POST  action = "<?  echo $PHP_SELF ; ?>" >
              <INPUT TYPE="hidden" NAME="id_type_credit" VALUE="<?=$id_type_credit?>">
              <INPUT TYPE="hidden" NAME="action" VALUE="<?=$_GET[action]?>">
              <table width="80%" border="0" cellspacing="1" cellpadding="2" align="center">
                <tr>
                  <td colspan=3 align="left" valign="top" bgcolor="#888888"><B class="gcaption">
                    <?=($rs[id_type_credit]!=0?"���":"����")?>
                    �������ѵ��ôԵ</B></td>
                </tr>
                <tr>
                  <td align="right" valign="middle" width="20%">�������ѵ��ôԵ</td>
                  <td align="left" valign="top" width="60%"><input name="type_credit" type="text" class="input_text" id="type_credit" value="<?=$rs[type_credit]?>" size="50">
                  </td>
                </tr>
                <tr>
                  <td align="right" valign="top" width="20%">&nbsp;</td>
                  <td align="left" valign="top" width="60%"><input type="submit" name="Submit" value=" �ѹ�֡ ">
                      <input type="reset" name="Submit2" value="Reset">
                      <input type="reset" name="Submit3" value="¡��ԡ" ONCLICK="<? if ($_GET[action] == "edit2") echo "location.href='?';"; else echo "window.close();"; ?>">
                  </td>
                </tr>
              </table>
            </form>
          </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
