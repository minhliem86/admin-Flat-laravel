<?php

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\ProjectRepository;

class ProjectController extends Controller
{
    protected $projectRepo;

    public function __construct(ProjectRepository $projectRepo)
    {
        $this->projectRepo = $projectRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inst = $this->projectRepo->all();
        return view('Admin::pages.project.index', compact('inst'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin::pages.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = $this->projectRepo->getOrder();
        $data = [
          'video_id' => $request->input('video_id'),
          'title' => $request->input('title'),
          'description' => $request->input('description'),
          'description' => $request->input('description'),
          'order' => $order,
        ];
        $this->projectRepo->create($data);
        return view('Admin::pages.project.index')->with('success','Create Successful.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inst = $this->projectRepo->find($id);
        return view('Admin::pages.project.edit', compact('inst'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $data = [
        'video_id' => $request->input('video_id'),
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'description' => $request->input('description'),
        'order' => $request->input('order'),
        'status' => $request->input('status'),
      ];
      if($this->projectRepo->update($data, $id)){
        return view('Admin::pages.project.index')->with('success', 'Update Successful.');
      }
        return view('Admin::pages.project.index')->with('error', 'Update Fail.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($this->projectRepo->delete($id)){
          return redirect()->back()->with('success', 'Delete Successful.');
        }
          return redirect()->back()->with('success', 'Delete Fail.');
    }
}
