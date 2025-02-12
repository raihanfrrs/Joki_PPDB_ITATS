$(document).on('click', '#button-trigger-modal-show-payment', function (e) {
    let id = $(this).attr('data-id');

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        url: "/ajax/payment/"+id+"/show",
        method: "get",
        processData: false,
        contentType: false,
        success: function(response) {
            $("#data-show-payment-modal").html(response);
        },
        error: function(xhr, status, error) {
        }
    });
  });