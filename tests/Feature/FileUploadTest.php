<?php

namespace Tests\Feature;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

use function PHPUnit\Framework\assertTrue;

class ExampleTest extends TestCase
{
    public function test_avatars_can_be_uploaded()
    {

        $files = new Filesystem();
        $file = UploadedFile::fake()->create('avatar.pdf');


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
            $path = Storage::disk('public')->put('uploadsTest', $file);
            $this->assertTrue(Storage::disk('public')->exists($path));
        } else {
            $this->assertFalse(false);
        }
        $files->cleanDirectory('storage/app/public/uploadsTest');
    }
}
