<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vegmodel;
use Session;
use View;

class vgrmController extends Controller
{
    function __construct()
    {
       	 $this->user_id=Session::get("user_id");
  		  $user_name=Session::get("user_name");
         $user_email=Session::get("user_email");    
         $user_img=Session::get("user_img");
         $user_type=Session::get("user_type");


         $this->obj=new Vegmodel();
   
      if(!$this->user_id){
        $error=array('message' => "Session is Expired" );
        return view("welcome",compact('error'));
      }
      if($user_name){
             View::share("uname",$user_name);
             View::share("upic",$user_img);
             View::share("user_email",$user_email);  
              View::share("user_type",$user_type);             
        }
    }

//new methods starts here

public function login(){
    if($this->user_id){
        return redirect('Dashboard');
    }else{
        return view('welcome');
    }        
}
public function logout(){
    Session::flush();
    return redirect('login');
}

public function logincon(Request $request)
{
    $data=$request->all();        
    $res=$this->obj->loginmodel($data);

   if($res==1){
       return redirect("Dashboard");
   }else{
      $errorArray=array();
      if($res==0){
        $error=array('message' => "User is not found" );
        $errorArray=$error;
      }else if($res==0){
        $error=array('message' => "Password missmatch" );
        $errorArray=$error;
      }else{
        $error=array('message' => "something went wrong" );
        $errorArray=$error;
      }
       return view("welcome",compact('error'));
   }
}
public function dashboard()
{
   if(!$this->user_id){
        return redirect('login');
    }
    return view('dashboard');
}


public function addDept()
{
    if(!$this->user_id){
        return redirect('login');
    }
   return view('hat_add_dept');
}
public function saveDept(Request $request)
{
    $result=$this->obj->addDept($request);
    if($result){
        return redirect('Departments')->with('message','Successfully Inserted');
    }
}

public function Departments(){
    if(!$this->user_id){
        return redirect('login');
    }
   $dbresult=$this->obj->getalldepts();
   return view('hat-list-depts')->with('dbresult',$dbresult);
}

public function FacilityCategoryList(){
    if(!$this->user_id){
        return redirect('login');
    }
   $dbresult=$this->obj->getallFecilitylist();
   return view('hat-facilitycategory-list')->with('dbresult',$dbresult);

}


public function addSupportDevice()
{
  if(!$this->user_id){
        return redirect('login');
    }
    $results=$this->obj->getalldepts();
    return view('hat-add-support-devices')->with("depts",$results);
}
public function saveSupportDevice(Request $resquest)
{
    $result=$this->obj->saveSupportDevices($resquest);
    if($result){
       return redirect('SupportedDevices')->with('message','Successfully Inserted'); 
    }
}
public function SupportDeviceList(){
    if(!$this->user_id){
        return redirect('login');
    }
   $dbresult=$this->obj->SupportDeviceList();
 
   return view('hat-list-supportdevices')->with('dbresult',$dbresult);
}

public function addNotSupportDevice()
{
  if(!$this->user_id){
        return redirect('login');
    }
    $results=$this->obj->getalldepts();
    return view('hat-add-notsupport-devices')->with("depts",$results);
}
public function saveNotSupportDevice(Request $resquest)
{
    $result=$this->obj->saveNotSupportDevices($resquest);
    if($result){
       return redirect('Nonsupportdevices-list')->with('message','Successfully Inserted'); 
    }
}
public function NotSupportDeviceList(){
    if(!$this->user_id){
        return redirect('login');
    }
   $dbresult=$this->obj->NotSupportDeviceList();
  
   return view('hat-list-notsupportdevices')->with('dbresult',$dbresult);
}
public function Addassesment()
    {
      
      if(!$this->user_id){
            return redirect('login');
        }
        return view('hat-new-assesment');
    }

public function assesmentProcess()
    {
      
      if(!$this->user_id){
            return redirect('login');
        }
        return view('hat-assesment-process');
    }


//new methods end here














   
    
    
    public function addVillage()
    {
      if(!$this->user_id){
            return redirect('login');
        }
        return view('add_village_form');
    }
    public function addvillageData(Request $req)
    {     
       $result=$this->obj->addVillModel($req);
       if($result){
         return redirect('addvillage')->with('message','Successfully Inserted');
       }
    }
    public function addblog()
    {
      if(!$this->user_id){
            return redirect('login');
        }
        return view('add_blog');
    }
    public function saveblog(Request $request)
    {
       $result=$this->obj->addblogmodel($request);
       if($result){
         return redirect('Blog')->with('message','Successfully Inserted');
       }
    }
  

public function addHospatil(){
  return view('add_hospatil');
}

