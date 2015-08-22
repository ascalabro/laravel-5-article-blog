@extends('app')

@section('content')
<div class="container">
    <a class="btn btn-primary btn-sm" href="{{URL::previous()}}">Back</a>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h3>Search Form</h3>
                <div>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Flights</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Hotels</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Packages</a></li>
                        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Cruises</a></li>
                        <li role="presentation"><a href="#rental-cars" aria-controls="rental-cars" role="tab" data-toggle="tab">Rental Cars</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">home</div>
                        <div role="tabpanel" class="tab-pane" id="profile">p.</div>
                        <div role="tabpanel" class="tab-pane" id="messages">m.</div>
                        <div role="tabpanel" class="tab-pane" id="settings">.s</div>
                        <div role="tabpanel" class="tab-pane" id="rental-cars">.aa</div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    @stop