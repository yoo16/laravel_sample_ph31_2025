<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ImageService
{
    public function uploadImage(Request $request, string $inputName = 'image'): ?string
    {
        // ファイルがなければnullを返す: hasFile()
        if (!$request->hasFile($inputName)) {
            return null;
        }

        // TODO: input タグの name からファイルを取得: file()
        $image = $request->file($inputName);

        // UUID作成
        $uuid = Str::uuid();

        // TODO: 拡張子取得: getClientOriginalExtension()
        $ext = $image->getClientOriginalExtension();

        // TODO: UUIDからファイル名を生成: 拡張子: $image->getClientOriginalExtension()
        $image_name = "{$uuid}.{$ext}";

        // TODO: ファイルを移動: move(移動先, ファイル名)
        // 移動先: public/images : public_path('images')

        // データベースに保存する相対パスを返す
        return "/images/{$image_name}";
    }
}
