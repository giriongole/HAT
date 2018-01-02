<?php  

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;
use Carbon\Carbon;
use Session;
class Vegmodel extends Model
{
    function __construct()
    {
      $this->user_id=Session::get("user_id");
      $this->user_vid=Session::get("user_type");
    }
    public function loginmodel($data)
    {
       if($data['username']!='' and $data['password']!='')
       {           
          $email=$data['username'];
          $pwd=$data['password']; 
        
          $validate= DB::table('user_datails')->where('email',$email)->where('password',$pwd)->get();              
          if(sizeOf($validate)>0){
              foreach ($validate as $value) {                  
                    Session::put("user_id",$value->id);
                    Session::put("user_name",$value->username);
                    Session::put("user_email",$value->email);
                    Session::put("user_img",$value->profile_img);
                    Session::put("user_type",$value->usertype);
                
                }
                //echo '+++'.Session::get("user_img");
            
              return 1;
          }else{
              return 0;
          }
       }else{
           return 0;     
       }
    }

    public function adduserdata($data)
    {
        $image="";
        if($data['image']){
            $file= $data->image;
            $timestamp=str_replace(['',':'],'',Carbon::now()->toDateTimeString());
            $image=$timestamp.'-'.$file->getClientOriginalName();
            $file->move(public_path().'/images/',$image);
        }
        
        $result= DB::table('user_datails')->insert([ 'username'=>$data['Username'],
            'password'=>$data['password'],
            'last_login'=>Carbon::now(),
            'email'=>$data['email'],
            'usertype'=>2,
            'profile_img'=> $image,
            'status'=> "1",
            'created_by'=> $this->user_id,
            'update_by'=> $this->user_id
            ]);
          // $this->email($data['Username'],$data['email'],"9963462100",$data['password'],"www.hat.co/admin",$data['email']);
           return $result;

    }


    public function addFacility_db($data)
      {
        
        $image="";
        if($data['Image']){
            $file= $data['Image'];//$data->Image;            
            $timestamp=str_replace(['',':'],'',Carbon::now()->toDateTimeString());
            $image=$timestamp.'-'.$file->getClientOriginalName();
            $file->move(public_path().'/images/',$image);
        }
        
        $result= DB::table('facility_master')->insert(['name'=>$data['name'],
            'address'=>$data['Addressline1'],
            'address1'=>$data['Addressline2'],
            'city'=>$data['city'],
            'state'=>$data['state'],
            'zip_code'=>$data['zip_code'],
            'tel'=>$data['tel'],
            'email'=>$data['email'],
            'contact_person'=>$data['contact_person'],
            'contact_Phone'=>$data['contact_Phone'],
            'contact_email'=>$data['contact_email'],
            'image'=> $image,
            'created_date'=>date("Y-m-d"),
            'created_by'=> $this->user_id,
            'updated_date'=>date("Y-m-d"),
            'updated_by'=> $this->user_id
            ]);
        /*print_r($result);exit();*/
          // $this->email($data['Username'],$data['email'],"9963462100",$data['password'],"www.hat.co/admin",$data['email']);
           return $result;

    }


    public function addDept($data)
    {
        return $res=DB::table('department_master')->insert(['name'=>$data['cat_name'],
            'description'=>$data['description'],
            'created_by'=> $this->user_id,
            'updated_by'=> $this->user_id,
            'status'=>"1"
            ]);
    }

  public function getalldepts(){
    return DB::table('department_master')->get();
  }


  public function saveSupportDevices($data)
  {
      return $res=DB::table('support_devices_master')->insert(['name'=>$data['name'],
          'description'=>$data['description'],
          'department_id'=>$data['dept'],
          'cost'=>$data['cost'],
          'installation_cost'=>$data['installation_cost'],
          'created_by'=> $this->user_id,
          'updated_by'=> $this->user_id,
          'status'=>"1"
          ]);
  }


public function SupportDeviceList(){
  return DB::table('support_devices_master')
  ->join('department_master','support_devices_master.department_id','=','department_master.id')
  ->select('support_devices_master.id','support_devices_master.name',
           'support_devices_master.description','support_devices_master.cost',
           'support_devices_master.installation_cost','department_master.name as dname')->get();
}

public function saveNotSupportDevices($data)
{
    return $res=DB::table('not_supported_master')->insert(['name'=>$data['name'],
        'description'=>$data['description'],
        'department_id'=>$data['dept'],
        'created_by'=> $this->user_id,
        'updated_by'=> $this->user_id,
        'status'=>"1"
        ]);
}


public function NotSupportDeviceList(){
return DB::table('not_supported_master')
->join('department_master','not_supported_master.department_id','=','department_master.id')
->select('not_supported_master.id','not_supported_master.name',
         'not_supported_master.description','department_master.name as dname')->get();
}













