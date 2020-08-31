<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStaticContentRequest;
use App\Http\Requests\UpdateStaticContentRequest;
use App\Repositories\StaticContentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class StaticContentController extends AppBaseController
{
    /** @var  StaticContentRepository */
    private $staticContentRepository;

    public function __construct(StaticContentRepository $staticContentRepo)
    {
        $this->staticContentRepository = $staticContentRepo;
    }

    /**
     * Display a listing of the StaticContent.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $staticContents = $this->staticContentRepository->all();

        return view('static_contents.index')
            ->with('staticContents', $staticContents);
    }

    /**
     * Show the form for creating a new StaticContent.
     *
     * @return Response
     */
    public function create()
    {
        return view('static_contents.create');
    }

    /**
     * Store a newly created StaticContent in storage.
     *
     * @param CreateStaticContentRequest $request
     *
     * @return Response
     */
    public function store(CreateStaticContentRequest $request)
    {
        $input = $request->all();

        $staticContent = $this->staticContentRepository->create($input);

        Flash::success('Static Content saved successfully.');

        return redirect(route('staticContents.index'));
    }

    /**
     * Display the specified StaticContent.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $staticContent = $this->staticContentRepository->find($id);

        if (empty($staticContent)) {
            Flash::error('Static Content not found');

            return redirect(route('staticContents.index'));
        }

        return view('static_contents.show')->with('staticContent', $staticContent);
    }

    /**
     * Show the form for editing the specified StaticContent.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $staticContent = $this->staticContentRepository->find($id);

        if (empty($staticContent)) {
            Flash::error('Static Content not found');

            return redirect(route('staticContents.index'));
        }

        return view('static_contents.edit')->with('staticContent', $staticContent);
    }

    /**
     * Update the specified StaticContent in storage.
     *
     * @param int $id
     * @param UpdateStaticContentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStaticContentRequest $request)
    {
        $staticContent = $this->staticContentRepository->find($id);

        if (empty($staticContent)) {
            Flash::error('Static Content not found');

            return redirect(route('staticContents.index'));
        }

        $staticContent = $this->staticContentRepository->update($request->all(), $id);

        Flash::success('Static Content updated successfully.');

        return redirect(route('staticContents.index'));
    }

    /**
     * Remove the specified StaticContent from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $staticContent = $this->staticContentRepository->find($id);

        if (empty($staticContent)) {
            Flash::error('Static Content not found');

            return redirect(route('staticContents.index'));
        }

        $this->staticContentRepository->delete($id);

        Flash::success('Static Content deleted successfully.');

        return redirect(route('staticContents.index'));
    }
}
