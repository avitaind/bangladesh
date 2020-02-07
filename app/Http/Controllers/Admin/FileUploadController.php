<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileUploadController extends Controller
{
    /**
     * Handle image upload from TinyMCE file browser window
     *
     * @param  Request $request
     * @return Response
     */
    public function uploadImage(Request $request)
    {
        $image = $request->file('image');
        $filename = 'image_'.time().'_'.$image->hashName();

        $file_path = $image->storePubliclyAs('uploads', $filename, 'public');

        $file_url = ($file_path);


        return ("
            <script>
            top.$('.mce-btn.mce-open').parent().find('.mce-textbox').val('/storage/".$file_url."').closest('.mce-window').find('.mce-primary').click();
            </script>
        ");


    }
}
