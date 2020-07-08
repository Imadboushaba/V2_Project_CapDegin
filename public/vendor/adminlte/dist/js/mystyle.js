$(function () {

    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": false,
      "autoWidth": false,
      "responsive": true,
      "language": {
        "search": " Recherche :",
        "sLengthMenu": "Affichier _MENU_ lignes",
        "paginate": {
            "previous": "Precedent",
            "next": "Suivant"

          }
      },
      "columnDefs": [ {
        "targets": 4,
        "orderable": false
        },
        {
            "targets": 3,
            "orderable": false
            } ]
    });
  });



$(function() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
      $(document).on('click', '.add_report', function() {

        toastr.success('Complete!', 'Votre element  été ajouté avec succès');

    });
    $(document).on('click', '.update_report', function() {

        toastr.success('Complete!', 'Votre element  été modifier avec succès');

    });
    $(document).on('click', '.delete_report', function() {

        toastr.success('Complete!', 'Votre element  été supprimer avec succès');

    });
    $('.select2').select2();
});
