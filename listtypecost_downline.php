<?php
session_start();
//ini_set("display_errors","1");
include ("checklogin.php");
include ("phpconfig.php");
include ("libary/function.php");
conn2DB();
if(isset($_GET['sort'])){
	if($_GET['sort']=="asc"){
			$sort = "desc";
	}else{
			$sort = "asc";
	}
}else{
	$sort = "asc";
}

$getstr .= "sort=".$sort."&";
?>

<SCRIPT language=JavaScript 

src="bimg/swap.js"></SCRIPT>

<html>

<head>

<title>��§ҹ��������㹡���͡��Ժѵԧҹ</title>

<meta http-equiv="Content-Type" content="text/html; charset=tis-620">

<link href="cost.css" type="text/css" rel="stylesheet">

<style type="text/css">

<!--

body {  margin: 0px  0px; padding: 0px  0px}

a:link { color: #005CA2; text-decoration: none}

a:visited { color: #005CA2; text-decoration: none}

a:active { color: #0099FF; text-decoration: underline}

a:hover { color: #0099FF; text-decoration: underline}
.style2 {
	color: #000000;
	font-weight: bold;
}
.style4 {
	color: #FFFFFF;
	font-weight: bold;
}
.style9 {color: #000000}

-->

</style>

<!-- check ����кؤ��  -->

<SCRIPT LANGUAGE="JavaScript">

<!--

 



	function ch1(){
		var f1=document.form1;
//		if (f1.refresh.value == "1"){
//			return true; //no checking for refreshing
	//	}
		if (!f1.name_office.value){
		alert("��س��кت���ʶҹ��Сͺ���");
			return false;
		}
		if (!f1.com_no.value){
			alert("��س��к��Ţ����¹��ä��");
			return false;
		}
		if (!f1.off_no.value){
			alert("��س��к��Ţ���ʶҹ������ӹѡ�ҹ");
			return false;
		}
		if (!f1.off_province.value) {
			alert("��س��кبѧ��Ѵʶҹ������ӹѡ�ҹ");
			return false;
		}
		if  (!f1.off_tel.value) {
			alert("��س��к��������Ѿ�������ӹѡ�ҹ ");
			return false;
		}
		if (!f1.agg.checked  &&  !f1.travel.checked  && !f1.produce.checked  && !f1.other.checked ){
			alert("��س��кػ�������áԨ ");
			return false;
		}
		if (!f1.officer.value){
			alert("��س��кبӹǹ��ѡ�ҹ��Ш�");
			return false;
		}
		if (!f1.officer_total.value){
			alert("��س��кؾ�ѡ�ҹ���������");
			return false;
		}
		if (!f1.name.value){
			alert("��س��кؼ�����ӹҨ�Ѵ�Թ� ");
			return false;
		}
		if (!f1.surname.value){
			alert("��س��кآ����ż�����ӹҨ�Ѵ�Թ� ");
			return false;
		}
		if (!f1.position.value){
			alert("��س��кص��˹觼�����ӹҨ�Ѵ�Թ� ");
			return false;
		}
		if (!f1.tel.value){
			alert("��س��к��������Ѿ�������ӹҨ�Ѵ�Թ� ");
			return false;
		}
		if (!f1.it_yes.checked  &&  !f1.it_no.checked   ){
			alert("��س��к����˹�ҷ���Ѻ�Դ�ͺ��ҹ�к�෤��������ʹ�� (�ͷ�) ");
			return false;
		}
	}

//-->

</SCRIPT>

<!-- send id to menu flash -->

<script language=javascript>
<!--

//window.top.leftFrame.document.menu.SetVariable("logmenu.id","<?=$id?>");

//	window.top.leftFrame.document.menu.SetVariable("logmenu.action","edit");
	function checkid(){  //�Ǻ������ҧ id 
		f1 = document.form1;
		f1.id.value = f1.id1.value + f1.id2.value + f1.id3.value + f1.id4.value + f1.id5.value;
	}
var isNN = (navigator.appName.indexOf("Netscape")!=-1);
function autoTab(input,len, e) {
	var keyCode = (isNN) ? e.which : e.keyCode; 
	var filter = (isNN) ? [0,8,9] : [0,8,9,16,17,18,37,38,39,40,46];
	if(input.value.length >= len && !containsElement(filter,keyCode)) {
		input.value = input.value.slice(0, len);
		input.form[(getIndex(input)+1) % input.form.length].focus();
	}

	function containsElement(arr, ele) {
	var found = false, index = 0;
		while(!found && index < arr.length)
			if(arr[index] == ele)
				found = true;
			else
				index++;
		return found;
	}

	function getIndex(input) {
		var index = -1, i = 0, found = false;
		while (i < input.form.length && index == -1)
			if (input.form[i] == input)
				index = i;
			else 
				i++;
			return index;
	}

	// add to id
	checkid();
	return true;
}

var isMain = true;
//-->
</script>
</head>
<body >
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" background="" style="background-repeat: no-repeat; background-position:right bottom "><?
/*

if ($msg){

		echo "<h1>$msg</h1>";

		exit;

}

*/

?>
      <!-- main Table  -->
      <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#2C2C9E">
        <tr>
          <td height="30" colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">

            <tr>

              <td width="">			  </td>
              </tr>

          </table>
            <span class="style4">��§ҹ��������㹡���͡��Ժѵԧҹ</span></td>

        </tr>

        
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td align="left" valign="top"><table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td align="center">&nbsp;</td>
                          </tr>
                        </table>
                          <br>
                          <table width="90%" border="0" align="center" cellpadding="1" cellspacing="2" bgcolor="#A3B2CC">
                            <tr>
                              <td width="30%" align="right"><span class="style2"><a href="listtrip.php?tripid=<?=$tripid?>&sname=<?=$sname?>&ssurname=<?=$ssurname?>"><span class="style9"><u>TripID</u></span></a></span></td>
                              <td width="25%" align="center" bgcolor="#FFFFFF"><span class="style2">
                                <?
				$sqls = "select * from trip where tripid = '$tripid' ";
				$res = mysql_query($sqls);
				$rss = mysql_fetch_assoc($res);
				echo "$rss[tripid] ";
				?>
                              </span></td>
                              <td><strong>Trip Name :</strong> </td>
                              <td width="30%" bgcolor="#FFFFFF"><strong>
                                <?=$rss[tripname]?>
                              </strong></td>
                            </tr>
                            <tr>
                              <td width="30%" align="right"><strong>Staff Name: </strong></td>
                              <td width="25%" align="center" bgcolor="#FFFFFF"><strong>
                                <?
							  $tt = $rss[tripid];
							  ?>
                                <?=GetTripOwner($rss[tripid])?>
                              </strong></td>
                              <td bgcolor="#A3B2CC">&nbsp;</td>
                              <td width="30%" bgcolor="#A3B2CC">&nbsp;</td>
                            </tr>
                            <tr>
                              <td width="30%" align="right"><strong>��ǧ�����͡��鹷�軯Ժѵԧҹ</strong></td>
                              <td width="25%" align="center" bgcolor="#FFFFFF"><?
							  $sqld = "select max(date_list) as maxdate,min(date_list) as mindate from list where tripid = '$tripid' ";
							  $resultd = mysql_query($sqld);
							  $rsd = mysql_fetch_assoc($resultd);
						       echo daythai($rsd[mindate]);
							   echo "&nbsp; - &nbsp;";
   						       echo daythai($rsd[maxdate]);		  			  
							  ?></td>
                              <td bgcolor="#A3B2CC">&nbsp;</td>
                              <td width="30%" bgcolor="#A3B2CC">&nbsp;</td>
                            </tr>
                            <tr>
                              <td width="30%" align="right"><span class="style9"><strong>������ҳ������Ѻ͹��ѵ� </strong></span></td>
                              <td width="25%" align="right" bgcolor="#FFFFFF"><span class="style2">
                                <?
				//$sqls = "select sum(appbudget) as app from tripvalue  where (tripid = '$tripid')  ";
				$sqls = "
				SELECT
				SUM(tripvalue.appbudget) AS app
				FROM
				tripvalue
				INNER JOIN trip ON trip.header_trip = tripvalue.tripid
				WHERE trip.tripid = '$tripid'
				";
				//echo $sqls;
				$res = mysql_query($sqls);
				$rss = mysql_fetch_assoc($res);
				//echo number_format($rss[app],2);
				echo "N/A";
				?>
                              </span></td>
                              <td bgcolor="#A3B2CC"><strong>�ҷ </strong></td>
                              <td width="30%" bgcolor="#A3B2CC">&nbsp;</td>
                            </tr>
                            <tr>
                              <td width="30%" align="right"><strong>������ҳ������ԧ - �Թʴ </strong></td>
                              <td width="25%" align="right" bgcolor="#FFFFFF"><span class="style2">
                              
                                <?
				$sql = "SELECT list.id_type_cost,type_cost.type_cost FROM list 
				INNER JOIN type_cost ON (list.id_type_cost = type_cost.id_type_cost)
				WHERE tripid = '$tripid' 
				GROUP BY list.id_type_cost";
				$exe = mysql_query($sql);
				$data = mysql_fetch_array($exe);
				$id_type_cost = $data['id_type_cost'];
				$where_id_type_cost_total = ($id_type_cost!="")?" AND id_type_cost = '$id_type_cost' ":"";
				if($pri =="100"){
					$sqls = "select sum(cash_total) as cash_total,sum(credit_total) as credit_total  from list  where tripid = '$tripid' ".$where_id_type_cost_total;
				}else if($_SESSION[userid]==base64_decode($_GET['ubid'])){
					$sqls = "select sum(cash_total) as cash_total,sum(credit_total) as credit_total  from list  where tripid = '$tripid' ".$where_id_type_cost_total;
				}else{
					$sqls = "select sum(cash_total) as cash_total,sum(credit_total) as credit_total  from list  where tripid = '$tripid'  and userid= '$_SESSION[userid]' ".$where_id_type_cost_total;
				}
				//echo $sqls;
				$res = mysql_query($sqls);
				$resc = mysql_fetch_assoc($res);
				echo number_format($resc[cash_total],2);
				?>
                              </span></td>
                              <td bgcolor="#A3B2CC"><strong>�ҷ&nbsp;</strong></td>
                              <td width="30%" bgcolor="#A3B2CC">&nbsp;</td>
                            </tr>
                            <tr>
                              <td width="30%" align="right"><strong>- �ôԵ </strong></td>
                              <td width="25%" align="right" bgcolor="#FFFFFF"><strong>
                                <?=number_format($resc[credit_total],2);?>
                              </strong></td>
                              <td bgcolor="#A3B2CC"><strong>�ҷ&nbsp;</strong></td>
                              <td width="30%" bgcolor="#A3B2CC">&nbsp;</td>
                            </tr>
                            <tr>
                              <td width="30%" align="right"><strong>���</strong></td>
                              <td width="25%" align="right" bgcolor="#FFFFFF"><strong>
                                <?=number_format($resc[cash_total]+$resc[credit_total],2);?>
                              </strong></td>
                              <td bgcolor="#A3B2CC"><strong>�ҷ&nbsp;</strong></td>
                              <td width="30%" bgcolor="#A3B2CC">&nbsp;</td>
                            </tr>
                          </table>
                          <br>
                         
                          <table width="98%" border="0" cellspacing="2" cellpadding="2" align="center" bgcolor="black">
                            <tr bgcolor="#A3B2CC" align="center">
                              <td width="5%" rowspan="2"><strong>�ӴѺ</strong></td>
                              <td rowspan="2" bgcolor="#A3B2CC"><strong><a href="?<?=$getstr?>sortfield=date_list&tripid=<?=$tripid?>&id_type_cost=<?=$id_type_cost?>">�ѹ���</a></strong></td>
                              <td rowspan="2" bgcolor="#A3B2CC"><strong>��¡��</strong></td>
                              <td rowspan="2" bgcolor="#A3B2CC"><strong>��Ǵ��������</strong></td>
                              <td colspan="3" bgcolor="#A3B2CC"><strong>�ӹǹ�Թ</strong></td>
                              <td rowspan="2" bgcolor="#A3B2CC"><strong><a href="?<?=$getstr?>sortfield=id_type_project&tripid=<?=$tripid?>&id_type_cost=<?=$id_type_cost?>">�ç���</a></strong></td>
                              <td rowspan="2" bgcolor="#A3B2CC"><strong><a href="?<?=$getstr?>sortfield=complete&tripid=<?=$tripid?>&id_type_cost=<?=$id_type_cost?>">BILL</a></strong></td>
                              <td bgcolor="#A3B2CC">&nbsp;</td>
                            </tr>
                            <tr bgcolor="#A3B2CC" align="center">
                              <td><strong>�Թʴ</strong></td>
                              <td><strong>�ôԵ</strong></td>
                              <td><strong>���</strong></td>
                              <td>&nbsp;</td>
                            </tr>
    <?
	$i=0;
	$no=0;
	$sql = "SELECT list.id_type_cost,type_cost.type_cost FROM list 
	INNER JOIN type_cost ON (list.id_type_cost = type_cost.id_type_cost)
	WHERE tripid = '$tripid' 
	GROUP BY list.id_type_cost";
	$exe = mysql_query($sql);
	while($data = mysql_fetch_array($exe)){
	$id_type_cost = $data['id_type_cost'];
	echo "
	<tr align=\"left\" bgcolor=\"#FFFFFF\">
	  <td colspan=\"10\">$data[type_cost]</td>
	</tr>
	";
	$where_id_type_cost = ($id_type_cost!="")?" AND t1.id_type_cost = '$id_type_cost' ":"";
	if($pri =='100' || $_SESSION['userid']== base64_decode($_GET['ubid'])){
		if($sortfield == ""){
			$str = "SELECT *  FROM list t1 Inner join type_cost t2 on t1.id_type_cost = t2.id_type_cost 
					WHERE (t1.tripid = '$tripid') ".$where_id_type_cost."  order by date_list  ";
		}else{
			$str = " SELECT *  FROM list t1 Inner join type_cost t2 on t1.id_type_cost = t2.id_type_cost 
					WHERE (t1.tripid = '$tripid') ".$where_id_type_cost."  order by t1.$sortfield $sort   ";	
		}
	}else{
		if($sortfield == ""){
			$str = "SELECT *  FROM list t1 Inner join type_cost t2 on t1.id_type_cost = t2.id_type_cost 
					WHERE (t1.tripid = '$tripid') ".$where_id_type_cost." AND (t1.userid = '$userid') order by date_list  ";
		}else{
			$str = " SELECT *  FROM list t1 Inner join type_cost t2 on t1.id_type_cost = t2.id_type_cost 
					WHERE (t1.tripid = '$tripid') ".$where_id_type_cost." AND (t1.userid = '$userid') order by t1.$sortfield $sort   ";
		}
	}// end if privilage
	//echo "<br>".$str;
	$result = mysql_query($str);
	while ($rs=mysql_fetch_array($result,MYSQL_ASSOC)){
		$sum_cash+=$rs[cash_total];
		$sum_credit+=$rs[credit_total];		
		$i++;
		$no++;
		if ($i % 2) {
		$bg = "#EFEFEF";
		}else{
		$bg = "#DDDDDD";
		}
if($rs[attach] != ""){ $attach = "<a href=\"".$rs[attach]."\"  target=\"_blank\"><img src=\"bimg/attach.gif\" border=\"0\"></a>"; } else { $attach = "";}		
?>
                            <tr bgcolor="<?=$bg?>" align="center">
                              <td width="5%"><?=$no?></td>
                              <td bgcolor="<?=$bg?>"><?=daythai($rs[date_list])?></td>
                              <td align="left" bgcolor="<?=$bg?>"><?="&nbsp;".$attach.$rs[detail]?></td>
                              <td> <?
							  $sqls  = "select type_cost from type_cost where id_type_cost = '".$rs['id_type_cost']."' ";
							  $results = mysql_query($sqls);
							  $rss = mysql_fetch_assoc($results);
							  echo $rss['type_cost'];
							  ?></td>
                              <td align="right" bgcolor="<?=$bg?>"><?=number_format($rs['cash_total'],2)?></td>
                              <td align="right" bgcolor="<?=$bg?>"><?=number_format($rs['credit_total'],2)?></td>
                              <td align="right" bgcolor="<?=$bg?>"><?=number_format($rs['cash_total']+$rs['credit_total'],2)?></td>
                              <td bgcolor="<?=$bg?>"><?
							  $res = mysql_query("select * from type_project");
							  while ($rss = mysql_fetch_assoc($res)){
								If ($rs[id_type_project] == $rss[id_type_project]){
							  		echo "$rss[code_project]";
							  	}
							  }
							  
							  ?></td>
                              
                              <td bgcolor="<?=$bg?>">
							  			   <?
							  If ($rs[complete] =="y")
							  {
							  	echo "<img src=\"bimg/yy.png\" >";
							  }elseif ($rs[complete] =="n")
							  {
							  	echo  "<img src=\"bimg/alert.gif\" >";
							  }
							  ?></td>
                              <td bgcolor="<?=$bg?>">
							
								</td>
								</tr>
                              <?
	} //while

// List Template
				if(mysql_num_rows($result)>0){
					?>
                           <tr bgcolor="#CCCCCC" align="center">
                              <td colspan="3"><strong>���</strong></td>
                              <td align="right" ></td>
                              <td align="right" ><strong>
                              <?=number_format($sum_cash,2)?>
                              </strong></td>
                              <td align="right" ><strong>
                              <?=number_format($sum_credit,2)?>
                              </strong></td>
                              <td align="right" ><strong>
                              <?=number_format($sum_cash+$sum_credit,2)?>
                              </strong></td>
                              <td colspan="4" ></td>                              
                            </tr>	
						<?
						}else{
						?>
                           <tr bgcolor="#CCCCCC"" align="center">
                              <td colspan="10"><strong>����բ�����</strong></td>                         
                            </tr>						
						<?					
						}
					}// �� Group �������Ǵ����㴺�ҧ
						?>					
                          </table>
						  <p>&nbsp;</p>
						  <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="50%">&nbsp;</td>
                            </tr>
                            <tr>
                              <td width="50%">.......................................................</td>
                            </tr>
                            <tr>
                              <td width="50%" height="25">(<strong>
                                <?=GetTripOwner($tt)?>
                              </strong>)</td>
                            </tr>
                            <tr>
                              <td width="50%" height="25">�ѹ����͡��§ҹ
                                <?=DBThaiLongDate(date("Y-m-d"));?></td>
                            </tr>
                        </table></td>

                      </tr>

                  </table></td>

                </tr>

              </table>

</td>

        </tr>

      </table>

    </td>

  </tr>

</table>

</body>

</html>

