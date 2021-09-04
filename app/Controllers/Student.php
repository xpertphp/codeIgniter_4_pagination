<?php 

namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\StudentModel;
 
class Student extends Controller
{
 
	public function __construct()
    {
        
    }
    public function index()
    {   
		$model = new StudentModel(); 
 
        $data = [
            'students' => $model->paginate(5),
            'pager' => $model->pager
        ];
        
        return view('list', $data);
    }    
 
}

?>