
<div class="form-group">
    {!! Form::label('First Name') !!}
    {!! Form::text('firstName', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'ex. Chuck'))  !!}
</div>
<div class="form-group">
    {!! Form::label('Last Name') !!}
    {!! Form::text('lastName', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'ex. Yeager'))  !!}
</div>
<div class="form-group">
    {!! Form::label('Phone') !!}
    {!! Form::text('phone', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'ex. 123-456-7890'))  !!}
</div>
<div class="form-group">
    {!! Form::label('Email') !!}
    {!! Form::text('email', null,
    array('required', 'class'=>'form-control',
    'placeholder'=>'ex. you@gmail.com'))  !!}
</div>
<div class="form-group">
    {!! Form::button($submitButtonText, array('class'=>'btn btn-primary', 'type'=>'submit'))  !!}
</div>