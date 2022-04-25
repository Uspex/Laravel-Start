<?php

namespace App\Http\Controllers\Permission;


use App\Http\Controllers\Controller;
use App\Http\Requests\Permission\PermissionCreateRequest;
use App\Http\Requests\Permission\PermissionUpdateRequest;
use App\Models\Permission;
use App\Repositories\PermissionRepository;


/**
 * Управление Разрешениями
 * Class PermissionController
 * @package App\Http\Controllers\Permission
 */
class PermissionController extends Controller
{

    /**
     * @var PermissionRepository
     */
    private $permissionRepository;

    public function __construct()
    {

        $this->permissionRepository = app(PermissionRepository::class);
    }

    /**
     * Список
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $this->checkPermissionUser('list_permission');

        $paginator = $this->permissionRepository->getPaginate(20);

        return view('permission.index', compact('paginator'));
    }

    /**
     * Страница создания
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $this->checkPermissionUser('create_permission');

        $item = new Permission();

        return view('permission.create', compact('item'));
    }

    /**
     * Создание записи в базе
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(PermissionCreateRequest $request)
    {
        $this->checkPermissionUser('create_permission');

        $data = $request->input();

        $item = new Permission($data);
        $item->save();

        if ($item) {
            return redirect()
                ->route('permission.edit', $item->id)
                ->with(['success' => trans('permission.create.success')]);
        } else {
            return back()
                ->withErrors(['msg' => trans('permission.create.error')])
                ->withInput();
        }
    }


    /**
     * Детальная информация
     *
     * @param int $id
     * @param PermissionRepository $permissionRepository
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $this->checkPermissionUser('edit_permission');

        $item = $this->permissionRepository->getEdit($id);

        if (empty($item)) {
            abort(400);
        }

        return view('permission.edit', compact('item'));
    }

    /**
     * Обновление данных
     *
     * @param PermissionUpdateRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PermissionUpdateRequest $request, $id)
    {
        $this->checkPermissionUser('edit_permission');

        $item = $this->permissionRepository->getEdit($id);

        //обновляем данные пользователя
        $data = $request->all();

        $result = $item->update($data);


        if ($result) {
            return redirect()
                ->route('permission.index')
                ->with(['success' => trans('permission.update.success')]);
        } else {
            return back()
                ->withErrors(['msg' => trans('permission.update.error')])
                ->withInput();
        }

    }

    /**
     * Удаление
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->checkPermissionUser('delete_permission');

        //удаление с сохранением записи в бд
        $result = Permission::destroy($id);

        if ($result) {
            return redirect()
                ->route('permission.index')
                ->with(['success' => trans('permission.delete.success')]);
        } else {
            return back()
                ->withErrors(['msg' => trans('permission.delete.error')])
                ->withInput();
        }
    }
}
