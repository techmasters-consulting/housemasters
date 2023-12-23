<?php

namespace App\Http\Controllers;


use App\Services;
use Illuminate\Support\Facades\DB;
use Spatie\Tags\Tag;
//use Juanparati\Sendinblue\Client as Blue;
//use Juanparati\Sendinblue\Facades\Template as MailTemplate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    public function index()
    {
//        $ch = curl_init()  ;
//        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_URL, 'http://islandhomes.mu/secure/api/vendors/properties/12');
//        $obj = curl_exec($ch);
//        curl_close($ch);
//        $api = json_decode($obj);
//        //dd($api);
//        return view('home', compact('api'));
        return view('home');
    }

       public function about (){
           $articles = $this->getArticleMenu();
           $services = $this->getServiceMenu();

           return view('about', array('services'=>$services, 'articles'=>$articles));

       }
        public function faq(){
            $articles = $this->getArticleMenu();
            $services = $this->getServiceMenu();

            return view('faq', array('services'=>$services, 'articles'=>$articles));
        }




//  public function emailservice(Request $request){
////dd($request);
// $apiClient = app()->make(Blue::class);
//        $contactsApi = $apiClient->getApi('ContactsApi');
//
//        // Use CreateContact model
//        $contact = $apiClient->getModel('CreateContact', ['email' => $request->email, 'listIds' => [7]]);
//
//        try {
//            MailTemplate::to("housemasters.mu@gmail.com");
//            MailTemplate::send(7);
//            $contactsApi->createContact($contact);
//        }
//        catch(\Exception $e){
//            dd($e->getMessage());
//        }
//
//    }
}

// <!--
//                         @foreach($api as $child)

//                       @php

//   $slugs =  " https://islandhomes.mu/properties/".$child->slugs;

// @endphp -->
//                 <!-- Item 1 -->
//                 <div class="cbp-item ">

//                     <a class="cbp-caption" href="{{$child->thumbnail}}">
//                         <div class="cbp-caption-defaultWrap">
//                             <img style="width:600px;height:350px" src="{{$child->thumbnail}}" alt="housemasters photo" class="img-fluid">
//                         </div>

//                         <div class="cbp-caption-activeWrap">
//                             <div class="cbp-l-caption-alignCenter">
//                                 <div class="cbp-l-caption-body">
//                                     <i class="ion-android-expand icon-1x"></i>
//                                     <h6 class="text-white">
//                                        <!-- {{$child->name}} -->

//                                     </h6>


//                                 </div>
//                             </div>
//                         </div>
//                     </a>
//                        <a class="d-block btn btn-xlg btn-green-bright text-uppercase btn-rounded-none"  href="{{$slugs}}" role="button" style="color:white !important;">View more details</a>
//                 </div>
//                 <!--stop-->

// @endforeach
