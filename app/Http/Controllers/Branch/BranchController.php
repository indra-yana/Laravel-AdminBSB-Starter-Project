<?php

namespace App\Http\Controllers\Branch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Auth;
use Carbon;
use App\Models\Branch;
use Illuminate\Support\Str;

class BranchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => []]);
    }

    public function index()
    {
        return view('backend.branch.index');
    }

    public function create() {
        return view('backend.branch.create');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'string|required',
            'code' => 'string|required|unique:branches,code',
            'description' => 'string|nullable',
        ]);

        if ($validator->fails()) {
            return redirect()
                    ->route('branch.create')
                    ->withErrors($validator)
                    ->withInput()
                    ->with('type', 'danger')
                    ->with('message', '<b>Oh!</b> Please ensure to fill all fields correctly and re-submit the form.');
        }

        $branch = new Branch();
        $branch->name = ucwords($request->name);
        $branch->code = strtoupper(Str::slug($request->code, '-'));
        $branch->description = $request->description;

        if (!$branch->save()) {
            return redirect()
                    ->route('branch.create')
                    ->withInput()
                    ->with('type', 'danger')
                    ->with('message', '<b>Oh!</b> There\'s something wrong with the system. Please contact administrator about this.');
        }

        return redirect()
                ->route('branch.index')
                ->with('type', 'success')
                ->with('message', '<b>Well Done!</b> The data has been successfully saved.');
    }

    public function edit($id) {
        $branch = Branch::findOrFail($id);

        return view('backend.branch.edit', compact('branch'));
    }

    public function update(Request $request) {
        $validator = Validator::make($request->all(), [
            'id' => 'required|numeric|exists:branches,id',
            'name' => 'string|required',
            'code' => 'string|required|unique:branches,code,'.$request->id,
            'description' => 'string|nullable',
        ]);

        if ($validator->fails()) {
            return redirect()
                    ->route('branch.edit', ['id' => $request->id])
                    ->withErrors($validator)
                    ->withInput()
                    ->with('type', 'danger')
                    ->with('message', '<b>Oh!</b> Please ensure to fill all fields correctly and re-submit the form.');
        }

        $branch = Branch::findOrFail($request->id);
        $branch->name = ucwords($request->name);
        $branch->code = strtoupper(Str::slug($request->code, '-'));
        $branch->description = $request->description;

        if (!$branch->save()) {
            return redirect()
                    ->route('branch.edit', ['id' => $request->id])
                    ->withInput()
                    ->with('type', 'danger')
                    ->with('message', '<b>Oh!</b> There\'s something wrong with the system. Please contact administrator about this.');
        }

        return redirect()
                ->route('branch.index')
                ->with('type', 'success')
                ->with('message', '<b>Well Done!</b> The data has been successfully updated.');
    }

    public function delete(Request $request) {
        $branch = Branch::findOrFail($request->get('deleteID'));
        
        if (!$branch->delete()) {
            return redirect()
                    ->route('branch.index')
                    ->with('type', 'danger')
                    ->with('message', '<b>Oh!</b> There\'s something wrong with the system. Please contact administrator about this.');
        }

        return redirect()
                ->route('branch.index')
                ->with('type', 'success')
                ->with('message', '<b>Well Done!</b> The data has been successfully deleted.');
    }

    public function dtIndex() {
        return datatables()->of(Branch::all())->addIndexColumn()->toJson();
    }
}
