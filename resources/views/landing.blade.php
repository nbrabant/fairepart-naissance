@extends('layout')

@section('styles')
	<link rel='stylesheet' type='text/css' href="/css/landing.css">
@endsection

@section('content')

    <div id="landing" class="container text-center">
        <div id="landing-image">
            <img src="img/coming-soon.jpg" class="img-responsive" />
        </div>

        <p class="text-center">
            Cette cignogne déposera bientôt dans nos bras un merveilleux cadeau.<br />
            Celui-ci est si précieux qu'elle prendra le temps de venir,<br />
            Dans cette attente, nous vous proposons de vous enregistrer afin de connaitre en temps cet heureux événement
        </p>

        {!! Form::open(['url' => 'register', 'class' => 'form-horizontal', 'id' => 'landing-form']) !!}
            <div class="form-group">
                <div class="col-xs-12">
                    {!! Form::text('email', null, array('class' => 'form-control', 'id' => 'form-email', 'placeholder' => 'Saisissez votre E-mail')) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12">
                    {!! Form::submit('Envoyer', array('class' => 'btn btn-register')) !!}
                </div>
            </div>
        {!! Form::close() !!}
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#landing-form').submit(function(event) {
                $.ajax({
                    type        : 'POST',
                    url         : 'register',
                    data        : {
                        'email': $('#form-email').val()
                    },
                    dataType    : 'json',
                    encode      : true
                }).done(function(data) {
                    console.log(data);
                });

                event.preventDefault();
            });
        });
    </script>
@endsection
