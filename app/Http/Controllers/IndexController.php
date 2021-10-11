<?php

namespace App\Http\Controllers;

use App\Person;
use App\Staff;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index()
    {
    	$men=Person::all();
        $firstquery = Person::select('FIO')->where([['Stage', '>=', '5'],['Stage', '<=', '15']])->get();
        $secondquery = Person::select('FIO','Stage')->where([['Staff', '=', '1']])->get();
        $thirdquery = Person::all()->count();
        $fourthquery = Person::select('staff.staff')->distinct()->leftjoin('Staff','Staff.id','=','Person.Staff')->get();

        return view('page')->with(['men'=>$men, 'firstquery'=>$firstquery, 'secondquery'=>$secondquery, 'thirdquery'=>$thirdquery,'fourthquery'=>$fourthquery ]); 
    }       
    public function Show($id)
    {
        $man=Person::select(['id','FIO','Phone','Stage','Staff','Image'])->where('id',$id)->first();
        $staffname=Staff::select(['staff'])->where('id',$man->Staff)->first();
        return view('resume-content')->with(['man'=>$man, 'staffname'=>$staffname]);
    }
    public function ListStaff()
    {
        $staffs=Staff::select(['id','staff'])->get();  
        return view('liststaff')->with(['staffs'=>$staffs]);
    }
    public function ShowStaff($id)
    {
        $staffname=Staff::select(['id','staff'])->where('id',$id)->first();
        $man=Person::select()->where('Staff','=', $id)->get();
        return view('showstaff')->with(['staffname'=>$staffname, 'man'=>$man]);
    }
    public function add()
    {
        return view('add-content')->with(['header'=>'Резюме и вакансии']);
    }
        public function Store(Request $request)
    {
        $this->validate($request,['FIO' => 'required|max:255', 'Phone' => 'required', 'Stage' => 'required', 'Staff' => 'required', 'Image' => 'required']);
        //dump($request->all());// что прочитано из формы
        $data=$request->all();
        $resume=new Person;
        $resume->fill($data);
        //dump($resume); // что передано в таблицу
        $resume->save();
        return redirect('/');
    }
}
