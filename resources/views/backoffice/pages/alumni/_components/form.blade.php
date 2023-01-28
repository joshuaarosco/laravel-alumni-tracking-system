<div class="row">
    <div class="col-md-4">
        <div class="form-group form-group-default required {{$errors->has('fname')?'has-error':null}}">
            <label>First Name</label>
            <input type="text" class="form-control {{Str::lower($title)}}-fname" name="fname" value="{{old('fname')}}" id="fname" placeholder="" maxlength="30" required>
        </div>
        @if($errors->has('fname'))
        <label class="error" for="fname">{{$errors->first('fname')}}</label>
        @endif
    </div>
    <div class="col-md-4">
        <div class="form-group form-group-default">
            <label>Middle Name</label>
            <input type="text" class="form-control {{Str::lower($title)}}-mname" name="mname" value="{{old('mname')}}" id="mname" placeholder="" maxlength="30">
        </div>
        @if($errors->has('mname'))
        <label class="error" for="mname">{{$errors->first('mname')}}</label>
        @endif
    </div>
    <div class="col-md-4">
        <div class="form-group form-group-default required {{$errors->has('lname')?'has-error':null}}">
            <label>Last Name</label>
            <input type="text" class="form-control {{Str::lower($title)}}-lname" name="lname" value="{{old('lname')}}" id="lname" placeholder="" maxlength="30" required>
        </div>
        @if($errors->has('lname'))
        <label class="error" for="lname">{{$errors->first('lname')}}</label>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group form-group-default {{$errors->has('course')?'has-error':null}}">
            <label>Course</label>
            <select class="form-control {{Str::lower($title)}}-course" name="course" id="course">
                <option value=""></option>
                @foreach ($courses as $index => $course)
                    <option value="{{$course}}">{{$course}}</option>
                @endforeach
            </select>
            @if($errors->has('course'))
            <label class="error" for="course">{{$errors->first('course')}}</label>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group form-group-default required {{$errors->has('email')?'has-error':null}}">
            <label>Email</label>
            <input type="email" class="form-control {{Str::lower($title)}}-email" name="email" value="{{old('email')}}" id="email" placeholder="" maxlength="30" required>
            @if($errors->has('email'))
            <label class="error" for="email">{{$errors->first('email')}}</label>
            @endif
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-group-default">
            <label>Contact Number</label>
            <input type="text" class="form-control {{Str::lower($title)}}-contact_number" name="contact_number" value="{{old('contact_number')}}" placeholder="" maxlength="30">
        </div>
    </div>
</div>
