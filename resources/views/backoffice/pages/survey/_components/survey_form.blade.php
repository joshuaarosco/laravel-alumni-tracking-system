{{-- <div class="p-3 bg-white b-1">
    <div class="card">
        <div class="card-body">
            @include('backoffice.pages.survey._components.personal_information')
        </div>
    </div>
    
    <div class="card">
        <div class="card-body">
            @include('backoffice.pages.survey._components.questionaire')
            
        </div>
    </div>
    @if(!$survey 
    OR $alumni->gender == null 
    OR $alumni->year_graduated == null 
    OR $alumni->course == null 
    OR $alumni->company == null
    OR $alumni->work_position == null)
    <div class="row">
        <div class="col-md-12">
            <button aria-label="" class="btn btn-success pull-right" type="submit">Submit Response</button>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-md-12">
            <h2 class="mw-80 pull-right">Thank you for your response!</h2>
        </div>
    </div>
    @endif
</div> --}}