<div class="form-group">
    {!! Form::label('First Name') !!}
    {!! Form::text('firstName', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'ex. George'))  !!}
</div>
<div class="form-group">
    {!! Form::label('Last Name') !!}
    {!! Form::text('lastName', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'ex. Sr.'))  !!}
</div>
<div class="form-group">
    {!! Form::label('Email') !!}
    {!! Form::text('email', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'ex. you@gmail.com'))  !!}
</div>
<div class="form-group">
    {!! Form::label('Public Notes') !!}
    {!! Form::text('publicNotes', null,
    array('class'=>'form-control',
    'placeholder'=>'ex. Stock Diet Coke'))  !!}
</div>
<div class="form-group">
    {!! Form::label('Private Notes') !!}
    {!! Form::text('privateNotes', null,
    array('class'=>'form-control',
    'placeholder'=>'ex. Wife is Barbara, son is George.  Prefers car in hangar.'))  !!}
</div>
<div class="form-group">
    {!! Form::label('aircraft_list', 'Primary Aircraft') !!}
    {!! Form::select('aircraft_list[]', $aircraft, null,
    ['id'=>'aircraft_list', 'class'=>'form-control', 'multiple', 'style'=>'width:100%']) !!}
</div>
<div class="form-group">
    {!! Form::button($submitButtonText, array('class'=>'btn btn-primary', 'type'=>'submit'))  !!}
</div>