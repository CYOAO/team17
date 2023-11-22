<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     /*public function generateRandomString($length=10){
        $characters='abcdefghijklmnopqrstuvwxyz';
        $charactersLength=strlen($characters);
        $randomString='';
        for($i=0;$i<$length;$i++){
            $randomString .=$characters[rand(0,$charactersLength -1)];
        }
        return $randomString;
     }
    public function generateRandomName(){
        $first_name = $this->generateRandomString(rand(2,15));
        $first_name = strtolower($first_name);  //全部轉小寫
        $first_name = ucfirst($first_name);     //第一個轉大寫
        $last_name = $this->generateRandomString(rand(2,15));
        $last_name = strtolower($last_name);
        $last_name = ucfirst($last_name);
        $name=$first_name . "" .$last_name;
        return $name;
    }*/

    public function generateRandomName(){            //角色名稱
        $name =["芙寧娜","夏洛蒂","萊歐斯利","法爾伽","艾莉絲","戴因斯雷布","萊茵多特","絲柯克","塔利雅","千織","希格雯","克洛琳德","艾梅莉埃","夏沃蕾","伊安珊","阿蕾奇诺","絲柯克",
        "巴衛","奈奈生","碓冰拓海","美咲","幾斗","亞夢","五條悟","虎杖悠仁","伏黑惠","釘崎野薔薇","蒙其D魯夫","娜美","羅羅亞索隆","賓什莫克·香吉士","騙人布","多尼多尼·喬巴","妮可·羅賓","波特卡斯·D·艾斯","佛朗基"];
        return $name[rand(0,count($name)-1)];
    }


    /*function unique_rand($min,$max,$num){
        $cont=0;
        $return=array();
        while ($count<$num){
            $return[]=mt_rand($min,$max);
            $return=array_flip(array_flip($return));
            $count=count($return);
        
        }
        shuffle($return);
        return $return;
    }*/

    

    public function generateRandomProperty(){        //屬性
        $property =["風","岩","雷","草","水","火","冰"];
        return $property[rand(0,count($property)-1)];
    }

    public function generateRandomGender(){          //性別
        $gender =["男","女"];
        return $gender[rand(0,count($gender)-1)];
    }

    public function generateRandomWeapon(){          //武器
        $weapon =["單手劍","雙手劍","法器","長槍","弓"];
        return $weapon[rand(0,count($weapon)-1)];
    }

   /* public function generateRandomConstellation(){          //命之座
        $constellation = $this->generateRandomString(rand(1,6));
        $constellation = strtolower($constellation);
        $constellation = ucfirst($constellation);
        return $constellation;
    }*/

    public function generateRandomConstellation(){          //命之座
        $constellation =["白羊座","金牛座","雙子座","巨蟹座","獅子座","處女座","天秤座","天蠍座","射手座"
        ,"魔羯座","水瓶座","雙魚座","蛇夫座","天狐座","鯨魚座","北極座","南極座","鷹座"];
        return $constellation[rand(0,count($constellation)-1)];
    }

    public function generateRandomPermanent_limited(){          //常駐/限定
        $permanent_limited =["常駐","限定"];
        return $permanent_limited[rand(0,count($permanent_limited)-1)];
    }

    public function generateRandomRace(){          //種族
        $race =["人類","殭屍","魔神","獸人","半仙","仙人","煉金造物","人偶","妖怪","精怪","元素生物"];
        return $race[rand(0,count($race)-1)];
    }

    public function run()
    {
        for($i=0; $i<50; $i++)
        {
            $name = $this-> generateRandomName();
            $property = $this-> generateRandomProperty();
            $gender = $this-> generateRandomGender();      
            $weapon = $this-> generateRandomWeapon();
            $constellation = $this-> generateRandomConstellation();
            $permanent_limited = $this-> generateRandomPermanent_limited();
            $race = $this-> generateRandomRace();
            $birthdate = Carbon::now()->subMonths(rand(0,12))->subRealDays(rand(0,31));
            $random_datetime = Carbon::now()->subMonths(rand(0,12))->subRealDays(rand(0,31));
            DB::table('roles')->insert([
                'name'=>$name,
                'aid'=>rand()%25+1,
                'stars'=>rand(4,5),
                'property'=>$property,
                'gender'=>$gender,
                'weapon'=>$weapon,
                'constellation'=>$constellation,
                'permanent_limited'=>$permanent_limited,
                'race'=>$race,
                'birthdate'=>$birthdate,
                'height'=>rand(127,190),
                'version'=>rand(1,5),
                'created_at'=>$random_datetime,
                'updated_at'=>$random_datetime
            ]);
        }



    }
    /* public function run()
    {
        //
        DB::table('roles')->insert([
            'name' => '重雲',
            'aid'=>1,
            'stars' => 4,
            'property' =>'冰',
            'gender' => '男',
            'weapon' =>'雙手劍',
            'constellation' =>'乾坤鋒座',
            'permanent_limited' =>'常駐',
            'race' =>'人類',
            'birthdate' =>'1950-09-07',
            'version' =>1,
        ]);
    }*/
}
