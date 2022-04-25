<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserCreateRequest;
use App\Http\Requests\User\UserUpdateRequest;
use App\Models\Role;
use App\Models\User;
use App\Repositories\RoleRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

/**
 * Пользователи
 * Class UserController
 * @package App\Http\Controllers\User
 */
class UserController extends Controller
{

    /**
     * @var UserRepository
     * @var RoleRepository
     */
    private $userRepository;
    private $roleRepository;

    public function __construct()
    {

        $this->userRepository = app(UserRepository::class);
        $this->roleRepository = app(RoleRepository::class);
    }

    /**
     * Список
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $this->checkPermissionUser('list_user');

        $paginator = $this->userRepository->getPaginate(20);

        return view('user.index', compact('paginator'));
    }

    /**
     * Страница создания
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $this->checkPermissionUser('create_user');

        $item = new User();
        $roles = $this->roleRepository->getList();

        return view('user.create',compact('item', 'roles'));
    }

    /**
     * Создание записи в базе
     *
     * @param UserCreateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserCreateRequest $request)
    {
        $this->checkPermissionUser('create_user');

        $data = $request->all();

        $item =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $role = Role::where('name',$data['role'])->first();
        $item->attachRole($role);

        if ($item) {

            return redirect()
                ->route('user.index')
                ->with(['success' => trans('user.create.success')]);
        } else {
            return back()
                ->withErrors(['msg' => trans('user.create.error')])
                ->withInput();
        }
    }


    /**
     * Детальная информация
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $this->checkPermissionUser('edit_user');

        $item = $this->userRepository->getEdit($id);

        $this->emptyItem($item);

        $roles = $this->roleRepository->getList();

        return view('user.edit', compact('item', 'roles'));
    }

    /**
     * Обновление данных
     *
     * @param UserUpdateRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $this->checkPermissionUser('edit_user');

        $item = $this->userRepository->getEdit($id);

        $this->emptyItem($item);

        $data = $request->all();

        $item->name = $data['name'];
        $item->email = $data['email'];

        if($data['password'] != ''){
            $item->password = Hash::make($data['password']);
        }

        $result = $item->save();

        //удалим старые роли
        foreach ($item->roles as $roles_key => $roles_value) {
            $item->detachRole($roles_value);
        }

        //укажем новые роли
        $item->attachRole($data['role']);

        if ($result) {
            return redirect()
                ->route('user.edit', $item->id)
                ->with(['success' => trans('user.update.success')]);
        } else {
            return back()
                ->withErrors(['msg' => trans('user.update.error')])
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
        $this->checkPermissionUser('delete_user');

        $item = $this->userRepository->getEdit($id);

        $this->emptyItem($item);

        $result = $item->delete();

        if ($result) {
            return redirect()
                ->route('user.index')
                ->with(['success' => trans('user.create.success')]);
        } else {
            return back()
                ->withErrors(['msg' => trans('user.delete.error')])
                ->withInput();
        }
    }
}
