<div class="form-group">
    {!! Form::label('Tail Number') !!}
    {!! Form::text('tailNumber', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'ex. N975BD'))  !!}
</div>
<div class="form-group">
    {!! Form::button($submitButtonText, array('class'=>'btn btn-primary', 'type'=>'submit'))  !!}
</div>