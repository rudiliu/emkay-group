<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{env('APP_NAME')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                padding: 10px 10px 10px 10px;
                overflow-x: auto;
                overflow-y: auto;
                width:98%;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            li {
                display: list-item;
                text-align: -webkit-match-parent;
            }
            .pagination {
                display: -ms-flexbox;
                display: flex;
                padding-left: 0;
                list-style: none;
                border-radius: .25rem;
            }
            ul, menu, dir {
                display: block;
                list-style-type: disc;
                margin-block-start: 1em;
                margin-block-end: 1em;
                margin-inline-start: 0px;
                margin-inline-end: 0px;
                padding-inline-start: 40px;
            }
            .page-link:not(:disabled):not(.disabled) {
                cursor: pointer;
            }
            .page-link {
                position: relative;
                display: block;
                padding: .5rem .75rem;
                margin-left: -1px;
                line-height: 1.25;
                color: #007bff;
                background-color: #fff;
                border: 1px solid #dee2e6;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <a target="_BLANK" href="{{url('report')}}?pin={{request()->input('pin')}}&export=1"> Export All </a>
        </div>

        <table border="1">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>IC</th>
                <th>Phone</th>
                <th>Location</th>
                <th>Q1</th>
                <th>Q2</th>
                <th>Q2</th>
                <th>Q4</th>
                <th>Q5</th>
                <th>Q1 Timestamp</th>
                <th>Q2 Timestamp</th>
                <th>Q2 Timestamp</th>
                <th>Q4 Timestamp</th>
                <th>Q5 Timestamp</th>
                <th>FB Share</th>
                <th>TW Share</th>
                <th>Register at</th>
                <th>Updated at</th>
                <th>Register IP</th>
                <th>Updated IP</th>
            </tr>

            @foreach($registrations as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->ic_number}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->location}}</td>
                    <td>{{$item->answer1}}</td>
                    <td>{{$item->answer2}}</td>
                    <td>{{$item->answer3}}</td>
                    <td>{{$item->answer4}}</td>
                    <td>{{$item->answer5}}</td>
                    <td>{{$item->q1_created_at}}</td>
                    <td>{{$item->q2_created_at}}</td>
                    <td>{{$item->q3_created_at}}</td>
                    <td>{{$item->q4_created_at}}</td>
                    <td>{{$item->q5_created_at}}</td>
                    <td>{{$item->share_on_fb}}</td>
                    <td>{{$item->share_on_tw}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>{{$item->created_ip}}</td>
                    <td>{{$item->updated_ip}}</td>
                </tr>
            @endforeach

        </table>

        <div class="content">
            {{$registrations->appends(request()->input())->links()}}
        </div>
    </body>
</html>
