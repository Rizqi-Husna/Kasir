<?php
class Fungsi{
	function get($get){
			return isset($_GET[$get])?$_GET[$get]:"";
		}
		function post($post){
			return isset($_POST[$post])?$_POST[$post]:"";
		}
		function ses($ses){
			return isset($_SESSION[$ses])?$_SESSION[$ses]:"";
	}
	function rp($duit){
		return "RP ".number_format($duit);
	}
	function alert($a){
		?>
		<script type="text/javascript">
			alert($a);
		</script>
		<?php
	}
		function redirect($url)
		{
			?>
				<script type="text/javascript">
					location.href=('<?=$url?>');
				</script>
			<?php
		}
		function back(){
			echo"<script>history.back()</script>";
		}
	}
	$fg = new Fungsi();
?>