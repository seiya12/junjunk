<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use App\Model\Product;
use App\Model\ImageUrl;
use DateTime;
use Storage;

class SellController extends Controller
{
    public function index()
    {
        return view('sell');
    }

    public function upload(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'file' => 'required|max:10000',
            'name' => 'required|string|max:40',
            'description' => 'required|string|max:1000',
            'category' => 'required|string|min:2|max:2',
            'estimate' => 'required|string|min:3|max:3',
            'price' => 'required|int',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput($req->all);
        }

        $user = Auth::user();
        $productCode = $this->createProductCode($req->category);
        $files = $req->file('file');
        $urls = array();

        foreach ($files as $key => $file) {
            if ($key === 10) {
                break;
            }
            $urls[] = $this->createImage($file, $req->category, $user, ++$key);
            ImageUrl::create([
                'product_code'   => $productCode,
                'url'            => $productCode . '_' . $key,
            ]);
        }

        Product::insert([
            'product_code'   => $productCode,
            'name'           => $req->name,
            'sell_user_code' => $user['user_code'],
            'category'       => $req->category,
            'price'          => $req->price,
            'description'    => $req->description,
            'estimate'       => $req->estimate,
            'sell_type'      => 'F',
            'end_date'       => new DateTime(),
        ]);

        return redirect()->route('top');
    }

    public function createImage($file, $category, $user, $key)
    {
        $productCode = $this->createProductCode($category);
        $fileName = $productCode . '_' . $key . '.jpg';
        $path = '/' .  $user['user_code'] . '/' . $fileName;

        // 画像の縦幅と横幅を変更
        $thumbFile = Image::make($file)->resize(300, 300)->encode('jpg');
        // ファイルをS3に保存
        Storage::disk('s3')->put($path, $thumbFile, 'public');
        // S3上のURLを取得
        $url = Storage::disk('s3')->url($path);

        return $url;
    }

    public function createProductCode($category)
    {
        $section = 'F';
        $year = str_pad(date('y'), 3, 0, STR_PAD_LEFT);
        $month = strtoupper(dechex(date('n')));
        $cnt = Product::where('product_code', 'LIKE', "$category$section$year$month%")->count();
        if ($cnt === 0) {
            $num = str_pad(1, 5, 0, STR_PAD_LEFT);
        } else {
            $num = str_pad($cnt + 1, 5, 0, STR_PAD_LEFT);
        }
        $productCode = $category . $section . $year . $month . $num;

        return $productCode;
    }
}
