<form id="frmLogin">
	<p>Qual apelido o Kaiser usou antes da sua morte?: <input type="text" name="user" ><br>
	Quantos anos a.C Kian nasceu?: <input type="password" name="pass"><br>
	<input type="button" id="btnEnviar" value="Enviar"></p>
</form>


<script type="text/javascript">
	$(document).ready(function() {
		$("#btnEnviar").click(function() {
			var url   = "section04Content.php";
			var dados = $("#frmLogin").serialize();
			$.post( url, dados, function( responseText ) {
				$("#sct02" ).html( responseText );
			} );
		});
	});
</script>