    public function addVillModel($value)
    {
        if($value['image']){
            $file=$value->image;
            $timestamp=str_replace(['',':'], '-', Carbon::now()->toDateTimeString());
            $image=$timestamp.'-'.$file->getClientOriginalName();
            $file->move(public_path().'/images/',$image);
        }
      
    	return $res=DB::table('village')->insert([
    		'village_name'=>$value['village_name'],
    		'mandal'=>$value['mandal_name'],
    		'district'=>$value['district_name'],
    		'state'=>$value['state'],
    		'language'=>$value['language'],
    		'telephone code'=>$value['telephone_code'],
    		'assembly_constituency'=>$value['assembly_costituency'],
    		'assembly_mla'=>$value['assembly_mla'],
    		'sarpanch'=>$value['sarpanch'],
    		'pincode'=>$value['pincode'],
            'image'=>$image,
            'status'=>'1',
            'description'=>$value['description'],
    		]);
    }
    public function addblogmodel($data)
    {
        if($data['ImageSmall']){
            $file=$data->ImageSmall;
            $timestamp=str_replace(['',':'], '-', Carbon::now()->toDateTimeString());
            $smallimage=$timestamp.'-'.$file->getClientOriginalName();
            $file->move(public_path().'/images/',$smallimage);
        }
        if($data['ImageBig']){
            $file=$data->ImageBig;
            $timestamp=str_replace(['',':'],'-',Carbon::now()->toDateTimeString());
            $bigimage=$timestamp.'-'.$file->getClientOriginalName();
            $file->move(public_path().'/images/',$bigimage);
        }
        return $res=DB::table('add_blog')->insert([
        'title'=>$data['blog_title'],
        'description'=>$data['description'],
        'big_image'=>$bigimage,
        'small_image'=>$smallimage,
        'status'=>"1",
        'village_id'=>$this->user_vid,
        ]);
    }
    
