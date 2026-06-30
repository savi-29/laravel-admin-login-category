<?php 

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\AdminModel;

class AdminController extends Controller
{

  protected $admin;

    public function __construct()
    {
        $this->admin = new AdminModel;
    }

public function admin_login(Request $request)
{
    $email = $request->input('email');
    $password = $request->input('password');

    // Find user
    $auth = User::where('email', $email)
                ->where('usertype', 'admin') // keep only if column exists
                ->first();

    if($auth)
    {
        // ✅ Check password correctly
        if(\Hash::check($password, $auth->password))
        {
            // ✅ Check status
            if($auth->status == '0')
            {
                \Auth::login($auth); // login AFTER check
                return 1; // success
            }
            elseif($auth->status == '1')
            {
                return 404; // blocked
            }
        }
    }
    return 0; // invalid login
}



    // CATEGORY INSERT
public function categoryInsert(Request $request)
    {
    DB::table('categories')->insert([
        'category_name' => $request->category_name,
        'category_desc' => $request->category_desc,
    ]);

    return "Saved"; // simple response
    }

    public function index()
    {

    $data['customers '] = DB::table('customers ')->where('status', '0')->get();
    return view('index', compact('data'));
    }

    public function category_list()
  
    {
    $categories = DB::table('categories')->get();
    return view('category_list', ['categories' => $categories]);
  
    }

    // edit


public function editcategory(Request $request)
{
    $id = $request->id;

    $category = DB::table('categories')
        ->where('id', $id)
        ->first();

    return response()->json($category);
}
}