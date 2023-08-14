<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apartment;
use App\Models\Image;
use App\Models\User;
use App\Models\Amenities;
use DB;

class ApartmentController extends Controller
{
    
    public function AllApartment(){
        $aparts = Apartment::with('amenities')->orderBy('id')->get();
        return view ('backend.apartment.all_apartment', compact('aparts'));
    }

    public function AddApartment(){
        $apart = Apartment::latest()->get();
        $amenities = Amenities::all();
        $amenities_group = User::getamenitiesGroup();
        return view ('backend.apartment.add_apartment', compact('apart','amenities','amenities_group'));
    }

    public function StoreApartment(Request $request){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'room' => 'required',
            'valid_date' => 'required',
            'description' => 'nullable',
            'address' => 'required',

        ]);

        $data = $request->amenity;
         $item = new Apartment();
         $item->name = $request->name;
         $item->price = $request->price;
         $item->room = $request->room;
         $item->validate_at = $request->valid_date;
         $item->description = $request->description;
         $item->address = $request->address;
         $item->save();
        $item->amenities()->attach($data);

         $aparts = $item->id;


        if($request->hasFile('images'))
        {
            $uploadPath = 'uploads/Apartments/';
            $i=1;
            foreach($request->file('images') as $image)
            {
                $extention = $image->getClientOriginalName();
                $filename = time().$i++.'.'.$extention;
                $image->move($uploadPath,$filename);
                $finalImagePath = $uploadPath.$filename;

                $newimage = new Image();
                $newimage->url = $finalImagePath;
                $newimage->appartment_id = $aparts;
                $newimage->save();
            }
        }

        $notification = array(
            'message' => 'Apartment Added Successfully',
            'alert-type' => 'success'
        );

            return redirect()->route('all.apartment')->with($notification);
    }

    public function EditApartment($id){
        $item = Apartment::findOrFail($id);
        $amenities = Amenities::all();
        $amenities_group = User::getamenitiesGroup();
        return view('backend.apartment.edit_apartment', compact('item','amenities','amenities_group'));
    }

    public function UpdateApartment(Request $request)
    {
        $apart_id = $request->id;

        $apart = Apartment::findOrFail($apart_id);


        $apart->amenities()->sync($request->amenity);

        Apartment::findOrFail($apart_id)->update([

            'name' => $request->name,
            'price' => $request->price,
            'room' => $request->room,
            'validate_at' => $request->valid_date,
            'description' => $request->description,
            'address' => $request->address,
         ]);



         $data = Image::select('url')->where('appartment_id',$request->id)->get();
         
         if($request->hasFile('images'))
        {
            $uploadPath = 'uploads/Apartments/';
            $i=1;
            foreach($request->file('images') as $image)
            {
                $extention = $image->getClientOriginalName();
                $filename = time().$i++.'.'.$extention;
                $image->move($uploadPath,$filename);
                $finalImagePath = $uploadPath.$filename;

                $newimage = new Image();
                $newimage->url = $finalImagePath;
                $newimage->appartment_id = $apart_id;
                $newimage->save();
            }
        }
   
         $notification = array(
         'message' => 'Apartment Information Updated Successfully',
         'alert-type' => 'success'
         );
   
            return redirect()->route('all.apartment')->with($notification);
    }

    public function DeleteImage($id)
    {
        Image::findOrFail($id)->delete();
        
        $notification = array(
            'message' => 'Image Deleted Successfully',
            'alert-type' => 'success'
            );
      
               return redirect()->back()->with($notification);
    }

    public function DeleteApartment($id)
    {
        $apart = Apartment::findOrFail($id);

        $apart->amenities()->detach();

        $apart->delete();


        $notification = array(
            'message' => 'Apartment Deleted Successfully',
            'alert-type' => 'success'
            );
      
               return redirect()->back()->with($notification);
    }
}
