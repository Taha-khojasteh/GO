<?php
	if (isset($texto[1]) AND is_numeric($texto[1]) AND $texto[1]>1) {
		$mensagem = '<b>' . mt_rand(1, $texto[1]) . '</b>';
	} else {
		$mensagem = '📚: /' . GERAR[$idioma] . ' ' . mt_rand(1, 100);
	}

	sendMessage($mensagens['message']['chat']['id'], $mensagem, $mensagens['message']['message_id'], NULL, TRUE);
