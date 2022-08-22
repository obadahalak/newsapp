<?php
namespace App\Http\Traits;

trait ResponseTrait
{
    function storeImages($photo,$folder){
        $file_extintion = $photo->getClientOriginalExtension();
        $file_name= $folder.'/'.time().rand(15,1000).'.'.$file_extintion;
        $path = $folder;
        $photo->move($path,$file_name);
        return $file_name;
    }

    public function sendRespone($result,$massage,$code = 200)
    {
        $response = [
            'status' => true,
            'data' => $result,
            'massage' => $massage
        ];
        return response()->json($response,$code);
    }

    public function sendError($error,$errorMassage = [],$code = 404)
    {
        $response = [
            'status' => false,
            'error' => $error,
            'massage' => $errorMassage
        ];
        if (!empty($errorMassage)) {
            $error = $errorMassage;
        }
        return response()->json($response,$code);
    }

    public function change_image_path($old_image,$old_name,$new_name)
    {
        $temp = explode('/',$old_image);
        $index = array_search($old_name,$temp);
        $temp[$index] = $new_name;
        return implode('/',$temp);
    }

    public function generate_uuid()
    {
        $bool = true;
        $uuid = '';
        while ($bool) {
            $uuid = (string) Str::uuid();
            $check = DB::table('users')->where('firebase_token',$uuid)->count();
            if ($check == 0) {
                $bool = false;
            }
        }
        return $uuid;
    }

}