    public function addGallery()
    {
      if(!$this->user_id){
            return redirect('login');
        }
        $table_columns=array('add_place_category','id','name');
        $results=$this->obj->getAllCatList($table_columns);
        return view('add_hospatil')->with("place_cat",$results);
    }
    public function ajax()
    {
        $msg=$this->obj->getCatList();
        return response()->json(array('msg'=>$msg),200);      
    }
    public function saveGallery(Request $request)
    {
        $result=$this->obj->addGaller($request);
        if($result){
           return redirect('Gallery')->with('message','Successfully Inserted'); 
        }
    }
    public function addPersons()
    {     
    if(!$this->user_id){
            return redirect('login');
        }    
        $table_columns = array('add_persons_category','id','name');
        $dbidies=$this->obj->getAllCatList($table_columns);
        return view('add_persons')->with('dbidies',$dbidies);
    }
    public function savePerson(Request $request)
    {
       $result=$this->obj->addPerson($request);
        if($result){
           return redirect('Persons')->with('message','successfully Inserted'); 
        }
    } 

    public function AddFacility(Request $data)
    {
    /*  echo'gfgsdf'; exit();*/

       $result=$this->obj->addFacility_db($data->all());
        if($result){
           return redirect('FacilityMaster')->with('message','successfully Inserted'); 
        }
    }
    public function addFacilitycategory()
    {
      if(!$this->user_id){
            return redirect('login');
        }
        return view('hat-add-facilitycategory');
    }
    public function savePersonsCategory(Request $request)
    {
       $result=$this->obj->addPersonsCategory($request);
        if($result){
           return redirect('PersonsCategory')->with('message','Successfully Inserted'); 
        }
    }
    public function addPlaces()
    {    
      if(!$this->user_id){
            return redirect('login');
        }
        $table_columns=array('add_place_category','id','name');
        $result=$this->obj->getAllCatList($table_columns);
        return view('add_places_form')->with("res",$result);
    }
    public function savePlace(Request $request){              
        $result=$this->obj->addPlace($request);
        if($result){
           return redirect('Places')->with('message','successfully Inserted'); 
    }
    }
    public function addTestimonials()
    {
      if(!$this->user_id){
            return redirect('login');
        }
        return view('add_testimonials');
    }    
    public function saveTestimonials(Request $resquest)
    {
        $result=$this->obj->addTestimonials($resquest);
        if($result){
           return redirect('Testimonials')->with('message','Successfully Inserted'); 
        }
    }
    
    public function addNewsEvents()
    {
      if(!$this->user_id){
            return redirect('login');
        }
        return view('add_News_Events');
    }
    /*public function AddAssesment()
    {
      if(!$this->user_id){
            return redirect('login');
        }
        return view('hat-new-assesment');
    }*/

    public function addusers($value='')
    {
      /*echo $value; exit();*/
      
      if(!$this->user_id){
            return redirect('login');
        }
        return view('hat-add-users');
    }
    public function saveUsers(Request $request)
    {
       
        $result=$this->obj->adduserdata($request);
        if($result){

           return redirect('/user-list')->with('message','Successfully Inserted'); 
        }
    }
//Assestment List
public function AssesmentList($value='')
    {
      if(!$this->user_id){
            return redirect('login');
        }
       $dbresult=$this->obj->getallpersonslist();
       return view('hat-assesment-list')->with('dbresult',$dbresult);
    }


