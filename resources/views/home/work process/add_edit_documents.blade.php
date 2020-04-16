@extends('adminlte::page')

@section('title', 'Add Client')

@section('adminlte_css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    @stop
    @section('content')
            <!-- Start add Modal -->
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ action('DocumentController@store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Document Name</label>
                            <input type="text" name="dcname" class="form-control" placeholder="enter document name">
                        </div>
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="number" name="qty" class="form-control" placeholder="enter document qty">
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" name="date" class="form-control" placeholder="mm-dd-yyyy">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Add Document</label>

                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="addc">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                `
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">Upload</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div>
        <!-- End Add Modal -->

        <!-- Start Edit Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/document" method="POST" id="editform">

                        <!-- start security token -->
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                                <!--end security token -->

                        <div class="modal-body">

                            <div class="form-group">
                                <label>Document Name</label>
                                <input type="text" name="dcname" id="dcname" class="form-control"
                                       placeholder="enter document name">
                            </div>
                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="number" name="qty" id="qty" class="form-control"
                                       placeholder="enter document qty">
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" name="date" id="date" class="form-control" placeholder="mm-dd-yyyy">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Add Document</label>

                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="addc" id="addc">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div>
            <!-- End Edit Modal -->


            <!-- start validation -->
            <div class="container">
                @if(count($errors)> 0)

                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{\Session::get('success')}} </p>

                        @endif
                                <!-- End validation -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModalScrollable">
                            Insert Data
                        </button>
                        <br/><br/>

                        <table id="datatable" class="table table-bordered table-striped table-dark">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Document Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Date</th>
                                <th scope="col">Add Document</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Document Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Date</th>
                                <th scope="col">Add Document</th>
                                <th scope="col">Action</th>
                            </tr>
                            </tfoot>
                            <tbody>

                            @foreach($dc as $dcdata)
                                <tr>
                                    <th> {{  $dcdata->id }} </th>
                                    <td> {{  $dcdata->dcname }} </td>
                                    <td> {{  $dcdata->qty }} </td>
                                    <td> {{  $dcdata->date }} </td>
                                    <td> {{  $dcdata->addc }} </td>
                                    <td><a href="#" class="btn btn-success edit">Edit</a>
                                        <a href="#" class="btn btn-danger">Delete</td>
                                    </a>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    @stop
                @section('adminlte_js')
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                            crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
                            crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
                            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
                            crossorigin="anonymous"></script>
                    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
                    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

                    <script type="text/javascript">
                        $(document).ready(function () {

                            var table = $('#datatable').DataTable();

                            //Start Edit Record
                            table.on('click', '.edit', function () {

                                $tr = $(this).closest('tr');
                                if ($($tr).hasClass('child')) {
                                    $tr = $tr.prev('.parent');
                                }
                                var data = table.row($tr).data();
                                console.log(data);

                                $('#dcname').val(data[1]);
                                $('#qty').val(data[2]);
                                $('#date').val(data[3]);
                                $('#addc').val(data[4]);

                                $('#editform').attr('action', '/document/' + data[0]);
                                $('#editModal').modal('show');
                            });
                        });
                    </script>
@stop
