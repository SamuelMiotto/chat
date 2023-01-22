<div class="chatarea">
	<!--<div class="msgitem">10:00:00 <strong>Nome da Pessoa</strong>: Aqui está a mensagem da pessoa que vai ser exibida em duas ou mais linhas</div>-->

</div>
<div class="inputarea" data-nome="<?php echo $nome; ?>">
	<input type="text" id="msg" onkeyup="keyUpChat(this, event)" />
</div>
<script type="text/javascript">updateChat();</script>