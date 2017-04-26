<?php

return [

  '#theme-name' => 'VR View 360 Video with Hotspot Navigation',
  '#theme-key' => 'vr-view-360-video-hotspot',
  '#theme-version' => '1.0',
  '#ideaspace-version' => '>=1.0.1',
  '#theme-description' => 'Video sphere viewer with navigation hotspots. Based on the "VR View for the Web" by Google.',
  '#theme-author-name' => 'IdeaSpaceVR',
  '#theme-author-email' => 'info@ideaspacevr.org',
  '#theme-homepage' => 'https://www.ideaspacevr.org/themes',
  '#theme-keywords' => 'video sphere, gaze input navigation, mobile, 360, video',
  '#theme-compatibility' => 'Google Cardboard, Daydream, Oculus, Samsung Gear VR, no headset',
  '#theme-view' => 'scene',

  '#content-types' => [

    'video-spheres' => [
      '#label' => 'Video Spheres',
      '#description' => 'Manage your video spheres.',
      '#max-values' => 'infinite',
      '#fields' => [

        'video-sphere' => [
          '#label' => 'Video Sphere',
          '#description' => 'Upload a video sphere in equirectangular projection format. Width or height must not be bigger than 2048 pixels.',
          '#help' => 'Video sphere in equirectangular projection format. Width or height must not be bigger than 2048 pixels.',
          '#type' => 'videosphere',
          '#required' => false,
          '#file-extension' => ['mp4'],
        ],

        'navigation-hotspots' => [
          '#label' => 'Video Sphere Navigation Hotspot',
          '#description' => 'Add navigation hotspots moving from one video sphere to the next.',
          '#help' => '',
          '#type' => 'position',
          '#maxnumber' => 10, 
          '#required' => false,
          '#content-type-reference' => 'video-spheres',
          '#field-reference' => 'video-sphere',
        ],

      ], /* fields */

    ], /* video-spheres */

  ], /* content types */

];


