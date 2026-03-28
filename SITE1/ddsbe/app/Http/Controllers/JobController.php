<?php
namespace App\Http\Controllers;
use App\Models\Job;
use App\Traits\ApiResponser;

class JobController extends Controller {
    use ApiResponser;

    public function index() {
        return $this->successResponse(Job::all());
    }

    public function show($id) {
        return $this->successResponse(Job::findOrFail($id));
    }
}