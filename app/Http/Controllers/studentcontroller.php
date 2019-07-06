<?php

namespace App\Http\Controllers;
use App\student;

use Illuminate\Http\Request;
use Illuminate\Http\Post;



class studentcontroller extends Controller
{
	public function index()
	{
		$students = student::paginate(10);
		return View('welcome', compact('students'));
	}


	public function create()
	{
		return View('create');
	}

	public function store(Request $request)
		{
			$this->validate($request,[
				'firstname' => 'required',
				'lastname' => 'required',
				'email' => 'required',
				'phone' => 'required'
			]);

			$student = new student;
			$student->first_name = $request->firstname;
			$student->last_name = $request->lastname;
			$student->email = $request->email;
			$student->phone = $request->phone;
			$student->save();
			return redirect(route('home'))->with('successMsg','Student successfully added');

		}

		public function edit($id)
		{
			$student = student::find($id);
			return view ('edit',compact('student'));
		}

		public function update(Request $request,$id )
		{
			$this->validate($request,[
				'firstname' => 'required',
				'lastname' => 'required',
				'email' => 'required',
				'phone' => 'required'
			]);

			$student = student::find($id);
			$student->first_name = $request->firstname;
			$student->last_name = $request->lastname;
			$student->email = $request->email;
			$student->phone = $request->phone;
			$student->save();
			return redirect(route('home'))->with('successMsg','Student successfully Update');
		}

		public function delete($id)
		{
			student::find($id)->delete();
			return redirect(route('home'))->with('successMsg','Student successfully Delete');
			//return $id;
			//student::find($id)->delete();
			//return redirect(route('home'))->with('successMsg','Student successfully Update');
		}

}
