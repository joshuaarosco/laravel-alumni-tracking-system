<div class="row">
    <div class="col-md-12">
        <div class="form-group form-group-default required {{$errors->has('file')?'has-error':null}}">
            <label>Thumbnail</label>
            <input type="file" class="form-control {{Str::lower($title)}}-file" name="file" required>
            @if($errors->has('file'))
            <label class="error" for="file">{{$errors->first('file')}}</label>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group form-group-default required {{$errors->has('title')?'has-error':null}}">
            <label>Title</label>
            <input type="text" class="form-control {{Str::lower($title)}}-title" name="title" value="{{old('title')}}" id="title" placeholder="" maxlength="30" required>
            @if($errors->has('title'))
            <label class="error" for="title">{{$errors->first('title')}}</label>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group form-group-default required {{$errors->has('date')?'has-error':null}}">
            <label>Event Date</label>
            <input type="date" class="form-control {{Str::lower($title)}}-date" name="date" value="{{old('date')}}" id="date" placeholder="" maxlength="30" required>
            @if($errors->has('date'))
            <label class="error" for="date">{{$errors->first('date')}}</label>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group form-group-default required {{$errors->has('content')?'has-error':null}}">
            <label>Content</label>
            <textarea rows="5" class="form-control {{Str::lower($title)}}-content" style="height: 200px;" name="content" value="" id="content" placeholder="" maxlength="30" required>{{old('content')}}</textarea>
            @if($errors->has('content'))
            <label class="error" for="content">{{$errors->first('content')}}</label>
            @endif
        </div>
    </div>
</div>
