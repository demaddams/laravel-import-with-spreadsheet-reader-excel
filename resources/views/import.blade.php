<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Import file</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<p>{{ session('status') }}</p>

<form method="POST" action="{{ url("import") }}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
        <label for="file" class="control-label">Excel file to import</label>

        <input id="file" type="file" class="form-control" name="file" required>

        @if ($errors->has('file'))
            <span class="help-block">
        <strong>{{ $errors->first('file') }}</strong>
        </span>
        @endif

    </div>

    <p><button type="submit" class="btn btn-success" name="submit"><i class="fa fa-check"></i> Submit</button></p>

</form>
</body>
</html>
