<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- css import -->
    <link href="{{ url('css/dashboard.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="{{ url('js/clock.js') }}" ></script>
    <title>Clock Tracker</title>
</head>
<body >
    <div class="container-fluid" >
        <fieldset>
            <span id="hrs">&nbsp;</span>:
            <span id="min">&nbsp;</span>:
            <span id="sec">&nbsp;</span>&nbsp;
            <span id="ampm">&nbsp;</span>
        </fieldset>
        
        <!-- <li>{{$employee[0]->timerecord[0]->employee_id}}</li> -->
        <!-- for the dropdown of names -->
        <div class="container">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Employee List
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @foreach($employee as $person)
                    <a class="dropdown-item" href="/employee/{{$person->id}}">{{$person->name}}</a>

                    @endforeach
                </div>
            </div>     
        </div>
        <!-- functionalities -->
        @if(url()->current() != "http://localhost:8000")
            <div class="container">
                <button class="btn btn-primary" href="/employee/ClockIn/{{$personEsp->id}}">Clock In</button>
                <div class="container">
                <button class="btn btn-primary">Start</button>
                <button class="btn btn-primary">End</button>
                <button class="btn btn-primary">Take Another Break</button>
                </div>
                
                <button class="btn btn-primary" {{$personEsp->timerecord[0]->is_out ? '': 'disabled'}}>Clock Out</button>
            </div>
            <!-- Summary -->
            <div class="container">
                <h5>Total Time Worked :</h5><span></span>
                <h5>Hours Left Before Timeout :</h5><span></span>
                <h5>Total Breaks Used :</h5><span></span>
            </div>
        @endif
        
    </div>
</body>
</html>