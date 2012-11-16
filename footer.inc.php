<!-- Start of Google Analytics Code -->
<script src="https://ssl.google-analytics.com/urchin.js" type="text/javascript"></script>
<script type="text/javascript">_uacct = "UA-1787131-1";urchinTracker();</script>

<?php

	// Count number of unique visitors
	if(file_exists(DB_DIR."visitors.txt") )
		$fp = @fopen(DB_DIR."visitors.txt", "r+");
	else
		$fp = @fopen(DB_DIR."visitors.txt", "w+");
		
	if (!isset($_SESSION['visitors']) )	// new visitor
	{
		$visitors = @fread($fp, 1024) + 1; 
		@fseek($fp, 0); @fwrite($fp, $visitors);
		$_SESSION['visitors'] = $visitors; 
	}
	else  // not new visitor
	{
		$visitors = @fread($fp, 1024)+0;
	}
	@fclose($fp);
	
	// Count total number of hits
	if(file_exists(DB_DIR."hits.txt") )
		$fp = @fopen(DB_DIR."hits.txt", "r+");
	else
		$fp = @fopen(DB_DIR."hits.txt", "w+");
	$hits = @fread($fp, 1024) + 1; 
	@fseek($fp, 0); @fwrite($fp, $hits); @fclose($fp);

	$end_php_time = microtime(true);	// only works in php5
	//$end_php_time = strtok(microtime(), ' ') + strtok('');	// also works with php4
	$generation = round($end_php_time - $start_php_time, 4);
	
?>
<div id="footer">
<!-- <hr align="center" width="99%" size="4" color="#006699" noshade> -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">	
	<tr width="100%"><td> 
		<table bgcolor="#FFFFFF" style="color:#000000; font-size: 12px;" width="100%" border="0" cellpadding="0" ><tr valign="bottom">
			<td valign="bottom" class="contact"><nobr>Version 1.6.0</td>
			<td width="99%">&nbsp;</td>
			<td valign="bottom" class="contact"><nobr>Comments?</td>	
					<script type="text/javascript" language=javascript>
					<!--
					email='papamix@'+'gmail.com';
					document.write('<td valign="bottom"><a href="mailto:' + email + '"><img border="none" src="./theme/mail.png"></a></td>');
					//-->
					</script>
					<noscript><td valign="bottom"><a href="mailto:papamix (at) gmail (dot) com"><img border="none" src="./theme/mail.png"></a></td></noscript>
			</td>
		</tr></table>
	</td></tr>
	<tr width="100%"><td>
		<table bgcolor="#006699" style="color:#FFFFFF; font-size: 12px;" width="100%" border="0" cellpadding="1" ><tr>
			<td align="left"><nobr>&nbsp;&nbsp;<strong>Unique Visitors:</strong> <?php echo $visitors; ?></td>
			<td align="left"><nobr>&nbsp;&nbsp;<strong>Total Hits:</strong> <?php echo $hits; ?></td>
			<td align="center" width="99%"><nobr>This page was generated in <strong><?php echo $generation; ?></strong> seconds. </td>
			<td align="right"><a href="http://www.c-worker.ch/txtdbapi/index_eng.php"> <img border="none" src="./theme/txtdb.gif"></a></td>
		</tr></table>
	</td></tr>
</table>
</div>



<!-- Start of StatCounter Code 
<script type="text/javascript" language="javascript">
var sc_project=2564892; 
var sc_invisible=0; 
var sc_partition=24; 
var sc_security="64ed5b04"; 
var sc_text=1; 
</script>

<script type="text/javascript" language="javascript" src="http://www.statcounter.com/counter/counter.js"></script><noscript><a href="http://www.statcounter.com/" target="_blank"><img  src="http://c25.statcounter.com/counter.php?sc_project=2564892&java=0&security=64ed5b04&invisible=0" alt="free hit counter" border="0"></a> </noscript>
-->