    public function addGaller($data)
    {
        if($data['Image']){
            $file=$data->Image;
            $timestamp=str_replace(['',':'],'-', Carbon::now()->toDateTimeString());
            $image=$timestamp.'-'.$file->getClientOriginalName();
            $file->move(public_path().'/images/',$image);
        }
       
        return DB::table('add_gallery')->insert([
            "category_id"=>$data['cat_id'],
            "image"=>$image,
            "description"=>$data['description'],
            'status'=>"1",
            'village_id'=>$this->user_vid,
            'title'=>$data['title'],
            ]);
    }
    public function addPerson($data)
    {
        if($data['Image']){
            $file=$data->Image;
            $timestamp=str_replace(['',':'],'-', Carbon::now()->toDateTimeString());
            $image=$timestamp.'-'.$file->getClientOriginalName();
            $file->move(public_path().'/images/',$image);
        }
        return DB::table('add_persons')->insert([
            "category_id"=>$data['person_cat_id'],
            "image"=>$image,
            "description"=>$data['description'],
            "qualification"=>$data['qualification'],
            'status'=>"1",
            'village_id'=>$this->user_vid,
            'name'=>$data['person_name'],
            ]);
    }
    public function addPersonsCategory($data)
    {
        if($data['Image']){
            $file=$data->Image;
            $timestamp=str_replace(['',':'],'-', Carbon::now()->toDateTimeString());
             $image=$timestamp.'-'.$file->getClientOriginalName();            
            $file->move(public_path().'/images/',$image);
        }
        return DB::table('add_persons_category')->insert([
            "name"=>$data['name'],
            "image"=>$image,
            "description"=>$data['description'], 
            "status"=>"1",                       
            ]);
    }
    public function addPlace($data)
    {
        if($data['image']){
           $file=$data->image;
           $timestamp=str_replace(['',':'], '-', Carbon::now()->toDateTimeString());
           $image=$timestamp.'-'.$file->getClientOriginalName();
           $file->move(public_path().'/images/',$image);
        }        
        return DB::table('places')->insert([
            "place_cat_id"=>$data['place_category'],
            "name"=>$data['place_name'],
            "title"=>$data['title_name'],
            "description"=>$data['description'],
            "established_on"=>$data['established_on'],
            "affliated_to"=>$data['affliated_to'],
            "contact_num"=>$data['contact_num'],
            "email"=>$data['email'],
            "speciality"=>$data['speciality'],
            "address"=>$data['address'],
            "image"=>$image,
            'status'=>"1",
            'village_id'=>$this->user_vid,
            ]);
    }
    public function addTestimonials($data)
    {
        if($data['image']){
           $file=$data->image;
           $timestamp=str_replace(['',':'], '-', Carbon::now()->toDateTimeString());
           $image=$timestamp.'-'.$file->getClientOriginalName();
           $file->move(public_path().'/images/',$image);
        }  
        return DB::table('testmonial')->insert(["client_name"=>$data['client_name'],
            "description"=>$data['description'],
            "client_qualification"=>$data['client_qualification'],
            'status'=>"1",
            'village_id'=>$this->user_vid,
            'image'=>$image,
            ]);
    }
    public function addBannerimage($data)
    {
        if($data['image']){
            $file=$data->image;
            $timestamp=str_replace(['',':'],'-', Carbon::now()->toDateTimeString());
            $image=$timestamp.'-'.$file->getClientOriginalName();
            $file->move(public_path().'/images/',$image);
        }
       return DB::table('cms')->insert(["title"=>$data['title'],
            "image"=>$image,
            'status'=>"1",
            'village_id'=>$this->user_vid,
            ]);
    }
    public function addNewsEvents($data)
    {
        if($data['image']){
           $file=$data->image;
           $timestamp=str_replace(['',':'], '-', Carbon::now()->toDateTimeString());
           $image=$timestamp.'-'.$file->getClientOriginalName();
           $file->move(public_path().'/images/',$image);
        }        
        return DB::table('event_news')->insert([
            "title"=>$data['title_name'],
            "description"=>$data['description'],
            "event_place"=>$data['event_place'],
            "start_date"=>$data['start_date'],
            "end_date"=>$data['end_date'],
            "contact_num"=>$data['contact_num'],
            "email_id"=>$data['email_id'],
            "image"=>$image,
             'status'=>"1",
             'village_id'=>$this->user_vid,
            ]);
    }
  
    
    //end insert 
    
    //get category list
    public function getAllCatList($data)
    {
        return DB::table($data[0])->select($data[1],$data[2])
        ->get();        
    }
    //end category list

   //delete all files 
    public function deleteId($data){
        $table= $data['table_name'];
        $column= $data['id'];
        return DB::table($table)->where('id','=',$column)->delete();
    }
     //end delte files

      //list view
    public function getallpersonslist()
    {  
         return DB::table('user_datails')->get();
       
    }

    public function getallFecilitylist()
    {  
         return DB::table('facility_master')->get();
       
    }


