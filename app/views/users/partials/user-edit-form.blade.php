
            <div class="form-group @if($errors->has('username')) has-error @endif">
                {{ Form::label('username', 'Username') }}
                {{ Form::text('username', null, ['class' => 'form-control'])}}
            </div>

            <div class="form-group @if($errors->has('first_name')) has-error @endif">
                {{ Form::label('first_name', 'First Name') }}
                {{ Form::text('first_name', null, ['class' => 'form-control'])}}
            </div>
            
            <div class="form-group @if($errors->has('last_name')) has-error @endif">
                {{ Form::label('last_name', 'Last Name') }}
                {{ Form::text('last_name', null, ['class' => 'form-control'])}}
            </div>

            <div class="form-group @if($errors->has('email')) has-error @endif">
                {{ Form::label('email', 'Email') }}
                {{ Form::text('email', null, ['class' => 'form-control'])}}
            </div>

            <div class="form-group @if($errors->has('password')) has-error @endif">
                {{ Form::label('password', 'Password') }}
                {{ Form::password('password', ['class' => 'form-control'])}}
            </div>
            
            <div class="form-group @if($errors->has('password_confirmation')) has-error @endif">
                {{ Form::label('password_confirmation', 'Re-enter Password') }}
                {{ Form::password('password_confirmation', ['class' => 'form-control'])}}
            </div>

            <div class="form-group @if($errors->has('address')) has-error @endif">
                {{ Form::label('address', 'Address') }}
                {{ Form::text('address', null, ['class' => 'form-control'])}}
            </div>
                
            <div class="form-group @if($errors->has('city')) has-error @endif">
                {{ Form::label('city', 'City') }}
                {{ Form::text('city', null, ['class' => 'form-control'])}}
            </div>

            <div class="form-group @if($errors->has('city')) has-error @endif">
                {{ Form::label('state', 'state') }}
                {{ Form::text('state', null, ['class' => 'form-control'])}}
            </div>

            <div class="form-group @if($errors->has('zip_code')) has-error @endif">
                {{ Form::label('zip_code', 'Zip Code') }}
                {{ Form::text('zip_code', null, ['class' => 'form-control'])}}
            </div>
            
            <div class="form-group @if($errors->has('phone')) has-error @endif">
                {{ Form::label('phone', 'Phone Number') }}
                {{ Form::text('phone', null, ['class' => 'form-control'])}}
            </div>
            <div class="col-sm-6 form-group @if($errors->has('profile_img_url')) has-error @endif">
                {{ Form::label('profile_img_url', 'Profile Image') }}
                {{ Form::file('profile_img_url')}}
            </div>

            <button class="btn btn-lrg btn-primary btn-block">Submit</button>
    </div>
                    