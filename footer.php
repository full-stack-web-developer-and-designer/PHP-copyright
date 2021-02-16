<footer id="footer" style="background-color:#000;color:#FFF;width:90%;margin:0 auto;padding:5px;text-align:center";>
<?php
function copyright($startYear) {
	$currentYear = date('Y');
	if ($startYear < $currentYear) {
		$currentYear = date('y');
		return "<p>&copy Copyright $startYear &ndash; $currentYear " . "| Developed by Mirnes Glamočić</p>";
	} else {
		return "<p>&copy Copyright $startYear " . "| Developed by Mirnes Glamočić</p>";
	}
}
echo copyright(2021);
?>
</footer>