<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLevelRoleConfigRequest;
use App\Http\Requests\UpdateLevelRoleConfigRequest;
use App\Repositories\LevelRoleConfigRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class LevelRoleConfigController extends AppBaseController
{
    /** @var  LevelRoleConfigRepository */
    private $levelRoleConfigRepository;

    public function __construct(LevelRoleConfigRepository $levelRoleConfigRepo)
    {
        $this->levelRoleConfigRepository = $levelRoleConfigRepo;
    }

    /**
     * Display a listing of the LevelRoleConfig.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $levelRoleConfigs = $this->levelRoleConfigRepository->all();

        return view('level_role_configs.index')
            ->with('levelRoleConfigs', $levelRoleConfigs);
    }

    /**
     * Show the form for creating a new LevelRoleConfig.
     *
     * @return Response
     */
    public function create()
    {
        return view('level_role_configs.create');
    }

    /**
     * Store a newly created LevelRoleConfig in storage.
     *
     * @param CreateLevelRoleConfigRequest $request
     *
     * @return Response
     */
    public function store(CreateLevelRoleConfigRequest $request)
    {
        $input =  array_filter($request->all());

        $levelRoleConfig = $this->levelRoleConfigRepository->create($input);

        Flash::success('Level Role Config saved successfully.');

        return redirect(route('levelRoleConfigs.index'));
    }

    /**
     * Display the specified LevelRoleConfig.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $levelRoleConfig = $this->levelRoleConfigRepository->find($id);

        if (empty($levelRoleConfig)) {
            Flash::error('Level Role Config not found');

            return redirect(route('levelRoleConfigs.index'));
        }

        return view('level_role_configs.show')->with('levelRoleConfig', $levelRoleConfig);
    }

    /**
     * Show the form for editing the specified LevelRoleConfig.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $levelRoleConfig = $this->levelRoleConfigRepository->find($id);

        if (empty($levelRoleConfig)) {
            Flash::error('Level Role Config not found');

            return redirect(route('levelRoleConfigs.index'));
        }

        return view('level_role_configs.edit')->with('levelRoleConfig', $levelRoleConfig);
    }

    /**
     * Update the specified LevelRoleConfig in storage.
     *
     * @param int $id
     * @param UpdateLevelRoleConfigRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLevelRoleConfigRequest $request)
    {
        $levelRoleConfig = $this->levelRoleConfigRepository->find($id);

        if (empty($levelRoleConfig)) {
            Flash::error('Level Role Config not found');

            return redirect(route('levelRoleConfigs.index'));
        }

        $levelRoleConfig = $this->levelRoleConfigRepository->update($request->all(), $id);

        Flash::success('Level Role Config updated successfully.');

        return redirect(route('levelRoleConfigs.index'));
    }

    /**
     * Remove the specified LevelRoleConfig from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $levelRoleConfig = $this->levelRoleConfigRepository->find($id);

        if (empty($levelRoleConfig)) {
            Flash::error('Level Role Config not found');

            return redirect(route('levelRoleConfigs.index'));
        }

        $this->levelRoleConfigRepository->delete($id);

        Flash::success('Level Role Config deleted successfully.');

        return redirect(route('levelRoleConfigs.index'));
    }
}
