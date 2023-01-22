<?php

namespace App\Services;

use ImageIntervention;

class FileUploadService
{
    public function updateImage($model, $request, $path, $methodType)
    {
        $image = ImageIntervention::make($request->file('image'));

        if (!empty($model->image)) {
            $currentImage = public_path() . $path . $model->image;

            if (file_exists($currentImage)) {
                unlink($currentImage);
            }
        }

        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();

        $image->crop(
            $request->width,
            $request->height,
            $request->left,
            $request->top
        );

        $name = time() . '.' . $extension;
        $image->save(public_path() . $path . $name);

        if ($methodType === 'store') {
            $model->user_id = $request->get('user_id');
        }

        $model->image = $name;

        $model->save();
    }
}
