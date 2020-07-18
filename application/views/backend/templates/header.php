<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= $title; ?></title>
  <link href="<?= base_url('assets/backend/'); ?>plugins/select2/css/select2.css" rel="stylesheet"/>
  <script src="<?= base_url('assets/backend/'); ?>plugins/sweetalert2/sweetalert2.all.min.js"></script>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css"/>
  <link href="<?= base_url('assets/backend'); ?>/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">
  <!-- CSS Libraries -->
  <script src='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.css' rel='stylesheet' />
  <script src="https://unpkg.com/es6-promise@4.2.4/dist/es6-promise.auto.min.js"></script>
  <script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js"></script>
  <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>
  <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css" type="text/css" />
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/backend'); ?>/css/style.css">
  <link rel="stylesheet" href="<?= base_url('assets/backend'); ?>/css/components.css">
  <style>
    #geocoder-container > div {
    min-width: 50%;
    margin-left: 25%;
    }
  </style>
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
