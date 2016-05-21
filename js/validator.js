/**
 * Created by Kal-El on 11-05-2016.
 */
$(document).ready(function() {
    $('#cliente_ws_ejemplo').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            textoBusqueda: {
                validators: {
                    notEmpty: {
                        message: 'El texto es requerido'
                    }
                }
            }
        }
    });
});