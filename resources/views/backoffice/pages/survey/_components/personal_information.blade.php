<h2 class="mw-80">{{ auth()->user()->type == 'alumni'? 'Personal':'Alumni'}} Information</h2>
<p class="fs-16 mw-80 m-b-40">Alumni Tracking System of CCS of Pangasinan State University Lingayen Campus</p>
<div id="form-personal">
    <div class="row">
        <div class="col-xl-12">
            <div class="form-group form-group-default">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="{{auth()->check()?$alumni->user->name:'---'}}" readonly>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="form-group form-group-default required {{$errors->has('gender')?'has-error':null}}">
                <label>Gender</label>
                <select class="form-control" aria-required="true" name="gender" id="" required {{$alumni->gender?'readonly':''}}>
                    @foreach ($gender as $index => $g)
                    @if(auth()->check() AND $alumni AND $alumni->gender == $index)
                    <option selected value="{{$index}}">{{$g}}</option>
                    @else
                    <option value="{{$index}}">{{$g}}</option>
                    @endif
                    @endforeach
                </select>
                @if($errors->has('gender'))
                <label class="error" for="gender">{{$errors->first('gender')}}</label>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="form-group form-group-default required {{$errors->has('year_graduated')?'has-error':null}}">
                <label>Year Graduated</label>
                <input type="text" class="form-control error" placeholder="e.g. 2018" name="year_graduated" value="{{old('year_graduated', auth()->check()? $alumni->year_graduated:'')}}"  required {{$alumni->year_graduated?'readonly':''}}>
                @if($errors->has('year_graduated'))
                <label class="error" for="year_graduated">{{$errors->first('year_graduated')}}</label>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="form-group form-group-default required {{$errors->has('course')?'has-error':null}}">
                <label>Course</label>
                <select class="form-control" name="course" id="course" required {{$alumni->course?'readonly':''}}>
                    <option value="">Please choose a course</option>
                    @foreach ($courses as $index => $course)
                    @if(auth()->check() AND $alumni AND $alumni->course == $course)
                    <option selected value="{{$course}}">{{$course}}</option>
                    @else
                    <option value="{{$course}}">{{$course}}</option>
                    @endif
                    @endforeach
                </select>
                @if($errors->has('course'))
                <label class="error" for="course">{{$errors->first('course')}}</label>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="form-group form-group-default required {{$errors->has('company')?'has-error':null}}" >
                <label>Company</label>
                <input type="text" class="form-control" name="company" value="{{old('company', auth()->check()? $alumni->company:'')}}" required {{$alumni->company?'readonly':''}}>
                @if($errors->has('company'))
                <label class="error" for="company">{{$errors->first('company')}}</label>
                @endif
            </div>
        </div>
        <div class="col-xl-6">
            <div class="form-group form-group-default required {{$errors->has('work_position')?'has-error':null}}" >
                <label>Work / Position</label>
                <input type="text" class="form-control" name="work_position" value="{{old('work_position', auth()->check()? $alumni->work_position:'')}}" required {{$alumni->work_position?'readonly':''}}>
                @if($errors->has('work_position'))
                <label class="error" for="work_position">{{$errors->first('work_position')}}</label>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p class="small-text hint-text">Note: make sure the above information is correct.. </p>
        </div>
    </div>
</div>