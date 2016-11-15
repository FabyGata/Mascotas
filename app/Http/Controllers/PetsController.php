<?php

namespace App\Http\Controllers;

use App\Certificate;
use App\Owner;
use App\Pet;
use App\Veterinary;
use Illuminate\Http\Request;

use App\Http\Requests;
use Fpdf;

class PetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('pet.index' , ['pets' => Pet::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pet.create' , [
            'owners' => Owner::all(),
            'veterinaries' => Veterinary::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $pet= new Pet();
        $pet->name=$request->name;
        $pet->species=$request->species;
        $pet->birthdate=$request->birthdate;
        $pet->weight=$request->weight;
        $pet->sterilized=$request->sterilized;
        $pet->description=$request->description;
        $pet->race=$request->race;
        $pet->gender=$request->gender;
        $pet->description=$request->description;
        $pet->color=$request->color;
        $pet->owner_id = $request->owner_id;
        $pet->veterinary_id = $request->veterinary_id;
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);
        $pet->image = '/images/' . $imageName;
        $pet->save();
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return Pet::find($id)->owner;
       // return Pet::find($id)->vaccines;

          return view('pet.show', ['pet' => Pet::find($id)]);
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


    public function printPetCertificate() {
//



//
        $pet_id = $_GET['pet_id'];
        $pet = Pet::find($pet_id);

        $pdf = new PDF();
        $pdf::AliasNbPages();
        $pdf::AddPage();
        $pdf::SetFont('Times','',12);

        // Logo
        //$pdf::Image('localhost:8000?template_images?logo.png',10,6,30);
//        $pdf::Image('http://localhost:8000/template_images/logo',60,30,90,0,'PNG');
//        // Arial bold 15
//        $this::SetFont('Arial','B',15);
//        // Move to the right
//        $this::Cell(80);
//        // Title
//        $this::Cell(30,10,'Title',1,0,'C');
//        // Line break
//        $this::Ln(20);
//

        //for($i=1;$i<=4;$i++)
           //$pdf::Cell(0,10,'Printing line number '.$i,0,1);

        //$pdf::Cell(0,10,'Printing line number ' . $pet->name,0,1);

        $pdf::Cell(0,10,'Nombre de la Mascota: ' . $pet->name,0,1);
        $pdf::Cell(0,10,'Especie: ' . $pet->species,0,1);
        $pdf::Cell(0,10,'Raza: ' . $pet->race,0,1);
        $pdf::Cell(0,10,'Edad: ' . $pet->birthdate,0,1);
        $pdf::Cell(0,10,'Genero: ' . $pet->gender,0,1);
        $pdf::Cell(0,10,'Peso: ' . $pet->weight,0,1);
        $pdf::Cell(0,10,'Color: ' . $pet->color,0,1);
        $pdf::Cell(0,10,'Esterlizado: ' . $pet->sterilized,0,1);
        $pdf::Cell(0,10,'Descripcion: ' . $pet->description,0,1);
        $pdf::Output();
        exit;
    }
}

class PDF extends Fpdf
{

// Page header
    function Header()
    {
//        // Logo
//        $this->Image('localhost:8000/template_images/logo.png',10,6,30);
//        // Arial bold 15
//        $this->SetFont('Arial','B',15);
//        // Move to the right
//        $this->Cell(80);
//        // Title
//        $this->Cell(30,10,'Title',1,0,'C');
//        // Line break
//        $this->Ln(20);
    }

// Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}
