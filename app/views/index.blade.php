<?php
/**
 * Created by PhpStorm.
 * User: d_polly
 * Date: 11/29/2014
 * Time: 8:46 PM
 */


 @extends('_master')

 @section('title')
 	Welcome to Foobooks
 @stop

 @section('head')

 @stop

 @section('content')

 	{{ Form::open(array('url' => '/plants', 'method' => 'GET')) }}

 		{{ Form::label('query','Search') }}

 		{{ Form::text('query'); }}

 		{{ Form::submit('Search'); }}

 	{{ Form::close() }}

 @stop
