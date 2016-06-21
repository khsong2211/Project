<!DOCTYPE HTML> 
<html>
<head> 
<title>Lab 11</title> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> 
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.4.1/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.4.1/jsgrid-theme.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.4.1/jsgrid.min.js"></script>

    <link type="text/css" rel="stylesheet" href="jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="jsgrid-theme.min.css" />
    <script type="text/javascript" src="jsgrid.min.js"></script>
</head>
<body>
<h1>Trial Balance</h1> <h3>Trial Balance For: Jaya Holdings</h3>
<ul class="dropdown-menu" role="menu">
    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
</ul>
<!-- Here 2 -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Here 2 end -->
<div id="jsGrid"></div>
    <script>
       var databases= [
           { "Year":"", "COA": "","Description": "", "Debit_Credit": "", "Amount": ""}
       ];
       <!--Here 1-->
       $(document).ready(function() {
           $.ajaxSetup({
               headers:{
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           });
        <!--Here 1 end-->
        $("#jsGrid").jsGrid({
            width: "100%",
            height: "400px",

            inserting: true,
            editing: true,
            sorting: true,
            paging: true,
            filtering: true,
            autoload: true,

            data: databases,

            controller:
            {
                loadData: function(filter) {
                    return $.ajax({
                        type: "GET",
                        url: "/account",
                        data: filter,
                        dataType: "json"
                    });
                },

                insertItem: function(item) {
                    return $.ajax({
                        type: "POST",
                        url: "/insert",
                        data: item,
                        dataType: "json"
                    });
                },

                updateItem: function(item) {
                    return $.ajax({
                        type: "PUT",
                        url: "/update",
                        data: item,
                        dataType: "json"
                    });
                },

                deleteItem: function(item) {
                    return $.ajax({
                        type: "DELETE",
                        url: "/delete",
                        data: item,
                        dataType: "json"
                    });
                }
            },







            fields: [
                { name: "Year", type: "text", width: 100, validate: "required" },
                { name: "COA", type: "text", width: 100 },
                { name: "Description", type: "text", width: 200 },
                { name: "Debit_Credit", type: "text", width:100 },
                { name: "Amount", type: "text", width:100 },
                { type: "control" }
            ]
        });
           <!--Here 3-->
       });
           <!-- Here 3 end-->
    </script>

</body>
</html>

