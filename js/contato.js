$(document).ready(function() {
	$(document).on("submit", "#formContato", function(event) {
		event.preventDefault();
		var self = $(this);

		$.ajax({
			url: "arrumar/envia_contato.php",
			method: "POST",
			dataType: "JSON",
			data: self.serialize()
		})
		.done(function(response) {
			if (response.status == "Y") {
				$(".modal-title").text("Contato Sucesso");
				$(".modal-body p").text("Formulario bem sucedido.");
				
			} else {
				$(".modal-title").text("Contato Erro");
				$(".modal-body p").text("Ocorreu um erro ao enviar o formulario.");
			
			}
		});

		$(".modal").modal('toggle');
	});
});