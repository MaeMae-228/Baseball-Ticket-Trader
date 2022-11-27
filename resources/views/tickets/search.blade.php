    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Baseball Ticket Trader</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
        <body>
            <h1>チケット検索</h1>
            <input type="date" name="matchday">
            <select name="team">
                @foreach ($teams as $team)
                    <option value="team">{{ $team->name }}</option>
                @endforeach
            </select>
            </div>
        </body>
    </html>