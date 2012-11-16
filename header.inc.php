<hr size="4" color="#006699" noshade>
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif" valign="middle"><strong><a class="huge" href="index.php"><nobr>Submit - Rendezvous</nobr></a></strong></td>
	<!-- <td valign="top"><span class="copyright"><nobr><sup>&nbsp;&copy;</sup></span></td> -->
	<!-- <td style="color:#BCBEBC;" valign="bottom"><span class="version"><nobr>version 1.5.00</td> -->
	<!-- <td valign="bottom"><span class="credits"><nobr>&nbsp;&nbsp;created by Michael Papamichael&nbsp;©&nbsp;2007</td> -->
    <td class="title" valign="bottom" align="center" width="99%"><?php echo $title; ?></td>
    <td class="university" align="right" valign="bottom">
      <div><?php if($affil1_link==""){echo '<nobr>'.$affil1;} else { echo '<a class="links" href="'.$affil1_link.'"<nobr>'.$affil1.'</a>';}?></div>
      <div><?php if($affil2_link==""){echo '<nobr>'.$affil2;} else { echo '<a class="links" href="'.$affil2_link.'"<nobr>'.$affil2.'</a>';}?></div>
      <div><?php if($affil3_link==""){echo '<nobr>'.$affil3;} else { echo '<a class="links" href="'.$affil3_link.'"<nobr>'.$affil3.'</a>';}?></div>
      <!-- <div align="right" class="credits"><nobr>created by <a class="links" href="http://www.cs.cmu.edu/~mpapamic">Michael Papamichael</a>&nbsp;&copy;&nbsp;2007</nobr></div> -->
    </td>
      <td>&nbsp;&nbsp;</td>
      <div></div>
      <td align="right" valign="bottom">
        <?php if($logo_link==""){echo '<img border="none" src="'.$logo_path.'" width="55" height="55" />';} 
               else { echo '<a href="'.$logo_link.'"><img border="none" src="'.$logo_path.'" width="55" height="55" /></a>';}?>
      </td>
      <!-- <td align="right" valign="bottom"><nobr>created by Michael Papamichael</td> -->
  </tr>
</table>
<hr size="4" color="#006699" noshade>
<br>

<!-- highlight the correct menu entry -->
<?php
    $currentFile = $_SERVER["SCRIPT_NAME"];
    $parts = Explode('/', $currentFile);
    $currentFile = $parts[count($parts) - 1];
?> 

<table width="100%" cellspacing="0" cellpadding="0" border="0"><tr>
  <td width="300"><nobr><ul id="navlist">
    <!-- CSS Tabs -->
    <li><a <?php if($currentFile=='index.php')echo 'id="current"'?> href="index.php">Home</a></li>
    <li><a <?php if($currentFile=='submit.php')echo 'id="current"'?> href="submit.php">Submit</a></li>
    <li><a <?php if($currentFile=='rendezvous.php')echo 'id="current"'?> href="rendezvous.php">Rendezvous</a></li>
    <li><a <?php if($currentFile=='advanced.php')echo 'id="current"'?> href="advanced.php">Advanced</a></li>
  </ul></td>
  <td align="left" valign="bottom">
    <span class="credits"><nobr>&nbsp;created by <a style="text-decoration:none; color:#BCBEBC;" href="http://www.cs.cmu.edu/~mpapamic">Michael Papamichael</a>&nbsp;&copy;&nbsp;2007</nobr> 
  </td>	
  
  <td align="right" valign="bottom" bgcolor="#FFFFFF"><span class="time"><nobr> <script>	
    document.writeln('<nobr><span id="servertime"></span>');
  </script><noscript> </noscript></td>
</tr></table>

