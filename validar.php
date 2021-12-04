<?php
if (isset($_POST['submit'])) {
	if (empty($nombre)) {
		echo '<script>
		       alert("llene el campo de nombre");
		       </script>';
	}
	else {
		if (strlen($nombre) > 15) {
			echo "el nombre es muy largo";
		}
	}	
}

?>