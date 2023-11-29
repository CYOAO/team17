<html>

<head>
    <title>列出所有區域</title>
</head>

<body>
<h1>列出所有區域</h1>

@for($i=0; $i<count($areas); $i++)
    {{$areas[$i]['name' ] }} <br/>
    {{$areas[$i]['position' ] }} <br/>
    {{$areas[$i]['element' ] }} <br/>
    {{$areas[$i]['belief' ] }} <br/>
    {{$areas[$i]['god' ] }} <br/>
    {{$areas[$i]['ruler' ] }} <br/>
@endfor

</body>
</html>
