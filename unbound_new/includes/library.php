<? 
$_issues = array(
	array("Volume 5, Issue 2", "vol_5_iss_2.jpg"),
	array("Volume 5, Issue 1", "vol_5_iss_1.jpg"),
	array("Volume 4, Issue 3", "vol_4_iss_3.png"),
	array("Volume 4, Issue 2", "vol_4_iss_2.png"),
	array("Volume 4, Issue 1", "vol_4_iss_1.jpg"),
	array("Volume 3, Issue 3", "vol_3_iss_3.jpg"),
	array("Volume 3, Issue 2", "vol_3_iss_2.jpg"),
	array("Volume 3, Issue 2", "vol_3_iss_1.jpg"),
	array("Volume 2, Issue 2", "vol_2_iss_3.jpg"),
	array("Volume 2, Issue 2", "vol_2_iss_2.jpg"),
	array("Volume 2, Issue 2", "vol_2_iss_1.jpg"),
	array("Volume 1, Issue 2", "vol_1_iss_3.jpg"),
	array("Volume 1, Issue 2", "vol_1_iss_2.jpg"),
	array("Volume 1, Issue 2", "vol_1_iss_1.jpg")
);
?>

<section id="library">
	<h2>Past Issues</h2>
		<div>
			<? for ($i=0; $i<3; $i++) { 
					echo "<a href='issue.php?iss=" . $_issues[$i][0] . "'><img src='images/issues/" . $_issues[$i][1] . "' /></a>";
				}
			?>				
		</div>
		<div>
			<? for ($i=3; $i<6; $i++) { 
					echo "<a href='issue.php?iss=" . $_issues[$i][0] . "'><img src='images/issues/" . $_issues[$i][1] . "' /></a>";
				}
			?>
		</div>
</section>