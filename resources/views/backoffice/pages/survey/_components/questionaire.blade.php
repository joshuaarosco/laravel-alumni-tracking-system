<div class="row">
    <div class="col-md-12">
        <h3 class="mw-80">Survey Questionaire</h3>
        <br>
        <div id="form-work" class="form-horizontal">
            <div class="form-group row required">
                <label for="question_1"  class="col-md-5 control-label">1. Did program prepare you for</label>
                <div class="col-md-7">
                    <div class="row plr-5">
                        <div class="col-md-6">
                            <label for="question_1_a">a. Your first job?</label>
                            <input type="text" class="form-control m-t-5 {{$errors->has('question_1_a')?'error-input':null}}" id="question_1_a" value="{{old('question_1_a', $survey? $survey->question_1_a:'')}}" placeholder="First job..." name="question_1_a" required {{$survey?'readonly':''}}>
                            @if($errors->has('question_1_a'))
                            <label class="error" for="question_1_a">This field is required.</label>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="question_1_b">b. Current job?</label>
                            <input type="text" class="form-control m-t-5 {{$errors->has('question_1_b')?'error-input':null}}" id="question_1_b" value="{{old('question_1_b', $survey? $survey->question_1_b:'')}}" placeholder="Current job..." name="question_1_b" required {{$survey?'readonly':''}}>
                            @if($errors->has('question_1_b'))
                            <label class="error" for="question_1_b">This field is required.</label>
                            @endif
                        </div>
                    </div>
                    <br>
                    <span class="help">Have you been involved in continuing education? If yes, through what program?</span>
                    <input type="text" name="question_1_yes" value="{{old('question_1_b', $survey? $survey->question_1_yes:'')}}" placeholder="e.g. Name of school or institution" class="form-control" {{$survey?'readonly':''}}>
                </div>
            </div>
            <div class="form-group row required">
                <label for="question_2" class="col-md-5 control-label">2. What did you learn that is the most applicable(useful, most vital) to your current position?</label>
                <div class="col-md-7">
                    <textarea class="form-control {{$errors->has('question_2')?'error-input':null}}" id="question_2" rows="1" name="question_2" required {{$survey?'readonly':''}}>{{old('question_2', $survey? $survey->question_2:'')}}</textarea>
                    @if($errors->has('question_2'))
                    <label class="error" for="question_2">This field is required.</label>
                    @endif
                </div>
            </div>
            <div class="form-group row required">
                <label for="question_3" class="col-md-5 control-label">3. What course or courses do you wish you had taken or been offered?</label>
                <div class="col-md-7">
                    <input type="text" class="form-control {{$errors->has('question_3')?'error-input':null}}" id="question_3" rows="3" value="{{old('question_3', $survey? $survey->question_3:'')}}" name="question_3" required {{$survey?'readonly':''}}>
                    @if($errors->has('question_3'))
                    <label class="error" for="question_3">This field is required.</label>
                    @endif
                </div>
            </div>
            <div class="form-group row required">
                <label for="question_4" class="col-md-5 control-label">4. Would you still make that same decision?</label>
                <div class="col-md-7">
                    <input type="text" class="form-control {{$errors->has('question_4')?'error-input':null}}" id="question_4" rows="3" value="{{old('question_4', $survey? $survey->question_4:'')}}" name="question_4" required {{$survey?'readonly':''}}>
                    @if($errors->has('question_4'))
                    <label class="error" for="question_4">This field is required.</label>
                    @endif
                </div>
            </div>
            <div class="form-group row required">
                <label for="question_5" class="col-md-5 control-label">5. Did [institution] meet your expectations?</label>
                <div class="col-md-7">
                    <textarea class="form-control {{$errors->has('question_5')?'error-input':null}}" id="question_5" rows="3" placeholder="Why? or Why not?" name="question_5" required {{$survey?'readonly':''}}>{{old('question_5', $survey? $survey->question_5:'')}}</textarea>
                    @if($errors->has('question_5'))
                    <label class="error" for="question_5">This field is required.</label>
                    @endif
                </div>
            </div>
            <div class="form-group row required">
                <label for="question_6" class="col-md-5 control-label">6. Are you involved with the school in any way now?</label>
                <div class="col-md-7">
                    <input type="text" class="form-control {{$errors->has('question_6')?'error-input':null}}" id="question_6" rows="3" value="{{old('question_6', $survey? $survey->question_6:'')}}" name="question_6" required {{$survey?'readonly':''}}>
                    @if($errors->has('question_6'))
                    <label class="error" for="question_6">This field is required.</label>
                    @endif
                </div>
            </div>
            <div class="form-group row required">
                <label for="question_7" class="col-md-5 control-label">7. Did you receive course and career counseling?</label>
                <div class="col-md-7">
                    @foreach($question_7 as $index => $question)
                    <div class="row plr-5 m-b-20">
                        <div class="col-md-12">
                            <label for="{{'question_7_'.$index}}">{{$question}}</label>
                            <input type="text" class="form-control {{$errors->has('question_7_'.$index)?'error-input':null}}" id="{{'question_7_'.$index}}" value="{{old('question_7_'.$index, $survey? $survey['question_7_'.$index]:'')}}" placeholder="" name="{{'question_7_'.$index}}" required {{$survey?'readonly':''}}>
                            @if($errors->has('question_7_'.$index))
                            <label class="error" for="{{'question_7_'.$index}}">This field is required.</label>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="form-group row required">
                <label for="question_8" class="col-md-5 control-label">8. Were faculty members in your program approachable?</label>
                <div class="col-md-7">
                    <input type="text" class="form-control {{$errors->has('question_8')?'error-input':null}}" id="question_8" value="{{old('question_8', $survey? $survey->question_8:'')}}" name="question_8" required {{$survey?'readonly':''}}>
                    @if($errors->has('question_8'))
                    <label class="error" for="question_8">This field is required.</label>
                    @endif
                </div>
            </div>
            <div class="form-group row required">
                <label for="question_9" class="col-md-5 control-label">9. Did you feel they were experts in their field?</label>
                <div class="col-md-7">
                    <input type="text" class="form-control {{$errors->has('question_9')?'error-input':null}}" id="question_9" value="{{old('question_9', $survey? $survey->question_9:'')}}" name="question_9" required {{$survey?'readonly':''}}>
                    @if($errors->has('question_9'))
                    <label class="error" for="question_9">This field is required.</label>
                    @endif
                </div>
            </div>
            <div class="form-group row required">
                <label for="question_10" class="col-md-5 control-label">10. Did they share your own research with you?</label>
                <div class="col-md-7">
                    <input type="text" class="form-control {{$errors->has('question_10')?'error-input':null}}" id="question_10" value="{{old('question_10', $survey? $survey->question_10:'')}}" name="question_10" required {{$survey?'readonly':''}}>
                    @if($errors->has('question_10'))
                    <label class="error" for="question_10">This field is required.</label>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>