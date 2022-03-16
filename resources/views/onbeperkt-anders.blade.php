<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="onbeperkt-anders.css">

<body>
    <div class="topnav">
        <a href="/">Home</a>
        <a class="active" href="/onbeperkt-anders">Project Oberperkt Anders</a>
    </div>
    <div>
        <?php

        use App\Http\Controllers\VideoController;

        $video = VideoController::getOnbeperktAndersVideoLink();
        ?>

        <div class="video-container">
            <iframe src=<?php echo $video; ?> frameBorder="0" allowfullscreen></iframe>
        </div>

        <div>
            <h1>Onbeperkt Anders</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet nunc ut arcu semper consectetur. Maecenas ullamcorper velit eu elit volutpat, ut auctor odio blandit. Sed hendrerit feugiat felis, ut egestas ante bibendum eget. Aenean dignissim libero at mi facilisis, nec luctus justo vestibulum. Aliquam semper non justo in sodales. Donec quis nulla id mi dictum luctus. Quisque tortor nibh, accumsan sed mollis vitae, hendrerit at arcu. Ut bibendum massa tellus, ac porttitor turpis bibendum eget. Quisque ornare ipsum eu leo porta ultrices. Nunc quis gravida enim. Ut vel convallis justo.</p>
            <h2>Wie we zijn</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis non tortor vitae bibendum. Aenean et nibh laoreet ante posuere sollicitudin quis eget ex. Phasellus in ipsum et velit tincidunt consequat. Vestibulum et sagittis dolor, consectetur porttitor nibh. Praesent tortor tortor, pulvinar at dapibus in, varius et sem. Suspendisse potenti. Etiam at nulla purus. Mauris ut arcu ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <h2>Wat we doen</h2>
            <p>Blandit posuere mi non lacinia. Duis auctor tempus justo ut mattis. Nullam rutrum tortor ac congue ullamcorper. Fusce eget luctus orci, nec semper elit. Sed commodo ex vel lectus dictum vehicula. Donec bibendum justo at nisi euismod, eget euismod lacus dignissim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas faucibus viverra magna, sed feugiat justo rutrum vehicula. Aliquam quis arcu purus. Fusce eu orci tortor.</p>
            <h2>Wat we willen bereiken</h2>
            <p>Integer id lacinia tortor. Nulla molestie sem nisl, nec lacinia nibh consequat vitae. Donec eget mattis enim, sed sollicitudin mauris. Donec imperdiet, massa non dictum iaculis, leo velit scelerisque sem, vitae cursus est felis et sapien. Curabitur convallis quis lacus sit amet ullamcorper. Cras porta, dui eu imperdiet lacinia, enim erat condimentum turpis, at efficitur ligula diam vitae lacus. Quisque arcu ligula, viverra at diam a, interdum rutrum tortor. Nullam sollicitudin nisi odio, eget auctor ipsum lobortis ut. Vestibulum id felis dapibus, fermentum nisi quis, varius eros. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In sodales lacus et eros dapibus, ultricies vestibulum odio laoreet. Vestibulum sagittis finibus tellus ut tincidunt. Nunc eu velit in neque convallis mollis non eget mauris. Etiam viverra elementum velit sit amet pretium.</p>
        </div>
    </div>

</body>
</head>

</html>