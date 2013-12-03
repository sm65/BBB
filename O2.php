<html><body><h1>O2 Log</h1>
<p><br>
<?php
$dummy = system('tail O2/Log.csv', $retval);
?>

</p>
<p>
<form method="get" action="O2/Log.csv">
<button type="submit">Download!</button>
</form>
</p>
</body></html>

