<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Baseball Ticket Trader</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
        <body>
            <div class='tickets'>
                @foreach ($tickets as $ticket)
                    <div class='ticket'>
                        <p class='home_team'>{{ $ticket->home_team_id }}</p>
                        <p class='visitor_team'>{{ $ticket->visitor_team_id }}</p>
                        <p class='matched_at'>試合日時　{{ $ticket->matched_at }}</p>
                        <p class='seat_type'>{{ $ticket->seat_type }}</p>
                        <p class='side'>{{ $ticket->side }}</p>
                        <p class='price'>{{ $ticket->price }}</p>
                    </div>
                @endforeach
            </div>
        </body>
    </html>