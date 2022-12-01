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
            <div>
                <label for="">試合開催日
                    <input type="date" name="matchday">
                </label>
            </div>
            <div>
                <label for="">ホームチーム
                <div>
                    <select name="team">
                        @foreach ($teams as $team)
                            <option value="team">{{ $team->name }}</option>
                        @endforeach
                    </select>
                </div>
                </label>
            </div>
            <div>
                <label for="">ビジターチーム
                <div>
                    <select name="team">
                        @foreach ($teams as $team)
                            <option value="team">{{ $team->name }}</option>
                        @endforeach
                    </select>
                </div>
                </label>
            </div>
            <div>
                <input type="submit" class="btn" value="検索">
            </div>
        </body>
    </html>