<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title>Senegad</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <?php javaScript() ?>
  <link rel="stylesheet" type="text/css" href="css/default.css">
  <link rel="stylesheet" type="text/css" href="/senegad.css">
  <script type="text/javascript" src="/roundedimg.js"></script>
</head>
<body>

<center>

<table cellspacing=0 cellpadding=0 class=main>
<tr>
<td class=leftgradient></td>
<td class=maincontent>
  <table cellspacing=0 cellpadding=0 class=content_table>
    <tr><td style="height:20px;" colspan=9></td></tr>
    <tr><td class=banner colspan=9><img src="/images/main_senegad.gif"></td></tr>
    <tr><!-- nav -->
      <td class=link>
        <a href="/index.php" class=navlink>
          <img src="/images/nav_home.gif"class=navlink></a></td>
      <td class=link>
        <a href="/scholarship.php" class=navlink>
          <img src="/images/nav_scholarship.gif" class=navlink></a></td>
      <td class=link>
        <a href="/youth.php" class=navlink>
          <img src="/images/nav_youth.gif" class=navlink></a></td>
      <td class=link>
        <a href="/bike.php" class=navlink>
          <img src="/images/nav_bike.gif" class=navlink></a></td>
      <td class=link>
        <a href="/fundraising.php" class=navlink>
          <img src="/images/nav_fundraising.gif" class=navlink></a></td>
      <td class=link>
        <a href="/photo.php" class=navlink>
          <img src="/images/nav_photo.gif" class=navlink></a></td>
      <td class=link>
        <a href="/contact.php" class=navlink>
          <img src="/images/nav_contact.gif" class=navlink></a></td>
      <td class=link>
        <a href="/phpEventCalendar/" class=navlink>
          <img src="/images/nav_calendar.gif" class=navlink></a></td>
      <td class=link>
        <a href="/links.php" class=navlink>
          <img src="/images/nav_links.gif" class=navlink></a></td>
    </tr>
    <tr>
      <td colspan=9 style="height:100%; vertical-align:top;">

		<br><br><br>

		<table cellpadding="0" cellspacing="0" border="0" align="center">
		<tr>
			<td>
				<?php echo $scrollarrows ?>
				<span class="date_header">
				&nbsp;<?php echo $lang['months'][$m-1] ?>&nbsp;<?php echo $y ?></span>
				<br><br>
			</td>

			<!-- form tags must be outside of <td> tags -->
			<form name="monthYear">
			<td align="right">
			<?php monthPullDown($m, $lang['months']); yearPullDown($y); ?>
			<input type="button" value="go" onClick="submitMonthYear()">
			</td>
			</form>

		</tr>

		<tr>
			<td colspan="2" bgcolor="#000000">
			<?php echo writeCalendar($m, $y); ?></td>
		</tr>

		<tr>
			<td colspan="2" align="center">
			<?php echo footprint($auth, $m, $y) ?>
			<br><br>
			</td>
		</tr>
		</table>

      </td>
    </tr>
  </table>
  <div id=footer>
    This unofficial website does not in any way reflect the opinions of the Peace Corps or the
    United States government.
  </div>
</td>
<td class=rightgradient></td>
</tr>
</table>

</center>
</body>
</html>
