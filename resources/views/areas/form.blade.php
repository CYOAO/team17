<div class="form-group">
     {!! Form::label('name', '名稱：') !!}
     {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
     {!! Form::label('position', '位置：') !!}
     {!! Form::text('position', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
     {!! Form::label('element', '元素：') !!}
     {!! Form::text('element', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
     {!! Form::label('belief', '信仰：') !!}
     {!! Form::text('belief', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
     {!! Form::label('god', '信奉神明：') !!}
     {!! Form::text('god', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
     {!! Form::label('ruler', '統治者：') !!}
     {!! Form::text('ruler', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
     {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>