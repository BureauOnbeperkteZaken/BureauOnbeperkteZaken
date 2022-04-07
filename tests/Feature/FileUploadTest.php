<?php

namespace Tests\Feature;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_avatars_can_be_uploaded()
    {

        $files = new Filesystem();
        $file = UploadedFile::fake()->create('avatar.pdf');
        Storage::disk('public')->put('uploadsTest', $file);

        $extension = $file->getClientOriginalExtension();
        $extensionArray = [
            'pdf',
            'xls',
            'xlsx',
            'png',
            'jpeg',
            'jpg',
            'webp',
            'svg',
            'gif'
        ];

        if (in_array($extension, $extensionArray)) {
            $this->assertCount(1, Storage::disk('public')->files());
        } else {
            $this->assertCount(0, Storage::disk('public')->files());
        }
        $files->cleanDirectory('storage/app/public/uploadsTest');
    }
}
