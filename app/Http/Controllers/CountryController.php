<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
 
class CountryController extends Controller {
    
    /*Export Data*/
    public function download(Request $request){       
    $countries=DB::table('reg_user')->select('id','fname','lname','email','phone','credit_card','created_at','bill_address1','bill_address2','bill_city','bill_zipcode','bill_state','shipp_address1','shipp_address2','shipp_city','shipp_zipcode','shipp_state')->get();
    $tot_record_found=0;
    if(count($countries)>0){
        $tot_record_found=1;
         
        $CsvData=array('ID,FIRST NAME,LAST NAME,EMAIL ADDRESS,HOME PHONE NUMBER,CREDIT CARD,CREATED DATE,BILL ADDRESS1,BILL ADDRESS2,BILL CITY,BILL ZIPCODE,BILL STATE,SHIPP ADDRESS1,SHIPP ADDRESS2,SHIPP CITY,SHIPP ZIPCODE,SHIPP STATE');          
        foreach($countries as $value){              
            $CsvData[]=$value->id.','.$value->fname.','.$value->lname.','.$value->email.','.$value->phone.','.$value->credit_card.','.$value->created_at.','.$value->bill_address1.','.$value->bill_address2.','.$value->bill_city.','.$value->bill_zipcode.','.$value->bill_state.','.$value->shipp_address1.','.$value->shipp_address2.','.$value->shipp_city.','.$value->shipp_zipcode.','.$value->shipp_state;
        }
         
        $filename=date('Y-m-d').".csv";
        $file_path=public_path().'/uploads/'.$filename;   
        $file = fopen($file_path,"w+");
        foreach ($CsvData as $exp_data){
          fputcsv($file,explode(',',$exp_data));
        }   
        fclose($file);          
 
        $headers = ['Content-Type' => 'application/csv'];
        return response()->download($file_path,$filename,$headers );       
    }
    return view('download',['record_found' =>$tot_record_found]);    
}
     
}   
?>