    public function getallplaceslist($value='')
    {
        if($this->user_vid==1){
            return DB::table('places')
            ->join('add_place_category','places.place_cat_id','=','add_place_category.id')
            ->where([  ['places.status','=','1']])
            ->select('places.id','places.name as places_name','places.title','places.description','add_place_category.name')
            ->get();
        }else{
             return DB::table('places')
            ->join('add_place_category','places.place_cat_id','=','add_place_category.id')
            ->where([  ['places.status','=','1'],['places.village_id','=',$this->user_vid] ])
            ->select('places.id','places.name as places_name','places.title','places.description','add_place_category.name')
            ->get();
        }
       
    }
    public function bdbloglist($value='')
    {
        if($this->user_vid==1){
            return DB::table('add_blog')
            ->where([ ['status','=','1'] ])
            ->get();
         }else{
            return DB::table('add_blog')
            ->where([ ['status','=','1'],['add_blog.village_id','=',$this->user_vid] ])
            ->get();
        }       
    }
    public function bdnewseventslist($value='')
    {
        if($this->user_vid==1){
            return DB::table('event_news')
            ->where([ ['status','=','1'] ])
            ->get();
        }else{
            return DB::table('event_news')
            ->where([ ['status','=','1'],['event_news.village_id','=',$this->user_vid] ])
            ->get();
        }       
    }
    public function dbtestimonialslist($value='')
    {
        if($this->user_vid==1){
            return DB::table('testmonial')
            ->where([ ['status','=','1']])
            ->get();
          }else{
            return DB::table('testmonial')
            ->where([ ['status','=','1'],['testmonial.village_id','=',$this->user_vid] ])
            ->get();
        }
       
    }
    public function dbgallerylist($value='')
    {
        if($this->user_vid==1){
            return DB::table('add_gallery')
            ->join('add_place_category','add_gallery.category_id','=','add_place_category.id')
            ->where([ ['add_gallery.status','=','1'] ])
            ->select('add_gallery.*','add_place_category.name')
            ->get();
         }else{
            return DB::table('add_gallery')
            ->join('add_place_category','add_gallery.category_id','=','add_place_category.id')
            ->where([ ['add_gallery.status','=','1'],['add_gallery.village_id','=',$this->user_vid] ])
            ->select('add_gallery.*','add_place_category.name')
            ->get();
        }
       
    }
    public function dbplaceCategorylist($value='')
    {
        return DB::table('add_place_category')
       ->get();
    }
    public function dbpersoncategorylist($value='')
    {
        return DB::table('add_persons_category')
        ->get();
    }
    public function dbvillageList($value='')
    {
        return DB::table('village')
        ->where('status','=','1')
        ->get();
    }
    public function dbusersList($value='')
    {
        return DB::table('add_users')
        ->where('status','=','1')
        ->get();
    }
    //end list view`

    function email($name,$email,$phone,$password,$url,$to){
        $body='<html>
        
        <head>
            <meta https-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>My Team</title>
            <style type="text/css">
                #outlook a {
                    padding: 0;
                }
                
                body {
                    width: 100% !important;
                }
                
                .ReadMsgBody {
                    width: 100%;
                }
                
                .ExternalClass {
                    width: 100%;
                }
                
                body {
                    -webkit-text-size-adjust: none;
                }
                
                body {
                    margin: 0;
                    padding: 0;
                }
                
                img {
                    border: 0;
                    height: auto;
                    line-height: 100%;
                    outline: none;
                    text-decoration: none;
                }
                
                table td {
                    border-collapse: collapse;
                }
                
