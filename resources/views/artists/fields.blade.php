<!-- Artist Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('artist_name', 'Artist Name:') !!}
    {!! Form::text('artist_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Art Type Field -->
<div class="form-group col-sm-12">
    {!! Form::label('art_type', 'Art Type:') !!}
    {!! Form::text('art_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Media Field -->
<div class="form-group col-sm-12">
    {!! Form::label('media', 'Media:') !!}
    {!! Form::text('media', null, ['class' => 'form-control']) !!}
</div>

<!-- About Artist Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('about_artist', 'About Artist:') !!}
    {!! Form::textarea('about_artist', null, ['class' => 'form-control']) !!}
</div>

