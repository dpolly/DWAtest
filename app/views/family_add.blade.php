<?php
/**
 * DMP 12-01-2014: Created
 */

 @extends('_master')

 @section('title')
 	DWATest Add Family
 @stop

 @section('content')

 	<h1>Add a family</h1>

 	{{ Form::open(array('url' => '/family/create')) }}


 		{{ Form::label('botanical name','Title') }}
 		{{ Form::text('botanical_name'); }}

 		{{ Form::submit('Add'); }}

 	{{ Form::close() }}

 @stop

