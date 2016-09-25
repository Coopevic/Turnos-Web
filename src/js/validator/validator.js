$(function () {
$('#datetimepicker').datetimepicker({
				 pickTime: false
			 });
});

$('#defaultForm').bootstrapValidator({
	 feedbackIcons: {
		 valid: 'glyphicon glyphicon-ok',
		 invalid: 'glyphicon glyphicon-remove',
		 validating: 'glyphicon glyphicon-refresh'
	 },
	 fields: {
		 
		 datetimepicker: {
			 validators: {
				 notEmpty: {
					 message: 'La fecha de nacimiento es requerida y no puede ser vacia'
				 },
				 date: {
					 format: 'YYYY-MM-DD',
					 message: 'La fecha de nacimiento no es valida'
				 }
			 }
		 },
		 
 
	 }
});