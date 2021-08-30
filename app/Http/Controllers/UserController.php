<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\Entities\UserEntity;
use App\Core\Application\Manager\UserManager;


class UserController extends Controller
{
    private $userManager;

    public function __construct(UserManager $userManager)
    {
        $this->userManager = $userManager;
    }

    public function index()
    {
        $user = $this->userManager->get();
        return response()->json($user, 200);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required'
        ]);

        $user = new UserEntity($request->first_name, $request->last_name, $request->email);
        $this->userManager->add($user);

        return response()->json(["message" => "Criado com sucesso."], 201);
    }

    public function show($id)
    {
        $user = $this->userManager->find($id);
        return response()->json($user, 200);
    }
}
