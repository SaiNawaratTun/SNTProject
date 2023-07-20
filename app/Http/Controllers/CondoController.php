<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condo;
use App\Models\Image;
use App\Models\User;
use App\Models\Amenities;
use DB;

class CondoController extends Controller
{
   
    /**
     * Display a listing of the resource.
     */


    /**
     * Show the form for creating a new resource.
     */
    public function AddCondo()
    {
        $condos = Condo::latest()->get();
        $amenities = Amenities::all();
        $amenities_group = User::getamenitiesGroup();
        return view('backend.condo.add_condo', compact('condos','amenities','amenities_group'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function StoreCondo(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'room' => 'required',
            'valid_date' => 'required',
            'description' => 'nullable',
            'address' => 'required',

        ]);

        $data = $request->amenity;
         $item = new Condo();
         $item->name = $request->name;
         $item->price = $request->price;
         $item->room = $request->room;
         $item->validate_at = $request->valid_date;
         $item->description = $request->description;
         $item->address = $request->address;
         $item->save();
        $item->amenities()->attach($data);

         


         $condos = $item->id;


        if($request->hasFile('images'))
        {
            $uploadPath = 'uploads/Condos/';
            $i=1;
            foreach($request->file('images') as $image)
            {
                $extention = $image->getClientOriginalName();
                $filename = time().$i++.'.'.$extention;
                $image->move($uploadPath,$filename);
                $finalImagePath = $uploadPath.$filename;

                $newimage = new Image();
                $newimage->url = $finalImagePath;
                $newimage->condo_id = $condos;
                $newimage->save();
            }
        }

        $notification = array(
            'message' => 'Condo Added Successfully',
            'alert-type' => 'success'
        );

            return redirect()->route('all.condo')->with($notification);
    }

    public function AllCondo()
    {
        // $condos = Condo::all();
        $condos = Condo::with('amenities')->get();
        return view ('backend.condo.all_condo', compact('condos'));
    }

    /**
     * Display the specified resource.
     */
    public function EditCondo($id)
    {
        $item = Condo::findOrFail($id);
        return view('backend.condo.edit_condo', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function UpdateCondo(Request $request)
    {
        $cod_id = $request->id;

        Condo::findOrFail($cod_id)->update([

            'name' => $request->name,
            'price' => $request->price,
            'room' => $request->room,
            'validate_at' => $request->valid_date,
            'description' => $request->description,
            'address' => $request->address,
         ]);

         $data = Image::select('url')->where('condo_id',$request->id)->get();
         
         if($request->hasFile('images'))
        {
            $uploadPath = 'uploads/Condos/';
            $i=1;
            foreach($request->file('images') as $image)
            {
                $extention = $image->getClientOriginalName();
                $filename = time().$i++.'.'.$extention;
                $image->move($uploadPath,$filename);
                $finalImagePath = $uploadPath.$filename;

                $newimage = new Image();
                $newimage->url = $finalImagePath;
                $newimage->condo_id = $cod_id;
                $newimage->save();
            }
        }
   
         $notification = array(
         'message' => 'Condo Information Updated Successfully',
         'alert-type' => 'success'
         );
   
            return redirect()->route('all.condo')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function DeleteImage($id)
    {
        Image::findOrFail($id)->delete();
        
        $notification = array(
            'message' => 'Image Deleted Successfully',
            'alert-type' => 'success'
            );
      
               return redirect()->back()->with($notification);
    }

    public function DeleteCondo($id)
    {
        Condo::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Amenities Deleted Successfully',
            'alert-type' => 'success'
            );
      
               return redirect()->back()->with($notification);
    }
    
}
