<!-- Name Field -->
<div class="form-group col-sm-6">
      {!! Form::label('name', __('models/categories.fields.name').':') !!}
      {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255]) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
  <div class="form-check">
    {!! Form::hidden('status', 0, ['class' => 'form-check-input']) !!}
    {!! Form::checkbox('status', '1', null, ['class' => 'form-check-input']) !!}
    {!! Form::label('status', __('models/categories.fields.status').':', ['class' => 'form-check-label']) !!}
  </div>
</div>


<!-- Queue Field -->
<div class="form-group col-sm-6">
  {!! Form::label('queue', __('models/categories.fields.queue').':') !!}
  {!! Form::number('queue', null, ['class' => 'form-control']) !!}
</div>

<!-- Parent Id Field -->
<div class="form-group col-sm-6">
  {!! Form::label('parent_id', __('models/categories.fields.parent_id').':') !!}
  {!! Form::select('parent_id', [], null, ['class' => 'form-control custom-select']) !!}
</div>
