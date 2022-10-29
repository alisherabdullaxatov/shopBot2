<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', __('models/categories.fields.name').':') !!}
    <p>{{ $category->name }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', __('models/categories.fields.status').':') !!}
    <p>{{ $category->status }}</p>
</div>

<!-- Queue Field -->
<div class="col-sm-12">
    {!! Form::label('queue', __('models/categories.fields.queue').':') !!}
    <p>{{ $category->queue }}</p>
</div>

<!-- Parent Id Field -->
<div class="col-sm-12">
    {!! Form::label('parent_id', __('models/categories.fields.parent_id').':') !!}
    <p>{{ $category->parent_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', __('models/categories.fields.created_at').':') !!}
    <p>{{ $category->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', __('models/categories.fields.updated_at').':') !!}
    <p>{{ $category->updated_at }}</p>
</div>

