<div class="form-group">
    <label for="first" class="col-sm-2 control-label">{!! Form::label('name', 'Name:') !!}</label>
    <div class="col-sm-10">
      {!! Form::text('name', null, array('class' => 'form-control')) !!}
    </div>
  </div>

<div class="space">&nbsp; </div>
  <div class="form-group">
    <label for="second" class="col-sm-2 control-label">{!! Form::label('slug', 'Slug:') !!}</label>
    <div class="col-sm-10">
    {!! Form::text('slug', null, array('class' => 'form-control')) !!}
    </div>
  </div>

<div class="space">&nbsp; </div>
  <div class="form-group">
    <label for="first" class="col-sm-2 control-label">{!! Form::label('completed', 'Completed:') !!}</label>
    <div class="col-sm-10">
      {!! Form::checkbox('completed', null, array('class' => 'form-control')) !!}
    </div>
  </div>

<div class="space">&nbsp; </div>
  <div class="form-group">
    <label for="second" class="col-sm-2 control-label">{!! Form::label('description', 'Description:') !!}</label>
    <div class="col-sm-10">
    {!! Form::textarea('description', null, array('class' => 'form-control')) !!}
    </div>
  </div>

  <div class="space"> &nbsp;</div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      {!! Form::submit($submit_text, ['class'=>'btn btn-info']) !!}
    </div>
  </div>









