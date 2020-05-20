<?php
use App\Setting;
use Illuminate\Database\Seeder;

class SettingData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $NewsObj = new Setting();
            
            $NewsObj->Phone = '01153328857' ;
            $NewsObj->email = 'badrynabil7@gmail.com';
            $NewsObj->about_app = 'This project Engineering Admission Predictor System is web based application in which students can register with their personal as well as marks details for prediction the admission in colleges and the administrator can allot the seats for the students. Administrator can add the college details and he batch details. Using this software, the entrance seat allotment became easier and can be implemented using system. The main advantage of the project is the computerization of the entrance seat allotment process.' ;
            $NewsObj->play_store_link = 'https://play.google.com/store ' ;
            $NewsObj->app_store_link = 'https://www.apple.com/ios/app-store/ ' ;
            $NewsObj->watssap_link = 'https://web.whatsapp.com/ ' ;
			$NewsObj->google_link = 'badrynabil7@gmail.com';

            $NewsObj->save()  ;
    }
}