                #backgroundTable {
                    height: 100% !important;
                    margin: 0;
                    padding: 0;
                    width: 100% !important;
                }
                
                body,
                #backgroundTable {
                    background-color: #fff;
                }
                
                #templateContainer {
                    border: 0;
                }
                
                h1,
                .h1 {
                    color: #202020;
                    display: block;
                    font-family: Helvetica, Arial, "Lucida Grande", sans-serif;
                    font-size: 40px;
                    font-weight: bold;
                    line-height: 100%;
                    margin-top: 2%;
                    margin-right: 0;
                    margin-bottom: 1%;
                    margin-left: 0;
                    text-align: left;
                }
                
                h2,
                .h2 {
                    color: #404040;
                    display: block;
                    font-family: Helvetica, Arial, "Lucida Grande", sans-serif;
                    font-size: 14px;
                    font-weight: bold;
                    line-height: 100%;
                    margin-top: 2%;
                    margin-right: 0;
                    margin-bottom: 1%;
                    margin-left: 0;
                    text-align: left;
                }
                
                h3,
                .h3 {
                    color: #606060;
                    display: block;
                    font-family: Helvetica, Arial, "Lucida Grande", sans-serif;
                    font-size: 14px;
                    font-weight: bold;
                    line-height: 100%;
                    margin-top: 2%;
                    margin-right: 0;
                    margin-bottom: 1%;
                    margin-left: 0;
                    text-align: left;
                }
                
                h4,
                .h4 {
                    color: #808080;
                    display: block;
                    font-family: Helvetica, Arial, "Lucida Grande", sans-serif;
                    font-size: 14px;
                    font-weight: bold;
                    line-height: 100%;
                    margin-top: 2%;
                    margin-right: 0;
                    margin-bottom: 1%;
                    margin-left: 0;
                    text-align: left;
                }
                
                span {
                    font-size: 14px;
                }
                
                #templatePreheader {
                    background-color: #fff;
                }
                
                .preheaderContent div {
                    color: #707070;
                    font-family: Helvetica, Arial, "Lucida Grande", sans-serif;
                    font-size: 10px;
                    line-height: 100%;
                    text-align: left;
                }
                
                .preheaderContent div a:link,
                .preheaderContent div a:visited,
                .preheaderContent div a .yshortcuts {
                    color: #336699;
                    font-weight: normal;
                    text-decoration: underline;
                }
                
                #social div {
                    text-align: right;
                }
                
                #templateHeader {
                    background-color: #f8f8f8;
                }
                
                .leftHeaderContent div {
                    color: #202020;
                    font-family: Helvetica, Arial, "Lucida Grande", sans-serif;
                    font-size: 32px;
                    font-weight: bold;
                    line-height: 100%;
                    text-align: right;
                    vertical-align: middle;
                }
                
                .rightHeaderContent div {
                    color: #202020;
                    font-family: Helvetica, Arial, "Lucida Grande", sans-serif;
                    font-size: 14px;
                    font-weight: bold;
                    text-align: left;
                    vertical-align: middle;
                }
                
                .leftHeaderContent div a:link,
                .leftHeaderContent div a:visited,
                .rightHeaderContent div a:link,
                .rightHeaderContent div a:visited {
                    color: #336699;
                    font-weight: normal;
                    text-decoration: underline;
                }
                
                #headerImage {
                    height: auto;
                    max-width: 180px !important;
                }
                
                #templateContainer,
                .bodyContent {
                    background-color: #FAFAFA;
                }
                
                .bodyContent div {
                    color: #505050;
                    font-family: Helvetica, Arial, "Lucida Grande", sans-serif;
                    font-size: 14px;
                    line-height: 150%;
                    text-align: left;
                }
                
                .bodyContent div a:link,
                .bodyContent div a:visited,
                .bodyContent div a .yshortcuts {
                    color: #336699;
                    font-weight: normal;
                    text-decoration: underline;
                }
                
                .bodyContent img {
                    display: inline;
                    height: auto;
                }
                
                #templateFooter {
                    background-color: rgb(248, 248, 248);
                    border-top: 1px dashed #E1E1E1;
                }
                
                .footerContent div {
                    color: #707070;
                    font-family: Helvetica, Arial, "Lucida Grande", sans-serif;
                    font-size: 11px;
                    line-height: 125%;
                    text-align: left;
                }
                
                .footertext p {
                    color: #707070;
                    font-family: Helvetica, Arial, "Lucida Grande", sans-serif;
                    font-size: 11px;
                    line-height: 125%;
                    text-align: left;
                }
                
                .footerContent div a:link,
                .footerContent div a:visited,
                .footerContent div a .yshortcuts {
                    color: #336699;
                    font-weight: normal;
                    text-decoration: underline;
                }
                
                .footerContent img {
                    display: inline;
                }
                
                #social {
                    background-color: ;
                    border: 0;
                }
                
                #social div {
                    text-align: left;
                }
                
                #utility {
                    background-color: #FAFAFA;
                    border-top: 0;
                }
                
                #utility div {
                    text-align: left;
                }
                
                #monkeyRewards img {
                    max-width: 170px !important;
                }
            </style>
        </head>
        
        <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
            <center>
                <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="backgroundTable">
                    <tr>
                        <td align="center" valign="top">
        
                            <table border="0" cellpadding="10" cellspacing="0" width="600" id="templatePreheader">
                                <tr>
                                    <td valign="top" class="preheaderContent">
                                    </td>
                                </tr>
                            </table>
        
                            <table border="0" cellpadding="0" cellspacing="0" width="500" id="templateContainer">
                                <tr>
                                    <td align="center" valign="top">
        
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateHeader">
                                            <tr>
                                                <td class="headerContent">
        
        
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background:#fff;  height: 75px;padding-left:10px;">
                                                        <tr>
                                                            <td>
                                                                <!-- https://www.mordorintelligence.com/images/logo.png -->
                                                                <div class="mail-log" style="display:none;  margin-top: 5px;text-align:center">
                                                                    <img src="http://vegavaram.website/images/logo.png" alt="logo">
                                                                </div>
                                                            </td>
                                                            <td class="rightHeaderContent">
        
                                                            </td>
                                                        </tr>
                                                    </table>
        
        
                                                </td>
                                            </tr>
                                        </table>
        
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" valign="top">
        
                                        <table border="0" cellpadding="10" bgcolor="#fafafa" cellspacing="0" width="100%" id="templateBody">
                                            <tr>
                                                <td valign="top" class="bodyContent">
        
        
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                        <tr>
                                                            <td valign="top">
                                                                <div mc:edit="std_content00" style="padding:10px;padding-right:0px;">
                                                                    <h2 class="h2" style="margin-top:0px;border-bottom:1px solid #f1f1f1;padding-bottom:5px;">Hai '.$name.'. </h2>
                                                                    <p>Welcome to My HAT portal. We are considering you.</p>
                                                                    <p>We have Created a Login for you, Check your details given below</p>
                                                                    <table>
        
                                                                        <tr>
                                                                            <td style="width:27%" valign="top">
                                                                                <div class="h3">Name</div>
                                                                            </td>
                                                                            <td valign="top" style="width:2%">
                                                                                <div class="h3">:</div>
                                                                            </td>
                                                                            <td valign="top"><span style="color:#999"><strong>'.$name.'</strong></span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width:27%" valign="top">
                                                                                <div class="h3">Email</div>
                                                                            </td>
                                                                            <td valign="top" style="width:2%">
                                                                                <div class="h3">:</div>
                                                                            </td>
                                                                            <td><span style="color:#999"><strong>'.$email.'</strong></span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width:27%" valign="top">
                                                                                <div class="h3">Phone </div>
                                                                            </td>
                                                                            <td valign="top" style="width:2%">
                                                                                <div class="h3">:</div>
                                                                            </td>
                                                                            <td><span style="color:#999"><strong>'.$phone.'</strong></span></td>
                                                                        </tr>
        
                                                                        <tr>
                                                                            <td style="width:27%" valign="top">
                                                                                <div class="h3">Admin Link </div>
                                                                            </td>
                                                                            <td valign="top" style="width:2%">
                                                                                <div class="h3">:</div>
                                                                            </td>
                                                                            <td><span style="color:#999"><strong>'.$url.'</strong></span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width:27%" valign="top">
                                                                                <div class="h3">User Name</div>
                                                                            </td>
                                                                            <td valign="top" style="width:2%">
                                                                                <div class="h3">:</div>
                                                                            </td>
                                                                            <td valign="top"><span style="color:#46cdd0"><strong>'.$email.'</strong></span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width:27%" valign="top">
                                                                                <div class="h3">Password</div>
                                                                            </td>
                                                                            <td valign="top" style="width:2%">
                                                                                <div class="h3">:</div>
                                                                            </td>
                                                                            <td valign="top"><span style="color:#46cdd0"><strong>'.$password.'</strong></span></td>
                                                                        </tr>
        
                                                                    </table>
                                                                </div>
        
        
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="footertext">
        
                                                                <p>If Any thing wrong please let us know by Email Or Phone call</p>
                                                                <p>Email: <strong>balu@gmail.com</strong></p>
                                                                <p>Phone Number: <strong>+91 9963462100</strong></p>
                                                            </td>
                                                        </tr>
                                                    </table>
        
        
        
                                                </td>
                                            </tr>
                                        </table>
        
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" valign="top">
        
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateFooter">
                                            <tr>
                                                <td valign="top" class="footerContent">
        
        
                                                    <table border="0" cellpadding="0" cellspacing="0" bgcolor="#46cdd0" width="100%">
        
                                                        <tr>
                                                            <td valign="top" width="350">
                                                                <div mc:edit="std_footer">
                                                                    <h3 class="h3" style="font-weight:500;padding-left:10px;color:#fff;text-align:center;margin:10px;margin-bottom:0px">By <a href="" style="text-decoration:underline !important;">www.website.com/</a> </span>
                                                                    </h3>
                                                                    <h3 class="h3" style="text-align:center;color:#fff;margin:10px;">My Team</h3>
                                                                </div>
                                                            </td>
        
                                                        </tr>
                                                        <tr>
        
                                                        </tr>
                                                    </table>
        
        
                                                </td>
                                            </tr>
                                        </table>
        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </center>
        </body>
        
        </html>';
            $headers = '';
            $to =$to;
            $subject = "Hai '".$name."', WelCome to My HAT Portal";
            $message =$body ;
            $from = "csekharui@gmail.com";
           $headers .= 'MIME-Version: 1.0' . "\r\n";  
           $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";  
           $headers .= "From: $from \r\n" ."Reply-To: $from \r\n" . "X-Mailer: PHP/" . phpversion();
           echo  mail($to,$subject,$message,$headers);
    }
}
