
    <div class='form-group  @if ($errors->has('state_name')) has-error @endif'>
        <label for='state_name' class='col-sm-3 control-label'>Name<span style='color:red;'> *</span></label>
        <div class='col-sm-9'>
            {{ Form::text('state_name', null, ['class'=>'form-control','placeholder'=>'','maxlength'=>'35']) }}
            @if ($errors->has('state_name')) <p class="help-block">{{ $errors->first('state_name') }}</p> @endif
        </div>
    </div>

    <div class='form-group'>
        <div class="col-sm-offset-3 col-sm-9">
            <a class="btn btn-default" href="/states" role="button">Cancel</a>
            {{ Form::submit('Save', ['class'=>'btn btn-primary']) }}
        </div>
    </div>
