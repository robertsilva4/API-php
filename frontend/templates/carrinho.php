<?php

$html = '<div class="modal fade modal-level" id="modalCart" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Carrinho</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div id="modalCartContent"></div>
        </div>

        <div class="modal-footer">
            <button href="javascript:void(0)" type="button" class="btn btn-danger">Comprar</button>
        </div>
    </div>
</div>
</div>';

echo $html;