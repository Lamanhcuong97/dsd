<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KPIManagementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listKPIEmployees(Request $request)
    {
        $list_employee = json_decode(file_get_contents('https://pmptn13.herokuapp.com/users'));

        return view('dsKPI_nhanvien', compact('list_employee'));
    }

    public function listKPIProjects(Request $request)
    {
        $list_kpi_projects = null;
        $isEmpty = true;
        if (isset($request->year)) {
            $result = json_decode(@file_get_contents('http://microserviceteam2hust.000webhostapp.com/api/microservice/kpi/projects/'. $request->year .'?token=4614718215946240'));
            if(!is_null($result)){
                    $list_kpi_projects = $result->data;
                    $isEmpty = isset($result->data->result) ? true : false;
            }
        }elseif(isset($request->max_min)){
            $result = json_decode(@file_get_contents('http://microserviceteam2hust.000webhostapp.com/api/microservice/project/kpi/' . $request->max_min));
            if(!is_null($result)){
                $list_kpi_projects = $result->data;
                $isEmpty = isset($result->data->result) ? true : false;
            }
        }else{
            $result = json_decode(@file_get_contents('https://microserviceteam2hust.000webhostapp.com/api/microservice/kpi/projects'));
            if(!is_null($result)){
                $list_kpi_projects = $result->data;
                $isEmpty = isset($result->data->result) ? true : false;
            }
        }

        return view('dsKPI_du_an', compact('list_kpi_projects', 'isEmpty'));
    }

    
    public function detailKPIProject(Request $request, $id)
    {
        $list_kpi_project = null;
        $isEmpty = true;
        if (isset($request->year)) {
            $result = json_decode(@file_get_contents('http://microserviceteam2hust.000webhostapp.com/api/microservice/kpi/projects/'. $request->year .'?token=4614718215946240'));
            if(!is_null($result)){
                    $list_kpi_project = $result->data;
                    $isEmpty = isset($result->data->result) ? true : false;
            }
        }elseif(isset($request->max_min)){
            $result = json_decode(@file_get_contents('http://microserviceteam2hust.000webhostapp.com/api/microservice/project/kpi/' . $request->max_min));
            if(!is_null($result)){
                $list_kpi_project = $result->data;
                $isEmpty = isset($result->data->result) ? true : false;
            }
        }else{
            $result = json_decode(@file_get_contents('http://microserviceteam2hust.000webhostapp.com/api/microservice/kpi/project/' . $id . '?token=4614718215946240'));
            if(!is_null($result)){
                $list_kpi_project = $result->data;
                $isEmpty = isset($result->data->result) ? true : false;
                $kpi_standard = array_column((array)$list_kpi_project->standard, 'data');
            }
        }

       

        return view('chitiet_KPIduan', compact('id', 'list_kpi_project', 'kpi_standard'));
    }

    public function update_criteria(Request $request, $id)
    {
        dd($request);
        $data = json_encode($request->all());
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://microserviceteam2hust.000webhostapp.com/api/microservice/kpi/update/project');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $headers = array();
        $headers[] = 'Accept: application/json';
        $headers[] = 'Content-Type: application/json';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER , false);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        return redirect()->route('chitiet_KPIduan', $id);
    }

    public function listKPIDepartments(Request $request)
    {
       if (isset($request->sel_depart)) {
            $KPI_depart_months = (array) json_decode(file_get_contents('http://18.217.21.235:8083/api/v1/departmentKPI/getDepartmentKPIAllMonthOfYear?departmentId=' . $request->sel_depart . '&year=2019'))->data->timeAndKPI;
            $department = (array) json_decode(file_get_contents('http://206.189.34.124:5000/api/group8/departments/' . $request->sel_depart))->department;
       } else {
            $KPI_depart_months = (array) json_decode(file_get_contents('http://18.217.21.235:8083/api/v1/departmentKPI/getDepartmentKPIAllMonthOfYear?departmentId=1&year=2019'))->data->timeAndKPI;
            $department = (array) json_decode(file_get_contents('http://206.189.34.124:5000/api/group8/departments/1'))->department;
       }
       
       
        $a = file_get_contents('http://206.189.34.124:5000/api/group8/departments');
        // echo $a;  
        $response = json_decode($a);

        $list_department = $response->departments;

        return view('dsKPI_phongban', compact('list_department', 'KPI_depart_months', 'department'));
    }

  
}
