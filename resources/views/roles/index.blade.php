<html>
<head>
    <title>列出所有角色</title>
</head>

<body>
<h1>列出所有角色</h1>

@for($i=0; $i<count($roles); $i++)
    {{$roles[$i]['name'] }} <br/>
    {{$roles[$i]['stars']}}<br/>
    {{$roles[$i]['property']}}<br/>
    {{$roles[$i]['gender']}}<br/>
    {{$roles[$i]['weapon']}}<br/>
    {{$roles[$i]['constellation']}}<br/>
    {{$roles[$i]['permanent_limited']}}<br/>
    {{$roles[$i]['race']}}<br/>
    {{$roles[$i]['birthdate']}}<br/>
    {{$roles[$i]['height']}}<br/>
    {{$roles[$i]['version']}}<br/><br/>

@endfor

</body>
</html>