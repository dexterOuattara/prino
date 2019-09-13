<?php
use Illuminate\Http\Request;
use App\Http\Requests;
namespace App\Http\Controllers;
use Auth;

use App\User;
use App\Project;
use App\Projects;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Auth::user());
        $user = Auth::user();
    	return view('projects/index', compact('user') );
    }

    public function index2()
    {

    	return view('projects/index2', array('user' => Auth::user()) );
    }

    public function index3()
    {

    	return view('projects/index3', array('user' => Auth::user()) );
    }

    public function index4()
    {

    	return view('projects/index6', array('user' => Auth::user()) );
    }
    
    public function index5()
    {

    	return view('projects/index5', array('user' => Auth::user()) );
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //


        // dd(Auth::user());
		$user = Auth::user();

		$user = User::find($user->id);

        if($user->projects!=null){
            $user->projects->entite = $request->input('entite');
            $user->projects->categorie = $request->input('categorie');
            $user->projects->adresse = $request->input('adresse');
            $user->projects->boite_postale = $request->input('boite_postale');
            $user->projects->ville = $request->input('ville');
            $user->projects->nombremploye = $request->input('nombremploye');
            $user->projects->descriptifentreprise = $request->input('descriptifentreprise');
            $user->projects->chiffredaffaire = $request->input('chiffredaffaire');
            $user->projects->prixremporte = $request->input('prixremporte');
            
     
            $user->save();
            $user->projects->save();
        }else{
            $project =  $request->all();
            $project['user_id'] =  $user->id;
            Projects::create($project);
            // $user->projects->entite = $request->input('entite');
            // $user->projects->categorie = $request->input('categorie');
            // $user->projects->adresse = $request->input('adresse');
            // $user->projects->boite_postale = $request->input('boite_postale');
            // $user->projects->ville = $request->input('ville');
            // $user->projects->nombremploye = $request->input('nombremploye');
            // $user->projects->descriptifentreprise = $request->input('descriptifentreprise');
            // $user->projects->chiffredaffaire = $request->input('chiffredaffaire');
            // $user->projects->prixremporte = $request->input('prixremporte');
            
     
            // $user->save();
            // $user->projects->save();
        }

        // $user->projects->entite = $request->input('entite');
        // $user->projects->categorie = $request->input('categorie');
        // $user->projects->adresse = $request->input('adresse');
        // $user->projects->boite_postale = $request->input('boite_postale');
        // $user->projects->ville = $request->input('ville');
        // $user->projects->nombremploye = $request->input('nombremploye');
        // $user->projects->descriptifentreprise = $request->input('descriptifentreprise');
        // $user->projects->chiffredaffaire = $request->input('chiffredaffaire');
        // $user->projects->prixremporte = $request->input('prixremporte');
        
 
		// $user->save();
		// $user->projects->save();
        return redirect()->route('projects.index2');
    	// return view('projects.index2', array('user' => Auth::user()) );

    }


    public function create2(Request $request)
    {
        //


		$user = Auth::user();

		$user = User::find($user->id);

        // $user->projects->entite = $request->input('entite');

        $user->projects->nomcomplet = $request->input('nomcomplet');
        $user->projects->telephone = $request->input('telephone');
        $user->projects->fonctionoccupe = $request->input('fonctionoccupe');
        $user->projects->descriptifprojet = $request->input('descriptifprojet');

        
 
		$user->save();
		$user->projects->save();
        return redirect()->route('projects.index3');
    	// return view('projects.index3', array('user' => Auth::user()) );

    }



    public function create3(Request $request)
    {
        //


		$user = Auth::user();

		$user = User::find($user->id);


        // $user->projects->concurrent = $request->input('concurrent');
        $user->projects->equipe = $request->input('equipe');

        
 
		$user->save();
		$user->projects->save();
// die();
return redirect()->route('projects.index4');
    	// return view('projects.index6', array('user' => Auth::user()) );

    }



    public function create4(Request $request)
    {
        


		$user = Auth::user();

        $user = User::find($user->id);
        

       // dd($request->file('planfin'));
        // dd($request->file('declarationfiscale'));
        $file = $request->file('planfin');


        $destination_path = public_path().'/files';
        $extention = $file->getClientOriginalExtension();


        $files = $file->getClientOriginalName();
        $fileName = $files.'_'.time().'.'.$extention;
        $file->move($destination_path ,$fileName);


		$user->save();
        $user->projects->save();


        // $user->projects->declarationfiscale = $request->input('declarationfiscale');
        // $user->projects->businessplan = $request->input('businessplan');
        // $user->projects->planfin = $request->input('planfin');
        // $user->projects->powerpoint = $request->input('powerpoint');
        
 
		// $user->save();
        // $user->projects->save();
        

        return redirect()->route('projects.index5');
    	// return view('projects.index5', array('user' => Auth::user()) );

    }

    public function create5()
     {



         return view('home', array('user' => Auth::user()) );

     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
