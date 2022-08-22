<?php

namespace App\Http\Controllers\Database;

use Faker\Factory;
use App\Models\News;
use App\Models\Quiz;
use App\Models\Store;
use App\Models\Course;
use App\Models\Lession;
use App\Models\Product;
use App\Models\Competition;
use Illuminate\Http\Request;
use App\Http\Traits\Translate;
use App\Http\Controllers\Controller;
use App\Http\services\CategoryService;
use App\Models\Article;
use App\Models\Blog;
use App\Models\Business;
use App\Models\MessageRoom;
use App\Models\Research;
use App\Models\Room;

class DataController extends Controller
{
    use CategoryService;
    public function course()
    {
        Course::find(6)->images()->create([
            'src' => '/CourseImages/1.png',
            'type' => 'image',
        ]);
    }

    public function createLession()
    {

        $test = new   Translate();
        Lession::create([
            'name' => $test->translate('الجلسة الأولى للكورس'),
            'name_ar' => 'الجلسة الأولى للكورس',
            'course_id' => 6,

        ]);
    }


    public function FilesLession()
    {

        $test = new   Translate();
        Lession::find(2)->images()->create([
            'src' => '/LessionFiles/3.pdf',
            'type' => 'pdf'
        ]);
    }

    public function CreateQuize()
    {
        $test = new   Translate();
        $data = [
            'course_id' => 5,
            'question_ar' => 'العرق اكبر دولة في العالم',
            'question' => $test->translate('العرق اكبر دولة في العالم'),
            'correct_answer' => false,
        ];
        Quiz::create($data);
    }

    public function CreateStores()
    {
        // $test=new Translate();
        //     $data=[
        //         'name_ar'=>'متجر اجهزة طبية',
        //         'name'=> $test->translate('متجر اجهزة طبية'),
        //         'lat'=>'21.4362767',
        //         'lang'=>'39.9866366',
        //         'created_at'=>now(),
        //         'updated_at'=>now(),
        //     ];
        //     Store::create($data);

        Store::find(3)->images()->create([
            'src' => '/StoreImage/image.png',
            'type' => 'png',
        ]);
    }
    public function CreateProduct()
    {
        $test = new Translate();
        $faker = Factory::create();
        $details = $faker->realText(40);
        $data = [
            'store_id' => '2',
            'name' => 'Old Product',
            'name_ar' => $test->translate('Old Product'),
            'details' => $details,
            'details_ar' => $test->translate($details),
            'created_at' => now(),
            'updated_at' => now(),
        ];
        Product::create($data);

        product::find(6)->images()->create([
            'src' => '/ProductImages/p9.png',
            'type' => 'image'
        ]);
    }

    public function createCopetiton()
    {
        $faker = Factory::create();
        // $test = new Translate();
        // $name = $faker->text(8);
        // $name_ar = $test->translate($name);
        // $details = $faker->realText(30);
        // $details_ar = $test->translate($details);
        // $prize = $faker->realText(20);
        // $prize_ar = $test->translate($prize);
        // for ($i = 0; $i < 6; $i++) {
        //     $data = [
        //         'name' => $name,
        //         'name_ar' => $name_ar,
        //         'details' => $details,
        //         'details_ar' => $details_ar,
        //         'prize'=>$prize,
        //         'prize_ar'=>$prize_ar,
        //     ];
        //     Competition::create($data);
        // }

        $test=Competition::find(13);
        $test->prize_files()->create([
            'src'=>'/CompetitionFiles/image1.png',
            'type'=>'image',
        ]);

        // $test=Competition::find(9);
        // $test->comments()->create([
        //    'user_id'=>2,
        //     'comment'=>$faker->realText(30),
        // ]);
    }


    public function createNews()
    {
        //     $faker = Factory::create();
        //     $title=$faker->text(10);
        //     $body=$faker->realText(60);

        //     $test = new Translate();

        //     for ($i = 0; $i < 3; $i++) {

        //         $data = [
        //             'title' => $title,
        //             'title_ar' => $test->translate($title),
        //             'body' => $body,
        //             'body_ar' => $test->translate($body),
        //             'category_id'=>3

        //         ];
        //         News::create($data);
        //     }

        /////Images Upload
        for ($i = 1; $i <= 8; $i++) {

            //     news::find((int)$i)->images()->create([
            //         'src' => '/NewsImages/newImage.png',
            //         'type' => 'image',
            //     ]);
            // }

            // news::find($i)->likes()->create([
            //  'is_like'=>random_int(0,1),
            //  'user_id'=>random_int(1,6),
            // ]);

        }
    }

    public function createCategory()
    {
        return $this->CreateCatgoryModel('Course');
    }

    public function CreateBussinus()
    {

        $faker = Factory::create();
        $title = $faker->text(10);
        $body = $faker->realText(60);

        $test = new Translate();


        $data = [
            'name' => $title,
            'name_ar' => $test->translate($title),
            'body' => $body,
            'body_ar' => $test->translate($body),
            'category_id' => 3

        ];
        $Business = Business::create($data);

        $Business->files()->create([
            'src' => '/BusinessFiles/video.png',
            'type' => 'video'
        ]);
    }

    public function CreateBlog()
    {

        $faker = Factory::create();
        $title = $faker->text(10);
        $body = $faker->realText(70);

        $test = new Translate();
        $data = [
            'title' => $title,
            'title_ar' => $test->translate($title),
            'body' => $body,
            'body_ar' => $test->translate($body),
            'category_id' => 9,

        ];
        $blog = Blog::create($data);
        $blog->images()->create([
            'src' => '/blogs/Image1.png',
            'type' => 'image',
        ]);
    }

    public function getArticle()
    {
        $faker = Factory::create();
        $title = $faker->text(10);
        $body = $faker->realText(100);

        $test = new Translate();
        $data = [
            'title' => $title,
            'title_ar' => $test->translate($title),
            'body' => $body,
            'body_ar' => $test->translate($body),
            'category_id' => 10,

        ];
        $blog = Article::create($data);
        $blog->images()->create([
            'src' => '/articles/Image1.png',
            'type' => 'image',
        ]);
        if ($blog) {
            return true;
        }
        return false;
    }

    public function createResearch()
    {
        // $faker = Factory::create();
        // $title = $faker->text(20);
        // $body = $faker->realText(300);

        // $test = new Translate();
        // $data = [
        //     'title' => $title,
        //     'title_ar' => $test->translate($title),
        //     'body' => $body,
        //     'body_ar' => $test->translate($body),
        //     'category_id' => 11,
        //     'status' => 2
        // ];
        // $Research = Research::create($data);
        $Research=Research::find(1);
        $Research->images()->create([
            'src' => '/research/Image1.png',
            'type' => 'image',
        ]);
        if ($Research) {
            return true;
        }
        return false;
    }

    public function createRooms(){
        // $test = new Translate();
         $faker = Factory::create();
            $message=$faker->realText(30);
        // $name=$faker->city();
        // $name_ar=$test->translate($name);

        // Room::create([
        //     'name'=>$name,
        //     'name_ar'=>$name_ar,
        //     'image'=>'/rooms/r1.png',
        // ]);

            // $room=Room::find(2);
            // $room->messages()->create([
            //     'user_id'=>1,
            //     'message'=>$message,
            // ]);


    }
}
