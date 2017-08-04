<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\activity;
use App\plan;
use App\accomplishment;
use App\machine;
use App\fields_table;
use App\fuel_report_table;
class api extends Controller
{
    // Id based reading from the tables
    public function getActivityId($id){
    	
    	return response()->json(activity::find($id));
   
    }
    public function getPlanId($id){
    	return response()->json(plan::find($id));
    }
    public function getAccomplishmentId($id){
    	return response()->json(accomplishment::find($id));
    }
    public function getMachineId($id){
    	return response()->json(machine::find($id));
    }
    public function getFieldsTableId($id){
    	return response()->json(fields_table::find($id));
    }
    public function getFuelReportTableId($id){
    	return response()->json(fuel_report_table::find($id));
    }

    //Read all of the tables

    public function getActivity(){
    	return response()->json(activity::all());
    }
    public function getPlan(){
    	return response()->json(plan::all());
    }
    public function getAccomplishment(){
    	return response()->json(accomplishment::all());
    }
    public function getMachine(){
    	return response()->json(machine::all());
    }
    public function getFieldsTable(){
    	return response()->json(fields_table::all());
    }
    public function getFuelReportTable(){
    	return response()->json(fuel_report_table::all());
    }

    //store data

    public function storeActivity(Request $request){
    	$activity = activity::create($request->all());
		return response()->json($activity, 201);
    }
    public function storePlan(Request $request){
    	$plan = plan::create($request->all());
		return response()->json($plan, 201);
    }
    public function storeAccomplishment(Request $request){
    	$accomplishment = accomplishment::create($request->all());
		return response()->json($accomplishment, 201);
    }
    public function storeMachine(Request $request){
    	$machine = machine::create($request->all());
		return response()->json($machine, 201);
    }
    public function storeFieldsTable(Request $request){
    	$fields_table = fields_table::create($request->all());
		return response()->json($fields_table, 201);
    }
    public function storeFuelReportTable(Request $request){
    	$fuel_report_table = fuel_report_table::create($request->all());
		return response()->json($fuel_report_table, 201);
    }

    //delete

    public function deleteActivity($id){
    	activity::find($id)->delete();
		return 204;
    }
    public function deletePlan($id){
    	plan::find($id)->delete();
		return 204;
    }
    public function deleteAccomplishment($id){
    	accomplishment::find($id)->delete();
		return 204;
    }
    public function deleteMachine($id){
    	machine::find($id)->delete();
		return 204;
    }
    public function deleteField($id){
    	fields_table::find($id)->delete();
		return 204;
    }
    public function deleteFuelReport($id){
    	fuel_report_table::find($id)->delete();
		return 204;
    }

    //update

    public function updateActivity(Request $request, $id){
    	$activity = activity::findOrFail($id);
		$activity->update($request->all());
		return $activity;
    }
    public function updatePlan(Request $request, $id){
    	$plan = plan::findOrFail($id);
		$plan->update($request->all());
		return $plan;
    }
    public function updateAccomplishment(Request $request, $id){
    	$accomplishment = accomplishment::findOrFail($id);
		$accomplishment->update($request->all());
		return $accomplishment;
    }
    public function updateMachine(Request $request, $id){
    	$machine = machine::findOrFail($id);
		$machine->update($request->all());
		return $machine;
    }
    public function updateFieldsTable(Request $request, $id){
    	$fields_table = fields_table::findOrFail($id);
		$fields_table->update($request->all());
		return $fields_table;
    }
    public function updateFuelReport(Request $request, $id){
    	$fuel_report_table = fuel_report_table::findOrFail($id);
		$fuel_report_table->update($request->all());
		return $fuel_report_table;
    }

}