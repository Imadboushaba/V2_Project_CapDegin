@extends('adminlte::page')
@section('title', 'Principale')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <button data-toggle="modal" data-target="#modal-add" style="float: right;" type="button" class="btn  btn-success btn-sm"><i class="fas fa-fw fa-plus "></i></button></div>

                <div class="card-body">
                    <table id="example2" class="table table-bordered table-striped table-responsive-md">
                        <thead>
                        <tr>
                            <th>Numero</th>
                            <th>Nom</th>
                            <th>Ville</th>
                            <th>Date création</th>
                            <th>Option</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td>D-12/20</td>
                          <td>Internet
                            Explorer 4.0
                          </td>
                          <td>Oujda</td>
                          <td>25-02-2020</td>
                          <td>
                            <button data-toggle="modal" data-target="#modal-view" type="button" class="btn  btn-info btn-sm"><i class="fas  fa-eye "></i></button>
                            <button data-toggle="modal" data-target="#modal-update" type="button" class="btn btn-secondary btn-sm"><i class="fas fa-spinner "></i></button>
                            <button data-toggle="modal" data-target="#modal-delete" type="button" class="btn btn-danger btn-sm"><i class="fas  fa-trash "></i></button>
                          </td>
                        </tr>
                        <tr>
                            <td>D-14/20</td>
                          <td>Internet
                            Explorer 5.0
                          </td>
                          <td>Oujda</td>
                          <td>01-05-2020</td>
                           <td>
                            <button data-toggle="modal" data-target="#modal-view" type="button" class="btn  btn-info btn-sm"><i class="fas  fa-eye "></i></button>
                            <button data-toggle="modal" data-target="#modal-update" type="button" class="btn btn-secondary btn-sm"><i class="fas fa-spinner "></i></button>
                            <button data-toggle="modal" data-target="#modal-delete" type="button" class="btn btn-danger btn-sm"><i class="fas  fa-trash "></i></button>
                          </td>
                        </tr>
                        <tr>
                            <td>D-25/20</td>
                          <td>Internet
                            Explorer 5.5
                          </td>
                          <td>Oujda</td>
                          <td>17-05-2020</td>
                           <td>
                            <button data-toggle="modal" data-target="#modal-view" type="button" class="btn  btn-info btn-sm"><i class="fas  fa-eye "></i></button>
                            <button data-toggle="modal" data-target="#modal-update" type="button" class="btn btn-secondary btn-sm"><i class="fas fa-spinner "></i></button>
                            <button data-toggle="modal" data-target="#modal-delete" type="button" class="btn btn-danger btn-sm"><i class="fas  fa-trash "></i></button>
                          </td>
                        </tr>
                        <tr>
                            <td>D-32/20</td>
                          <td>Internet
                            Explorer 6
                          </td>
                          <td>Agadir</td>
                          <td>10-06-2020</td>
                           <td>
                            <button data-toggle="modal" data-target="#modal-view" type="button" class="btn  btn-info btn-sm"><i class="fas  fa-eye "></i></button>
                            <button data-toggle="modal" data-target="#modal-update" type="button" class="btn btn-secondary btn-sm"><i class="fas fa-spinner "></i></button>
                            <button data-toggle="modal" data-target="#modal-delete" type="button" class="btn btn-danger btn-sm"><i class="fas  fa-trash "></i></button>
                          </td>
                        </tr>
                        <tr>
                            <td>D-41/20</td>
                          <td>Internet Explorer 7</td>
                          <td>Agadir</td>
                          <td>12-01-2020</td>
                           <td>
                            <button data-toggle="modal" data-target="#modal-view" type="button" class="btn  btn-info btn-sm"><i class="fas  fa-eye "></i></button>
                            <button data-toggle="modal" data-target="#modal-update" type="button" class="btn btn-secondary btn-sm"><i class="fas fa-spinner "></i></button>
                            <button data-toggle="modal" data-target="#modal-delete" type="button" class="btn btn-danger btn-sm"><i class="fas  fa-trash "></i></button>
                          </td>
                        </tr>
                        <tr>
                            <td>D-52/20</td>
                          <td>AOL browser (AOL desktop)</td>
                          <td>Casa</td>
                          <td>10-06-2020</td>
                           <td>
                            <button data-toggle="modal" data-target="#modal-view" type="button" class="btn  btn-info btn-sm"><i class="fas  fa-eye "></i></button>
                            <button data-toggle="modal" data-target="#modal-update" type="button" class="btn btn-secondary btn-sm"><i class="fas fa-spinner "></i></button>
                            <button data-toggle="modal" data-target="#modal-delete" type="button" class="btn btn-danger btn-sm"><i class="fas  fa-trash "></i></button>
                          </td>
                        </tr>
                        <tr>
                            <td>D-12/82</td>
                          <td>Firefox 1.0</td>
                          <td>Tanger</td>
                          <td>25-04-2020</td>
                           <td>
                            <button data-toggle="modal" data-target="#modal-view" type="button" class="btn  btn-info btn-sm"><i class="fas  fa-eye "></i></button>
                            <button data-toggle="modal" data-target="#modal-update" type="button" class="btn btn-secondary btn-sm"><i class="fas fa-spinner "></i></button>
                            <button data-toggle="modal" data-target="#modal-delete" type="button" class="btn btn-danger btn-sm"><i class="fas  fa-trash "></i></button>
                          </td>
                        </tr>
                        <tr>
                            <td>D-91/20</td>
                          <td>Firefox 1.5</td>
                          <td>Tanger</td>
                          <td>27-02-2020</td>
                           <td>
                            <button data-toggle="modal" data-target="#modal-view" type="button" class="btn  btn-info btn-sm"><i class="fas  fa-eye "></i></button>
                            <button data-toggle="modal" data-target="#modal-update" type="button" class="btn btn-secondary btn-sm"><i class="fas fa-spinner "></i></button>
                            <button data-toggle="modal" data-target="#modal-delete" type="button" class="btn btn-danger btn-sm"><i class="fas  fa-trash "></i></button>
                          </td>
                        </tr>
                        <tr>
                            <td>D-12/70</td>
                          <td>Firefox 2.0</td>
                          <td>Tanger</td>
                          <td>12-02-2020</td>
                           <td>
                            <button data-toggle="modal" data-target="#modal-view" type="button" class="btn  btn-info btn-sm"><i class="fas  fa-eye "></i></button>
                            <button data-toggle="modal" data-target="#modal-update" type="button" class="btn btn-secondary btn-sm"><i class="fas fa-spinner "></i></button>
                            <button data-toggle="modal" data-target="#modal-delete" type="button" class="btn btn-danger btn-sm"><i class="fas  fa-trash "></i></button>
                          </td>
                        </tr>
                        <tr>
                            <td>D-12/75</td>
                          <td>Firefox 3.0</td>
                          <td>Rabat</td>
                          <td>17-03-2020</td>
                           <td>
                            <button data-toggle="modal" data-target="#modal-view" type="button" class="btn  btn-info btn-sm"><i class="fas  fa-eye "></i></button>
                            <button data-toggle="modal" data-target="#modal-update" type="button" class="btn btn-secondary btn-sm"><i class="fas fa-spinner "></i></button>
                            <button data-toggle="modal" data-target="#modal-delete" type="button" class="btn btn-danger btn-sm"><i class="fas  fa-trash "></i></button>
                          </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>Numero</th>
                          <th>Nom</th>
                          <th>Ville</th>
                          <th>Date création</th>
                          <th>Option</th>
                        </tr>
                        </tfoot>
                      </table>
                </div>
            </div>
        </div>
    </div>
     @include('crud.add')
     @include('crud.update')
     @include('crud.view')
     @include('crud.delete')
</div>
@endsection
@section('scripts')
<script>
    $(function () {

      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@stop