    //list showing
    public function allpersonslist($value='')
    {
      if(!$this->user_id){
            return redirect('login');
        }
       $dbresult=$this->obj->getallpersonslist();
       return view('hat-user-list')->with('dbresult',$dbresult);
    }
    public function allplaceslist($value='')
    {
      if(!$this->user_id){
            return redirect('login');
        }
       $dbresult=$this->obj->getallplaceslist();
       return view('list_places')->with('dbresult',$dbresult);
    }
    public function bloglist($value='')
    {
      if(!$this->user_id){
            return redirect('login');
        }
        $dbresult=$this->obj->bdbloglist();
        return view('list_blog')->with('dbresult',$dbresult);
    }
    public function newseventslist($value='')
    {
      if(!$this->user_id){
            return redirect('login');
        }
        $dbresult=$this->obj->bdnewseventslist();
        return view('list_news_events')->with('dbresult',$dbresult);
    }
    public function testimonialslist($value='')
    {
      if(!$this->user_id){
            return redirect('login');
        }
        $dbresult=$this->obj->dbtestimonialslist();
        return view('list_testimonials')->with('dbresult',$dbresult);
    }
    public function gallerylist($value='')
    {
      if(!$this->user_id){
            return redirect('login');
        }
        $dbresult=$this->obj->dbgallerylist();
        return view('list_gallery')->with('dbresult',$dbresult);
    }
    public function PlaceCategoryList($value='')
    {
      if(!$this->user_id){
            return redirect('login');
        }
        $dbresult=$this->obj->dbplaceCategorylist();
        return view('list_place_category')->with('dbresult',$dbresult);
    }
    public function personcategorylist($value='')
    {
      if(!$this->user_id){
            return redirect('login');
        }
        $dbresult=$this->obj->dbpersoncategorylist();
        return view('list_person_category')->with('dbresult',$dbresult);
    }
    public function villageList($value='')
    {
      if(!$this->user_id){
            return redirect('login');
        }
        $dbresult=$this->obj->dbvillageList();
        return view('list_village')->with('dbresult',$dbresult);
    }
    public function userslist($value='')
    {
      if(!$this->user_id){
            return redirect('login');
        }
        $dbresult=$this->obj->dbusersList();
        return view('list_users')->with('dbresult',$dbresult);
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
     
    public function delelteBlog($id)
    {
      if(!$this->user_id){
            return redirect('login');
        }
       $id_table=array('table_name' =>'add_blog' ,'id'=>$id );
       $result= $this->obj->deleteId($id_table);
       return redirect()->back()->with('message','Successfully Deleted');
    }
    public function destroyPersons($id)
    {
      if(!$this->user_id){
            return redirect('login');
        }
        $id_table = array('table_name' =>'user_datails' ,'id'=>$id);
        $result= $this->obj->deleteId($id_table);
        return redirect()->back()->with('message','Successfully Deleted');
    }
    public function destroyplace($id)
    {
      if(!$this->user_id){
            return redirect('login');
        }
        $id_table = array('table_name' =>'places' ,'id'=>$id);
        $result= $this->obj->deleteId($id_table);
        return redirect()->back()->with('message','Successfully Deleted');
    }
    public function destroyNewsEvents($id)
    {
      if(!$this->user_id){
            return redirect('login');
        }
        $id_table = array('table_name' =>'event_news' ,'id'=>$id);
        $result= $this->obj->deleteId($id_table);
        return redirect()->back()->with('message','Successfully Deleted');
    }
    public function destroyTestimonials($id)
    {
      if(!$this->user_id){
            return redirect('login');
        }
        $id_table = array('table_name' =>'testmonial' ,'id'=>$id);
        $result= $this->obj->deleteId($id_table);
        return redirect()->back()->with('message','Successfully Deleted');
    }
    public function destroyGallery($id)
    {
      if(!$this->user_id){
            return redirect('login');
        }
        $id_table = array('table_name' =>'add_gallery' ,'id'=>$id);
        $result= $this->obj->deleteId($id_table);
        return redirect()->back()->with('message','Successfully Deleted'); 
    }
    public function destroyUserlist($id)
    {
      if(!$this->user_id){
            return redirect('login');
        }
        $id_table = array('table_name' =>'add_users' ,'id'=>$id);
        $result= $this->obj->deleteId($id_table);
        return redirect()->back()->with('message','Successfully Deleted'); 
    }
    public function destroyPlaceCategory($id)
    {
      if(!$this->user_id){
            return redirect('login');
        }
        $id_table = array('table_name' =>'add_place_category' ,'id'=>$id);
        $result= $this->obj->deleteId($id_table);
        return redirect()->back()->with('message','Successfully Deleted'); 
    }
}
