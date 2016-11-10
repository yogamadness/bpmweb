<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $permit->id !!}</p>
</div>

<!-- Lat Field -->
<div class="form-group">
    {!! Form::label('lat', 'Lat:') !!}
    <p>{!! $permit->lat !!}</p>
</div>

<!-- Long Field -->
<div class="form-group">
    {!! Form::label('long', 'Long:') !!}
    <p>{!! $permit->long !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $permit->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $permit->updated_at !!}</p>
</div>

