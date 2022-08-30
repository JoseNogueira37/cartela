$(document).ready(function() {

    $('.btn-save').click(function(e) {

        e.preventDefault();

        let dados = $('#form-promocao').serialize()

        dados += `&operacao=${$('.btn-save').attr('data-operation')}`

        $.ajax({
            type: 'POST',
            dataType: 'json',
            assync: true,
            data: dados,
            url: 'src/promocao/modelo/save-promocao.php',
            success: function(dados) {
                Swal.fire({
                    title: 'e-rifa',
                    text: dados.mensagem,
                    icon: dados.tipo,
                    confirmButtonText: 'OK'
                })

                $('#modal-promocao').modal('hide')
                $('#table-promocao').DataTable().ajax.reload()
            }
        })
    })

})