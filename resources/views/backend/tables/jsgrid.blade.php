@extends('adminlte::page')

@section('title', 'CA Digital')

@section('content_header')
    <h1 class="m-0 text-dark">Js Grid</h1>
    @stop

    @section('content')
            <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">jsGrid</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div id="jsGrid1"></div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
@stop
@section('jagrid')
    <script>
        $(function () {
            $("#jsGrid1").jsGrid({
                height: "100%",
                width: "100%",

                sorting: true,
                paging: true,

                data: db.clients,

                fields: [
                    {name: "Name", type: "text", width: 150},
                    {name: "Age", type: "number", width: 50},
                    {name: "Address", type: "text", width: 200},
                    {name: "Country", type: "select", items: db.countries, valueField: "Id", textField: "Name"},
                    {name: "Married", type: "checkbox", title: "Is Married"}
                ]
            });
        });
    </script>
@endsection
