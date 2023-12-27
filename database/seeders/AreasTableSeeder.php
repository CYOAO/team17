<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * */
    /*public function run()*/

    
    public function generateRandomName(){            //區域名稱
        $name =["台灣","新月之城","水晶谷","星際之都","暗影之境","夢幻之島","冰霜之地","亞特蘭提斯","幻翼之國","流星之谷",
            "奇幻森林","虹彩之島","遺忘之地","天空之城","神秘之谷","金色之都","星辰之海","銀月之島","時光之庭","聖光之城","翡翠之谷"];
        return $name[rand(0,count($name)-1)];
    }

    public function generateRandomPosition(){        //位置
        $position =["提瓦特大陸","海域"];
        return $position[rand(0,count($position)-1)];
    }

    public function generateRandomElement(){        //元素
        $element =["土","飛行","幻","妖精","幽靈","毒","鋼","鐵","暗","光"];
        return $element[rand(0,count($element)-1)];
    
    }

    public function generateRandomBelief(){        //信仰
        $belief =["公平","生命","道德","覺悟","理想","至善","真實","自然"];
        return $belief[rand(0,count($belief)-1)];
    
            
    }
    
    public function generateRandomGod(){        //信奉神明
        $god =["阿提納","雅典娜","雷神索爾","波賽頓","瑞克斯","阿波羅","伊莎","塞勒涅","維納斯","索拉斯",
            "賽勒涅","芙蕾雅","九尾狐神","貓仙人","阿瑪特拉斯","龍神神龍","克羅諾斯"];
        return $god[rand(0,count($god)-1)];
    }
    
     public function generateRandomRuler(){        //統治者
         $ruler =["亞瑟","艾莉莎貝塔","里歐內爾","瑪布爾","李奧納德","貝爾蒙德","羅曼諾夫","西絲特","埃爾登","海斯堤亞",
        "艾薇琳","貝魯特","維多利亞","亞力克斯","歐尼克斯"];
        return $ruler[rand(0,count($ruler)-1)];
    }
    public function run()
    {
        for($i=0; $i<25; $i++)
        {
            $name = $this-> generateRandomName();
            $position = $this-> generateRandomPosition();
            $element = $this-> generateRandomElement();      
            $belief = $this-> generateRandomBelief();
            $god = $this-> generateRandomGod();
            $ruler = $this-> generateRandomRuler();
            $random_datetime = Carbon::now()->subMonths(rand(0,12))->subRealDays(rand(0,31));
            DB::table('areas')->insert([
                'name'=>$name,
                'position'=>$position,
                'element'=>$element,
                'belief'=>$belief,
                'god'=>$god,
                'ruler'=>$ruler,
                'created_at'=>$random_datetime,
                'updated_at'=>$random_datetime
            ]);
        }

    }


}
