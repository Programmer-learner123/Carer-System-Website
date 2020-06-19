$(function () {
    $('.js-basic-example').one({
        responsive: true
    });

    //Exportable table
    $('.js-exportable').one({
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});