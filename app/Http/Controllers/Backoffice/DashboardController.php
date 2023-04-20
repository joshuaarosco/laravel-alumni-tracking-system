<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Domain\Interfaces\Repositories\Backoffice\ISurveyRepository;
use App\Domain\Interfaces\Repositories\Backoffice\IAlumniRepository;
use App\Domain\Interfaces\Repositories\Backoffice\IEventsRepository;

class DashboardController extends Controller
{
    public function __construct(ISurveyRepository $survey, IAlumniRepository $alumni, IEventsRepository $event){
        $this->survey = $survey;
        $this->alumni = $alumni;
        $this->event = $event;
    }
    //Do some magic
    public function index(){
        $survey = $this->survey->fetch();
        $alumni = $this->alumni->fetch();

        $this->data['total_survey'] = $survey->count();
        $this->data['total_alumni'] = $alumni->count();
        $this->data['group_by_course'] = $alumni->groupBy('course');
        $this->data['group_by_year_graduated'] = $alumni->groupBy('year_graduated');
        $this->data['events'] = $this->event->fetch();
    	return view('backoffice.index', $this->data);
    }
}
