<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Employee;
use App\Models\User;
use App\Models\module_permission;

class EmployeeController extends Controller
{
    // all employee card view
    public function cardAllEmployee(Request $request)
    {

        $users = DB::table('users')
                    ->join('employees', 'users.rec_id', '=', 'employees.employee_id')
                    ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                    ->get(); 
        $userList = DB::table('users')->get();
        $permission_lists = DB::table('permission_lists')->get();
        return view('form.allemployeecard',compact('users','userList','permission_lists'));
    }
    // all employee list
    public function listAllEmployee()
    {
        $users = DB::table('users')
                    ->join('employees', 'users.rec_id', '=', 'employees.employee_id')
                    ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                    ->get();
        $userList = DB::table('users')->get();
        $permission_lists = DB::table('permission_lists')->get();
        return view('form.employeelist',compact('users','userList','permission_lists'));
    }

    // save data employee
    public function saveRecord(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|string|email',
            'birth_date'   => 'required|string|max:255',
            'gender'      => 'required|string|max:255',
            'employee_id' => 'required|string|max:255',
            'company'     => 'required|string|max:255',
        ]);

        DB::beginTransaction();
        try{
                $dt       = Carbon::now();
                $todayDate = $dt->toDayDateTimeString();

                $employee = new Employee;
                $employee->name         = $request->name;
                $employee->email        = $request->email;
                $employee->birth_date   = $request->birth_date;
                $employee->gender       = $request->gender;
                $employee->employee_id  = $request->employee_id;
                $employee->company      = $request->company;
                $employee->save();      
                DB::commit();
                Toastr::success('Add new employee successfully :)','Success');
                return redirect()->route('all/employee/card');
            }catch(\Exception $e)  {
                DB::rollback();
                Toastr::error('Add new employee Failed :)','Error');
                return redirect()->back();
            }}}


//     // view edit record
//     public function viewRecord($employee_id)
//     {
//         $permission = DB::table('employees')
//             ->join('module_permissions', 'employees.employee_id', '=', 'module_permissions.employee_id')
//             ->select('employees.*', 'module_permissions.*')
//             ->where('employees.employee_id','=',$employee_id)
//             ->get();
//         $employees = DB::table('employees')->where('employee_id',$employee_id)->get();
//         return view('form.edit.editemployee',compact('employees','permission'));
//     }
//     // update record employee
//     public function updateRecord( Request $request)
//     {
//         DB::beginTransaction();
//         try{
//             // update table Employee
//             $updateEmployee = [
//                 'id'=>$request->id,
//                 'name'=>$request->name,
//                 'email'=>$request->email,
//                 'birth_date'=>$request->birth_date,
//                 'gender'=>$request->gender,
//                 'employee_id'=>$request->employee_id,
//                 'company'=>$request->company,
//             ];
//             // update table user
//             $updateUser = [
//                 'id'=>$request->id,
//                 'name'=>$request->name,
//                 'email'=>$request->email,
//             ];

//             // update table module_permissions
//             for($i=0;$i<count($request->id_permission);$i++)
//             {
//                 $UpdateModule_permissions = [
//                     'employee_id' => $request->employee_id,
//                     'module_permission' => $request->permission[$i],
//                     'id'                => $request->id_permission[$i],
//                     'read'              => $request->read[$i],
//                     'write'             => $request->write[$i],
//                     'create'            => $request->create[$i],
//                     'delete'            => $request->delete[$i],
//                     'import'            => $request->import[$i],
//                     'export'            => $request->export[$i],
//                 ];
//                 module_permission::where('id',$request->id_permission[$i])->update($UpdateModule_permissions);
//             }

//             User::where('id',$request->id)->update($updateUser);
//             Employee::where('id',$request->id)->update($updateEmployee);
        
//             DB::commit();
//             Toastr::success('updated record successfully :)','Success');
//             return redirect()->route('all/employee/card');
//         }catch(\Exception $e){
//             DB::rollback();
//             Toastr::error('updated record fail :)','Error');
//             return redirect()->back();
//         }
//     }
//     // delete record
//     public function deleteRecord($employee_id)
//     {
//         DB::beginTransaction();
//         try{

//             Employee::where('employee_id',$employee_id)->delete();
//             module_permission::where('employee_id',$employee_id)->delete();

//             DB::commit();
//             Toastr::success('Delete record successfully :)','Success');
//             return redirect()->route('all/employee/card');

//         }catch(\Exception $e){
//             DB::rollback();
//             Toastr::error('Delete record fail :)','Error');
//             return redirect()->back();
//         }
//     }

//     // employee profile
//     public function profileEmployee($rec_id)
//     {
//         $users = DB::table('profile_information')
//                 ->join('users', 'users.rec_id', '=', 'profile_information.rec_id')
//                 ->select('profile_information.*', 'users.*')
//                 ->where('profile_information.rec_id','=',$rec_id)
//                 ->first();

//         $user = DB::table('users')->where('rec_id',$rec_id)->get();
//         return view('form.employeeprofile',compact('user','users'));
//     }
// }
