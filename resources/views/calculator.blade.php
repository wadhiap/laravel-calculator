<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pritesh Wadhia | Laravel Calculator</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}  ">  
    </head>
    <body>
    <div id="main-wrapper">
        <h1>Laravel Calculator</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (strlen(session('sum')) > 0)
            <div class="alert alert-success">
                {{ session('val1') }}  {{ session('sign') }}  {{ session('val2') }} = {{ session('sum') }}
            </div>
        @endif
        <form method="get" action="{{ route('calculator.process') }}">
            {!! csrf_field() !!}            
            <span>Value 1:</span>
            <input type="text" name="val1" size="10" value="{{ old('val1', session('val1')) }}" />
            <span>Operator:</span>
            <select name="operator">
                <option value="">Please select...</option>
                <option value="add" {{ ( old('operator', session('operator')) == 'add') ? 'selected' : '' }}>Add</option>
                <option value="multiply" {{ ( old('operator', session('operator')) == 'multiply') ? 'selected' : '' }}>Multiply</option>
                <option value="subtract" {{ ( old('operator', session('operator')) == 'subtract') ? 'selected' : '' }}>Subtract</option>
                <option value="divide" {{ ( old('operator', session('operator')) == 'divide') ? 'selected' : '' }}>Divide</option>
            </select>          
            <span>Value 2:</span>
            <input type="text" name="val2" size="10" value="{{ old('val2', session('val2')) }}" />       
            <input type="submit" name="go" value="Calculate" />  
        </form>
    </div>
    </body>
</html>
