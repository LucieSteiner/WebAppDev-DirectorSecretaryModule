@extends('layouts.dashboard')
@section('page_heading','Trial Balance')
@section('section')
    <div id="jsGrid"></div>
    <script>

        var entries = {{ json_encode($entries->toArray()) }};
        $("#jsGrid").jsGrid({
            width: "100%",
            height: "400px",

            inserting: false,
            deleting: false,
            editing: false,
            sorting: true,
            paging: true,

            data: entries,

            fields: [
                { name: "Date", type: "date", width: 50, validate: "required"},
                { name: "Account", type: "text", width: 200 },
                { name: "Category", type: "text", width: 50},
                { name: "Amount", type: "number", width:50 }
            ]
        });
    </script>
           
            
@stop
