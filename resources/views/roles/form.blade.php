<div class="form-group">
    {!! Form::label('name','角色姓名:')!!}
    {!! Form::text('name',null, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::label('aid','區域編號:')!!}
    {!! Form::select('aid', $areas, $areaSelected, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('stars','星數:')!!}
    {!! Form::text('stars',null, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::label('property','屬性:')!!}
    {!! Form::text('property',null, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::label('gender','性別:')!!}
    {!! Form::text('gender',null, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::label('weapon','武器:')!!}
    {!! Form::text('weapon',null, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::label('constellation','星之座:')!!}
    {!! Form::text('constellation',null, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::label('permanent_limited','常駐/限定:')!!}
    {!! Form::text('permanent_limited',null, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::label('race','種族:')!!}
    {!! Form::text('race',null, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::label('birthdate','生日:')!!}
    {!! Form::date('birthdate',null, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::label('height ','身高:')!!}
    {!! Form::text('height ',null, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::label('version','版本:')!!}
    {!! Form::text('version',null, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
{!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>