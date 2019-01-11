<?php

namespace App\Http\Controllers\Admin;

use App\Download;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreDownloadsRequest;
use App\Http\Requests\Admin\UpdateDownloadsRequest;

class DownloadsController extends Controller
{
    /**
     * Display a listing of Download.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('download_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('download_delete')) {
                return abort(401);
            }
            $downloads = Download::onlyTrashed()->get();
        } else {
            $downloads = Download::all();
        }

        return view('admin.downloads.index', compact('downloads'));
    }

    /**
     * Show the form for creating new Download.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('download_create')) {
            return abort(401);
        }
        
        $products = \App\Product::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.downloads.create', compact('products'));
    }

    /**
     * Store a newly created Download in storage.
     *
     * @param  \App\Http\Requests\StoreDownloadsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDownloadsRequest $request)
    {
        if (! Gate::allows('download_create')) {
            return abort(401);
        }
        $download = Download::create($request->all());



        return redirect()->route('admin.downloads.index');
    }


    /**
     * Show the form for editing Download.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('download_edit')) {
            return abort(401);
        }
        
        $products = \App\Product::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $download = Download::findOrFail($id);

        return view('admin.downloads.edit', compact('download', 'products'));
    }

    /**
     * Update Download in storage.
     *
     * @param  \App\Http\Requests\UpdateDownloadsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDownloadsRequest $request, $id)
    {
        if (! Gate::allows('download_edit')) {
            return abort(401);
        }
        $download = Download::findOrFail($id);
        $download->update($request->all());



        return redirect()->route('admin.downloads.index');
    }


    /**
     * Display Download.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('download_view')) {
            return abort(401);
        }
        $download = Download::findOrFail($id);

        return view('admin.downloads.show', compact('download'));
    }


    /**
     * Remove Download from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('download_delete')) {
            return abort(401);
        }
        $download = Download::findOrFail($id);
        $download->delete();

        return redirect()->route('admin.downloads.index');
    }

    /**
     * Delete all selected Download at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('download_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Download::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Download from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('download_delete')) {
            return abort(401);
        }
        $download = Download::onlyTrashed()->findOrFail($id);
        $download->restore();

        return redirect()->route('admin.downloads.index');
    }

    /**
     * Permanently delete Download from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('download_delete')) {
            return abort(401);
        }
        $download = Download::onlyTrashed()->findOrFail($id);
        $download->forceDelete();

        return redirect()->route('admin.downloads.index');
    }
}
