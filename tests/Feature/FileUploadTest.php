<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_avatars_can_be_uploaded()
    {

        $file = UploadedFile::fake()->image('avatar.jpg');
        Storage::disk('public')->put('uploads', $file);

        $response = $this->post('/public', [
            'avatar' => $file,
        ]);

        // Storage::disk('public')->assertExists($file->getClientOriginalName());
        //check if uploaded file exists
        $this->assertCount(1, Storage::disk('public')->files());
    }
}
