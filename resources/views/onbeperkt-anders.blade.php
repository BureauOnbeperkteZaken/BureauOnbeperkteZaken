<!DOCTYPE html>
<html>

<head>

<body>
    <div>
        <?php

        use Illuminate\Support\Facades\DB;
        use App\Project;

        $videoLink = Project::first()->video_link;
        ?>
        <h1>Onbeperkt Anders</h1>

        <iframe src=<?php echo $videoLink; ?> width="320" height="240" allowfullscreen></iframe>

    </div>

</body>
</head>

</html>