<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests\Manage\CreateUsersRequest;
use App\Http\Requests\Manage\UpdateUsersRequest;
use App\Repositories\Manage\UsersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Hash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UsersController extends AppBaseController
{
    /** @var  UsersRepository */
    private $usersRepository;

    public function __construct(UsersRepository $usersRepo)
    {
        $this->usersRepository = $usersRepo;
    }

    /**
     * Display a listing of the Users.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->usersRepository->pushCriteria(new RequestCriteria($request));
        $users = $this->usersRepository->all();

        return view('backend.users.index')
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new Users.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created Users in storage.
     *
     * @param CreateUsersRequest $request
     *
     * @return Response
     */
    public function store(CreateUsersRequest $request)
    {
        $input=[];
        if ($request->hasFile('avatar')) {
            $file = $request->avatar;
            $arrhash= explode(".",$file->hashName());
            $arrnohash=explode(".",$file->getClientOriginalName());
            $newname=$arrnohash[0].$arrhash[0].".".$arrnohash[1];
            $file->move(public_path()."/upload/avatar/",$newname);
            $input['avatar']=$newname;
        }
        $input['name']=$request->name;
        $input['email']=$request->email;
        $input['id_gender']=$request->id_gender;
        $input['id_permission']=$request->id_permission;
        $input['address']=$request->address;
        $input['birthday']=$request->birthday;
        $input['password'] = Hash::make($request->password);
        $input['active']=$request->active;
        $users = $this->usersRepository->create($input);

        Flash::success('Thêm mới thành công');

        return redirect(route('admin.users.index'));
    }

    /**
     * Display the specified Users.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $users = $this->usersRepository->findWithoutFail($id);

        if (empty($users)) {
            Flash::error('Users not found');

            return redirect(route('admin.users.index'));
        }

        return view('backend.users.show')->with('users', $users);
    }

    /**
     * Show the form for editing the specified Users.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $users = $this->usersRepository->findWithoutFail($id);

        if (empty($users)) {
            Flash::error('Không tìm thấy nội dung');

            return redirect(route('admin.users.index'));
        }

        return view('backend.users.edit')->with('users', $users);
    }

    /**
     * Update the specified Users in storage.
     *
     * @param  int              $id
     * @param UpdateUsersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsersRequest $request)
    {
        $users = $this->usersRepository->findWithoutFail($id);

        if (empty($users)) {
            Flash::error('Users not found');

            return redirect(route('admin.users.index'));
        }

        $input=[];
        if ($request->hasFile('avatar')) {
            $file = $request->avatar;
            $arrhash= explode(".",$file->hashName());
            $arrnohash=explode(".",$file->getClientOriginalName());
            $newname=$arrnohash[0].$arrhash[0].".".$arrnohash[1];
            $file->move(public_path()."/upload/avatar/",$newname);
            $input['avatar']=$newname;
        }
        $input['name']=$request->name;
        $input['email']=$request->email;
        $input['id_gender']=$request->id_gender;
        $input['id_permission']=$request->id_permission;
        $input['address']=$request->address;
        $input['birthday']=$request->birthday;
        if($request->password){
            $input['password'] = Hash::make($request->password);
        }
        $input['active']=$request->active;
        $users = $this->usersRepository->update($input, $id);

        Flash::success('Cập nhật dữ liệu thành công');

        return redirect(route('admin.users.index'));
    }

    /**
     * Remove the specified Users from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $users = $this->usersRepository->findWithoutFail($id);

        if (empty($users)) {
            Flash::error('Không tìm thấy nội dung');

            return redirect(route('admin.users.index'));
        }

        $this->usersRepository->delete($id);

        Flash::success('Đã xóa dữ liệu thành công.');

        return redirect(route('admin.users.index'));
    }
}
