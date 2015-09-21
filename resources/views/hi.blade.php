<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Hello {{ $name  }}</h1>
    {!! Form::open(array('url' => 'foo/bar')) !!}
        {!!   Form::label('email', 'E-Mail Address'); !!}
        <br>
        {!! Form::text('email', 'example@gmail.com'); !!}
        <br>
        {!! Form::select('size', array('L' => 'Large', 'S' => 'Small')); !!}
        <br>
        {!! Form::select('animal', array(
            'Cats' => array('leopard' => 'Leopard'),
            'Dogs' => array('spaniel' => 'Spaniel'),
            ));
        !!}
        <br>
        {!! Form::selectRange('number', 10, 20); !!}
        <br>
        {!! Form::selectMonth('month'); !!}
    {!! Form::close() !!}
</body>
</html>