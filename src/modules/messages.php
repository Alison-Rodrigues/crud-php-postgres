<?php
    function printMessage($message) {
        if($message=='success-create') {
            return '<span class="success-message">Dados adicionados com sucesso.</span>';
        }
        if($message=='error-create') {
            return '<span class="error-message">Erro ao adicionar os dados.</span>';
        }
        if($message=='success-update') {
            return '<span class="success-message">Dados atualizados com sucesso.</span>';
        }
        if($message=='error-update') {
            return '<span class="error-message">Erro ao atualizar os dados.</span>';
        }
        if($message=='success-delete') {
            return '<span class="success-message">Dados excluídos com sucesso.</span>';
        }
        if($message=='error-delete') {
            return '<span class="error-message">Erro ao excluir os dados.</span>';
        }
    }

?>