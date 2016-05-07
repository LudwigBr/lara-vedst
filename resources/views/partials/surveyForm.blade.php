

<div class="form-group">
    {!! Form::label('title', 'Umfragentitel:') !!}
    {!! Form::text('title', null, ['placeholder'=>'z.B. Teilnahme an der Clubfahrt',
        'required',
        'class' => 'form-control'
        ]) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Umfragenbeschreibung:') !!}
    {!! Form::textarea('description', null, ['size' => '100x4',
        'class' => 'form-control'
        ]) !!}
</div>
<div class="form-group">
    {!! Form::label('deadline', 'Umfrage aktiv bis:') !!}
    {!! Form::date('deadline', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
</div>

@include('partials.surveyField')
@include('partials.surveyField')

<div class="form-group">
    {!! Form::submit($submitButtonText) !!}
</div>