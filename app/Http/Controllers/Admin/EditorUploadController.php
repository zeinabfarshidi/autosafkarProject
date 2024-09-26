<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditorUploadController extends Controller
{
    public function upload(Request $request)
    {
//        dd($request->all());
        $file = $request->file('upload');
//        logo.png
        $base_name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME); //logo
        $ext = $file->getClientOriginalExtension(); //png
        $file_name = $base_name . '_' . time() . '.' . $ext;
        $file->storeAs('storage/admin/images/post', $file_name, 'public_files');
        $function = $request->CKEditorFuncNum;
        $url = asset('storage/admin/images/post/' . $file_name);

        return response("<script>window.parent.CKEDITOR.tools.callFunction({$function}, '{$url}', 'فایل به درستی آپلود شد')
</script>");
    }
}
