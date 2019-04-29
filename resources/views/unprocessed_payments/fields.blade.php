<!-- Payment Mode Field -->
<div class="form-group col-sm-12">
    {!! Form::label('payment_mode', 'Payment Mode:') !!}
    {!! Form::text('payment_mode', null, ['class' => 'form-control']) !!}
</div>

<!-- House Number Field -->
<div class="form-group col-sm-12">
    {!! Form::label('house_number', 'House Number:') !!}
    {!! Form::text('house_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Tenant Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('tenant_id', 'Tenant Id:') !!}
    {!! Form::number('tenant_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Ref Number Field -->
<div class="form-group col-sm-12">
    {!! Form::label('ref_number', 'Ref Number:') !!}
    {!! Form::text('ref_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-12">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::number('amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Paybill Field -->
<div class="form-group col-sm-12">
    {!! Form::label('paybill', 'Paybill:') !!}
    {!! Form::text('paybill', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Number Field -->
<div class="form-group col-sm-12">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Billrefnumber Field -->
<div class="form-group col-sm-12">
    {!! Form::label('BillRefNumber', 'Billrefnumber:') !!}
    {!! Form::text('BillRefNumber', null, ['class' => 'form-control']) !!}
</div>

<!-- Transid Field -->
<div class="form-group col-sm-12">
    {!! Form::label('TransID', 'Transid:') !!}
    {!! Form::text('TransID', null, ['class' => 'form-control']) !!}
</div>

<!-- Transtime Field -->
<div class="form-group col-sm-12">
    {!! Form::label('TransTime', 'Transtime:') !!}
    {!! Form::date('TransTime', null, ['class' => 'form-control']) !!}
</div>

<!-- Firstname Field -->
<div class="form-group col-sm-12">
    {!! Form::label('FirstName', 'Firstname:') !!}
    {!! Form::text('FirstName', null, ['class' => 'form-control']) !!}
</div>

<!-- Middlename Field -->
<div class="form-group col-sm-12">
    {!! Form::label('middleName', 'Middlename:') !!}
    {!! Form::text('middleName', null, ['class' => 'form-control']) !!}
</div>

<!-- Lastname Field -->
<div class="form-group col-sm-12">
    {!! Form::label('LastName', 'Lastname:') !!}
    {!! Form::text('LastName', null, ['class' => 'form-control']) !!}
</div>

<!-- Received On Field -->
<div class="form-group col-sm-12">
    {!! Form::label('received_on', 'Received On:') !!}
    {!! Form::date('received_on', null, ['class' => 'form-control']) !!}
</div>

<!-- Client Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('client_id', 'Client Id:') !!}
    {!! Form::number('client_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Created By Field -->
<div class="form-group col-sm-12">
    {!! Form::label('created_by', 'Created By:') !!}
    {!! Form::number('created_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', false) !!}
        {!! Form::checkbox('status', '1', null) !!} 1
    </label>
</div>

<!-- Updated By Field -->
<div class="form-group col-sm-12">
    {!! Form::label('updated_by', 'Updated By:') !!}
    {!! Form::number('updated_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Bank Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('bank_id', 'Bank Id:') !!}
    {!! Form::number('bank_id', null, ['class' => 'form-control']) !!}
</div>

