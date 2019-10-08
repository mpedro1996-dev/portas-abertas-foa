<html>
<head>
    <title>Relatório</title>
    <style>
        html{
            font-family: Arial,sans-serif;
        }
        .conteudo{
            margin: 0 auto;
        }
        .clearfix{
            clear: both;
        }
        .col{
            float: left;
        }
        .cl-green{
            color:#56375e;
        }
        .centro{
            text-align: center;
        }
        .mg-topo{
            margin-top: 60px;
        }
        .mg-esquerda{
            margin-top: 0px;
        }
        table{
            width: 100%;
        }
        table, th, td{
            border-collapse: collapse;
            border: 1px solid #000;
            padding-left: 5px;
            padding-right: 5px;
            padding-top: 12px;
            margin-left: 0;
            margin-right: 0;
        }
        thead{
            background-color: #56375e;
            color:#fff;
        }
        tbody tr:nth-child(even){
            background-color: #f2f2f2;
        }
        td{
            font-size: 12px;
        }

    </style>
</head>

<body>
@yield('content')
</body>
</html>