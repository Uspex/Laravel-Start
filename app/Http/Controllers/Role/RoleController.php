<?php

namespace App\Http\Controllers\Role;


use App\Http\Controllers\Controller;
use App\Http\Requests\Role\RoleCreateRequest;
use App\Http\Requests\Role\RoleUpdateRequest;
use App\Models\Role;
use App\Repositories\RoleRepository;
use App\Repositories\PermissionRepository;


/**
 * Управление Ролями
 * Class RoleController
 * @package App\Http\Controllers\Role
 */
class RoleController extends Controller
{

    /**
     * @var RoleRepository
     * @var PermissionRepository
     */
    private $roleRepository;
    private $permissionRepository;

    public function __construct()
    {

        $this->roleRepository = app(RoleRepository::class);
        $this->permissionRepository = app(PermissionRepository::class);

    }

    /**
     * Список
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $this->checkPermissionUser('list_role');

        $paginator = $this->roleRepository->getPaginate(20);

        return view('role.index', compact('paginator'));
    }

    /**
     * Страница создание
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $this->checkPermissionUser('create_role');

        $item = new Role();

        $permission_list =  $this->permissionRepository->getList()->groupBy('group');

        return view('role.create' ,compact('item', 'permission_list'));
    }

    /**
     * Создание записи в базе
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(RoleCreateRequest $request)
    {
        $this->checkPermissionUser('create_role');

        $data = $request->input();

        $item = new Role($data);
        $item->save();

        if ($item) {
            return redirect()
                ->route('role.edit', $item->id)
                ->with(['success' => trans('role.create.success')]);
        } else {
            return back()
                ->withErrors(['msg' => trans('role.create.error')])
                ->withInput();
        }
    }

    /**
     * Детальная информация
     *
     * @param int $id
     * @param RoleRepository $roleRepository
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $this->checkPermissionUser('edit_role');

        $item = $this->roleRepository->getEdit($id);

        if (empty($item)) {
            abort(400);
        }

        $permission_list =  $this->permissionRepository->getList()->groupBy('group');

        return view('role.edit', compact('item', 'permission_list'));
    }

    /**
     * Обновление данных
     *
     * @param RoleUpdateRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(RoleUpdateRequest $request, $id)
    {
        $this->checkPermissionUser('edit_role');

        $item = $this->roleRepository->getEdit($id);

        //обновляем данные пользователя
        $data = $request->all();


        $result = $item->update($data);

        //удаляем все рание назначенные правила для роли
        foreach ($item->permissions as $permissions) {
            $item->detachPermission($permissions);
        }

        if(isset($data['role_permission'])){
            //обновим список правил для Роли
            foreach ($data['role_permission'] as $permission_update) {
                $item->attachPermission($permission_update);
            }
        }

        if ($result) {
            return redirect()
                ->route('role.edit', $item->id)
                ->with(['success' => trans('role.update.success')]);
        } else {
            return back()
                ->withErrors(['msg' => trans('role.update.error')])
                ->withInput();
        }

    }

    /**
     * Удаление
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->checkPermissionUser('delete_role');

        //удаление с сохранением записи в бд
        $result = Role::destroy($id);

        //TODO удаление роли и всех ее связей


        if ($result) {
            return redirect()
                ->route('role.index')
                ->with(['success' => trans('role.delete.success')]);
        } else {
            return back()
                ->withErrors(['msg' => trans('role.delete.error')])
                ->withInput();
        }
    }
}
