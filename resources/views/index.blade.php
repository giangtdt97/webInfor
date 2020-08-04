@extends('layout.master')
@section('content')
<style>
    .topnav{
        float: left;
    }
    .column {
        float: left;
        width: 50%;
        padding: 15px;
    }
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
    @media screen and (max-width:600px) {
        .column {
            width: 100%;
        }
    }
</style>

    <div class="row">
        <div class="column">
            <h2></h2>
            <p>Your Technology Partner for Software Innovation and Market-leading Solutions! We provide end-to-end software, Web and mobile application development services.</p>
        </div>

        <div class="column">
            <h2></h2>
            <p>The Picture Go Here</p>
        </div>
    </div>
@endsection
